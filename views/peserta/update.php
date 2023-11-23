<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Update Peserta</h2>

        <!-- Form for updating the Peserta -->
        <form action="<?php echo(SERVER_HOST); ?>/peserta/update/<?php echo $peserta['id']; ?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $peserta['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" value="<?php echo $peserta['usia']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <!-- Link back to the Peserta List -->
        <a href="<?php echo(SERVER_HOST); ?>/peserta/" class="btn btn-secondary mt-3">Back to Peserta List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
