    <div class="container mt-5">
        <h2>Create Peserta</h2>

        <!-- Form for creating a new Peserta -->
        <form action="<?php echo(SERVER_HOST); ?>/peserta/create" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <!-- Link back to the Peserta List -->
        <a href="<?php echo(SERVER_HOST); ?>/peserta" class="btn btn-secondary mt-3">Back to Peserta List</a>
    </div>

