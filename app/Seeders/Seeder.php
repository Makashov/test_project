<?php

namespace App\Seeders;

use PDO;

abstract class Seeder
{
    public function run(): void {
        $_CONFIG = get_configs();
        $db = $_CONFIG['db'];
        $conn = new PDO("mysql:host={$db['host']}:{$db['port']};dbname={$db['database']}", $db['username'], $db['password']);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $this->getData();

        if ($data === []) {
            return;
        }

        $table = $this->getTableName();

        foreach ($data as $row) {
            $columns = array_keys($row);
            $columnList = implode(', ', array_map(static fn (string $c): string => "`$c`", $columns));
            $placeholders = implode(', ', array_map(static fn (string $c): string => ":$c", $columns));

            $stmt = $conn->prepare("INSERT IGNORE INTO `$table` ($columnList) VALUES ($placeholders)");
            $stmt->execute($row);
        }

        echo "Seeding $table complete.\n";
    }

    abstract public function getData(): array;

    abstract public function getTableName(): string;
}