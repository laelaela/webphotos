<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
    <title>Edit data</title>
</head>

<body>
    <h2>Change data</h2>

    <form action="<?= base_url('post/update/' . $data->foto_id) ?>" method="post">
        <p>
            <input type="text" name="judul_foto" value="<?= $data->judul_foto ?>">
        </p>
        <p>
            <input type="text" name="deskripsi_foto" value="<?= $data->deskripsi_foto ?>">
        </p>
        <p>
        <button type="submit" class="btn btn-success"value="Save">Save</button>
            
        </p>
    </form>
</body>

</html>