<?php

class MasterStatus
{
    public function getAllMasterStatus()
    {
        return R::findAll('masterstatus');
    }

    public function getMasterStatusById($id)
    {
        return R::load('masterstatus', $id);
    }

    public function addMasterStatus($deskripsi)
    {
        $masterStatus = R::dispense('masterstatus');
        $masterStatus->deskripsi = $deskripsi;
        R::store($masterStatus);
    }

    public function updateMasterStatus($id, $deskripsi)
    {
        $masterStatus = R::load('masterstatus', $id);
        $masterStatus->deskripsi = $deskripsi;
        R::store($masterStatus);
    }

    public function deleteMasterStatus($id)
    {
        $masterStatus = R::load('masterstatus', $id);
        R::trash($masterStatus);
    }
}

?>
