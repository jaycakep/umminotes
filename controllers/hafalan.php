<?php
require_once 'models/hafalan.php';
require_once 'models/peserta.php';
require_once 'models/masterstatus.php';

class HafalanController {
    private $model;
    private $peserta;
    private $masterStatus;

    public function __construct() {
        require_once 'views/template/header.php';
        $this->model = new Hafalan();
        $this->peserta = new Peserta();
        $this->masterStatus = new MasterStatus();
    }

    public function index() {
        $hafalanList = $this->model->getAllHafalan();
        require 'views/hafalan/index.php';
        require_once 'views/template/footer.php'; // Include footer template
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idpeserta = filter_input(INPUT_POST, 'idpeserta');
            $tanggal = filter_input(INPUT_POST, 'tanggal');
            $surat = filter_input(INPUT_POST, 'surat');
            $ayat = filter_input(INPUT_POST, 'ayat');
            $keterangan = filter_input(INPUT_POST, 'keterangan');
            $catatan = filter_input(INPUT_POST, 'catatan');
            $stat = filter_input(INPUT_POST, 'stat');

            $this->model->addHafalan($idpeserta, $tanggal, $surat, $ayat, $keterangan, $catatan, $stat);

            header("Location: " . SERVER_HOST . "/hafalan"); // Redirect after creating
        } else {
            // Display the form to create a new hafalan
            $daftarPeserta = $this->peserta->getAllPeserta();
            $daftarStatus = $this->masterStatus->getAllMasterStatus();
            require 'views/hafalan/create.php';
            require_once 'views/template/footer.php'; // Include footer template
        }
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idpeserta = filter_input(INPUT_POST, 'idpeserta');
            $tanggal = filter_input(INPUT_POST, 'tanggal');
            $surat = filter_input(INPUT_POST, 'surat');
            $ayat = filter_input(INPUT_POST, 'ayat');
            $keterangan = filter_input(INPUT_POST, 'keterangan');
            $catatan = filter_input(INPUT_POST, 'catatan');
            $stat = filter_input(INPUT_POST, 'stat');

            $this->model->updateHafalan($id, $idpeserta, $tanggal, $surat, $ayat, $keterangan, $catatan, $stat);
            header("Location: " . SERVER_HOST . "/hafalan"); // Redirect after updating
        } else {
            // Display the form to update the hafalan
            $hafalan = $this->model->getHafalanById($id);
            require 'views/hafalan/update.php';
            require_once 'views/template/footer.php'; // Include footer template
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->deleteHafalan($id);
            header("Location: " . SERVER_HOST . "/hafalan"); // Redirect after deleting
        } else {
            // Display confirmation form to delete the hafalan
            $hafalan = $this->model->getHafalanById($id);
            require 'views/hafalan/delete.php';
            require_once 'views/template/footer.php'; // Include footer template
        }
    }
}

?>
