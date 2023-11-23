<?php
require 'koneksi.php';

$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$url = rtrim($url, '/');
$url = explode('/', $url);

if (empty($url[1])) {
    require 'controllers/index.php';
    $controller = new Index();
    $controller->index();
    exit;
}

$file = 'controllers/' . $url[1] . '.php';
if (file_exists($file)) {
    require $file;
} else {
    require '404.php';
    exit;
}

$controllerName = $url[1];
$controller = new $controllerName;
$controller->loadModel($controllerName);

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
?>
