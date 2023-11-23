<?php
class Peserta
{
    public function getAllPeserta()
    {
        return R::findAll('peserta', 'isdeleted = ?', [false]);
    }

    public function getPesertaById($id)
    {
        return R::findOne('peserta', 'id = ? AND isdeleted = ?', [$id, false]);
    }

    public function createPeserta($nama, $usia)
    {
        $peserta = R::dispense('peserta');
        $peserta->nama = $nama;
        $peserta->usia = $usia;
        $peserta->isdeleted = false;
        R::store($peserta);
    }

    public function updatePeserta($id, $nama, $usia)
    {
        $peserta = R::load('peserta', $id);
        $peserta->nama = $nama;
        $peserta->usia = $usia;
        R::store($peserta);
    }

    public function deletePeserta($id)
    {
        $peserta = R::load('peserta', $id);
        $peserta->isdeleted = true;
        R::store($peserta);
    }
}
