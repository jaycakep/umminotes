    <div class="container mt-5">
        <h2>Delete Peserta</h2>

        <!-- Display confirmation message -->
        <p>Are you sure you want to delete the Peserta: <strong><?php echo $peserta['nama']; ?></strong>?</p>

        <!-- Form for deleting the Peserta -->
        <form action="<?php echo(SERVER_HOST); ?>/peserta/delete/<?php echo $peserta['id']; ?>" method="post">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <!-- Link back to the Peserta List -->
        <a href="<?php echo(SERVER_HOST); ?>/peserta/" class="btn btn-secondary mt-3">Cancel and Back to Peserta List</a>
    </div>

