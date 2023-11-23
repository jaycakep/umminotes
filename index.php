<?php
require 'koneksi.php';
$serveHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
define('SERVER_HOST', '//'.$serveHost );

$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$url = rtrim($url, '/');
$url = explode('/', $url);
$action = isset($url[1]) ? $url[1] : 'index';

if (empty($url[1])) {
    include 'controllers/index.php';
    $controller = new Index();
    $controller->index();
    exit;
}


$file = 'controllers/' . $url[1] . '.php';
if (file_exists($file)) {
    include $file;
} else {
    require '404.php';
    exit;
}

$controllerName = (ucfirst($url[1]).'Controller');
$controller = new $controllerName ;

// calling methods
if (isset($url[3])) {
    $methodName = $url[2];
    if (method_exists($controller, $methodName)) {
        $controller->$methodName($url[3]);
    } else {
        require '404.php';
        exit;
    }
} elseif (isset($url[2])) {
    $methodName = $url[2];
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        require '404.php';
        exit;
    }
} else {
    $controller->index();
}

//include_once 'action.php';
?>
