<?php

require __DIR__ . '/../vendor/autoload.php';

load_env(__DIR__ . '/../.env');

$_CONFIG = get_configs();

use App\Router;

$db = $_CONFIG['db'];
$conn = new PDO("mysql:host={$db['host']}:{$db['port']};dbname={$db['database']}", $db['username'], $db['password']);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$router = new Router();

echo $router->handle($_SERVER['REQUEST_URI']);
