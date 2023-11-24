<?php
class Hafalan {
    public function getAllHafalan() {
        return R::findAll('hafalan', 'isdeleted = ?', [false]);
    }

    public function getHafalanById($id) {
        return R::findOne('hafalan', 'id = ? AND isdeleted = ?', [$id, false]);
    }

    public function addHafalan($idpeserta, $tanggal, $surat, $ayat, $keterangan, $catatan, $stat) {
        $hafalan = R::dispense('hafalan');
        $hafalan->idpeserta = $idpeserta;
        $hafalan->tanggal = $tanggal;
        $hafalan->surat = $surat;
        $hafalan->ayat = $ayat;
        $hafalan->keterangan = $keterangan;
        $hafalan->catatan = $catatan;
        $hafalan->stat = $stat;
        $hafalan->isdeleted = false;

        R::store($hafalan);
    }

    public function updateHafalan($id, $idpeserta, $tanggal, $surat, $ayat, $keterangan, $catatan, $stat) {
        $hafalan = R::load('hafalan', $id);
        if ($hafalan->id) {
            $hafalan->idpeserta = $idpeserta;
            $hafalan->tanggal = $tanggal;
            $hafalan->surat = $surat;
            $hafalan->ayat = $ayat;
            $hafalan->keterangan = $keterangan;
            $hafalan->catatan = $catatan;
            $hafalan->stat = $stat;

            R::store($hafalan);
            return true;
        }

        return false;
    }

    public function deleteHafalan($id) {
        $hafalan = R::load('hafalan', $id);
        if ($hafalan->id) {
            $hafalan->isdeleted = true;
            R::store($hafalan);
        }

        return false;
    }
}


?>
