
<?php
class Peserta {
    public function getAllPeserta() {
        return R::findAll('peserta');
    }

    public function getPesertaById($id) {
        return R::load('peserta', $id);
    }

    public function createPeserta($nama, $usia) {
        $peserta = R::dispense('peserta');
        $peserta->nama = $nama;
        $peserta->usia = $usia;
        R::store($peserta);
    }

    public function updatePeserta($id, $nama, $usia) {
        $peserta = R::load('peserta', $id);
        $peserta->nama = $nama;
        $peserta->usia = $usia;
        R::store($peserta);
    }

    public function deletePeserta($id) {
        $peserta = R::load('peserta', $id);
        R::trash($peserta);
    }
}
?>