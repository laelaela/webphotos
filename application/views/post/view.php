<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
    <title>Document</title>
</head>
<body>

    <h2>My posts</h2>
    <p><a href="<?= base_url('post/create') ?>">Buat postingan baru</a></p>
    <?= $this->session->flashdata('message') ?>

    <table class="table table-bordered border-dark"
        <thead>
            <tr>
                <th>Image</th>
                <th>Caption</th>
                <th>Description</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <!-- Pengambilan data dari database -->
            <?php
            foreach ($data as $d) :
            ?>
                <tr>
                    <td><img src="<?= base_url('assets/images/') . $d->lokasi_file; ?>" alt="gambar" width="200" title="<?php echo $d->deskripsi_foto; ?>"></td>
                    <td><?= $d->judul_foto; ?></td>
                    <td><?= $d->deskripsi_foto; ?></td>
                    <td>
                        <a href="<?= base_url('post/form_edit/' . $d->foto_id) ?>" ><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="<?= base_url('post/delete/' . $d->foto_id) ?>" ><button type="button" class="btn btn-warning">Delete</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>