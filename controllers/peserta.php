<?php
require_once 'models/Peserta.php';

class PesertaController
{
    private $model;

    public function __construct()
    {
        require_once 'views/template/header.php';
        $this->model = new Peserta();
    }

    public function index()
    {
        $peserta = $this->model->getAllPeserta();
        require 'views/peserta/index.php';
        require_once 'views/template/footer.php'; // Include footer template
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nama = filter_input(INPUT_POST, 'nama');
            $usia = filter_input(INPUT_POST, 'usia');

            $this->model->createPeserta($nama, $usia);

            header("Location: " . SERVER_HOST . "/peserta"); // Redirect after creating
        } else {
            // Display the form to create a new peserta
            require 'views/peserta/create.php';
            require_once 'views/template/footer.php'; // Include footer template
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nama = filter_input(INPUT_POST, 'nama');
            $usia = filter_input(INPUT_POST, 'usia');

            $this->model->updatePeserta($id, $nama, $usia);
            header("Location: " . SERVER_HOST . "/peserta"); // Redirect after updating
        } else {
            // Display the form to update the peserta
            $peserta = $this->model->getPesertaById($id);
            require 'views/peserta/update.php';
            require_once 'views/template/footer.php'; // Include footer template
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->deletePeserta($id);
            header("Location: " . SERVER_HOST . "/peserta"); // Redirect after deleting
        } else {
            // Display confirmation form to delete the peserta
            $peserta = $this->model->getPesertaById($id);
            require 'views/peserta/delete.php';
            require_once 'views/template/footer.php'; // Include footer template
        }
    }
}
