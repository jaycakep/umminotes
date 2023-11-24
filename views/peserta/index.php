    <div class="container mt-5">
        <h2>Peserta List</h2>

        <!-- Display Peserta data using Bootstrap table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peserta as $row): ?>
                    <tr>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['usia']; ?></td>
                        <td>
                            <a href="<?php echo(SERVER_HOST); ?>/peserta/update/<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                            <a href="<?php echo(SERVER_HOST); ?>/peserta/delete/<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Link to the create page -->
        <a href="<?php echo(SERVER_HOST); ?>/peserta/create" class="btn btn-success">Create Peserta</a>
   
    </div>

