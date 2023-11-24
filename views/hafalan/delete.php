<div class="container mt-5">
    <h2>Delete Hafalan</h2>

    <!-- Display confirmation message -->
    <p>Are you sure you want to delete the Hafalan with <br/>
        Tanggal: <strong><?php echo $hafalan['tanggal']; ?></strong>,<br>
        Surat: <strong><?php echo $hafalan['surat']; ?></strong>,<br>
        Ayat: <strong><?php echo $hafalan['ayat']; ?></strong>?</p>


    <!-- Form for deleting the Hafalan -->
    <form action="<?php echo (SERVER_HOST); ?>/hafalan/delete/<?php echo $hafalan['id']; ?>" method="post">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    <!-- Link back to the Hafalan List -->
    <a href="<?php echo (SERVER_HOST); ?>/hafalan/" class="btn btn-secondary mt-3">Cancel and Back to Hafalan List</a>
</div>