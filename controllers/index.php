<?php
class Index {
    private $model;
    function __construct() {
    }

    function index() {
        $pageTitle = "Home Page";
        require_once 'views/template/header.php';
        require_once 'views/view_index.php';
    }

    function loadModel($model) {
        require_once 'models/' . $model . '.php';
        $this->model = new $model();
    }
}
?>