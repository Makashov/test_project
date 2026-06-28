<?php

require __DIR__ . '/../vendor/autoload.php';

load_env(__DIR__ . '/../.env');

$_CONFIG = require __DIR__ . '/../config/config.php';

use App\App;
use App\Router;

$db = $_CONFIG['db'];
$conn = new PDO("mysql:host={$db['host']}:{$db['port']};dbname={$db['database']}", $db['username'], $db['password']);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$app = new App();
$router = new Router();

echo $router->handle($_SERVER['REQUEST_URI']);
