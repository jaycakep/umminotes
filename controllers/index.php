<?php
class Index {
    private $model;
    function __construct() {
        echo 'Ini adalah halaman index!';
    }

    function index() {
        echo 'Ini adalah metode index!';
    }

    function loadModel($model) {
        require_once 'models/' . $model . '.php';
        $this->model = new $model();
    }
}
?>
