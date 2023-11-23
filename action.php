<?php

if ($action === 'peserta') {
    $pesertaController = new PesertaController();

    switch ($url[2] ?? '') {
        case 'create':
            $pesertaController->create();
            break;
        case 'update':
            $id = $url[3] ?? null;
            $pesertaController->update($id);
            break;
        case 'delete':
            $id = $url[3] ?? null;
            $pesertaController->delete($id);
            break;
        default:
            break;
    }

    exit;
}

?>