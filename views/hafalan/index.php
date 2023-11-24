<div class="container mt-5">
    <h2>Hafalan List</h2>

    <!-- Display Hafalan data using Bootstrap table -->
    <table class="table">
        <thead>
            <tr>
                <th>Peserta</th>
                <th>Tanggal</th>
                <th>Surat</th>
                <th>Ayat</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Catatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hafalanList as $hafalan) :
                $peserta = $this->peserta->getPesertaById($hafalan['idpeserta']);
                $masterStatus = $this->masterStatus->getMasterStatusById($hafalan['stat']);
            ?>
                <tr>
                    <td><?php echo $peserta['nama']; ?></td>
                    <td><?php echo $hafalan['tanggal']; ?></td>
                    <td><?php echo $hafalan['surat']; ?></td>
                    <td><?php echo $hafalan['ayat']; ?></td>
                    <td><?php echo $masterStatus['deskripsi']; ?></td>
                    <td><?php echo $hafalan['keterangan']; ?></td>
                    <td><?php echo $hafalan['catatan']; ?></td>
                    <td>
                        <a href="<?php echo (SERVER_HOST); ?>/hafalan/update/<?php echo $hafalan['id']; ?>" class="btn btn-primary">Update</a>
                        <a href="<?php echo (SERVER_HOST); ?>/hafalan/delete/<?php echo $hafalan['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Link to the create page -->
    <a href="<?php echo (SERVER_HOST); ?>/hafalan/create" class="btn btn-success">Create Hafalan</a>
</div>