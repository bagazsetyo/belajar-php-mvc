<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use Bagasfrzetyo\PhpMvc\App\Router;
use Bagasfrzetyo\PhpMvc\Controller\HomeController;
use Bagasfrzetyo\PhpMvc\Controller\ProduceController;
use Bagasfrzetyo\PhpMvc\Middleware\AuthMiddleware;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/about', HomeController::class, 'about', []);

Router::add('GET', '/category/([0-9a-zA-Z]*)', ProduceController::class, 'category');

Router::run();