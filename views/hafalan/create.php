<div class="container mt-5">
    <h2>Create Hafalan</h2>
    <!-- Form for creating a new Hafalan -->
    <form action="<?php echo (SERVER_HOST); ?>/hafalan/create" method="post">
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="idpeserta" class="form-label">Pilih Peserta</label>
            <select class="form-select" id="idpeserta" name="idpeserta" required>
                <?php foreach ($daftarPeserta as $peserta) : ?>
                    <option value="<?php echo $peserta['id']; ?>"><?php echo $peserta['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="surat" class="form-label">Surat</label>
            <input type="text" class="form-control" id="surat" name="surat" required>
        </div>
        <div class="mb-3">
            <label for="ayat" class="form-label">Ayat</label>
            <input type="text" class="form-control" id="ayat" name="ayat" required>
        </div>
        <div class="mb-3">
            <label for="stat" class="form-label">Status</label>
            <select class="form-select" id="stat" name="stat" required>
                <?php foreach ($daftarStatus as $status) : ?>
                    <option value="<?php echo $status['id']; ?>"><?php echo $status['deskripsi']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea class="form-control" id="catatan" name="catatan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

    <!-- Link back to the Hafalan List -->
    <a href="<?php echo (SERVER_HOST); ?>/hafalan" class="btn btn-secondary mt-3">Back to Hafalan List</a>
</div>