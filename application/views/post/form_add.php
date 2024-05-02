<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
</head>

<body>
    <h2>Insert new data</h2>

    <?php echo form_open_multipart('post/insert') ?>
    <p>
        <input type="text" name="judul_foto" placeholder="Caption">
    </p>
    <p>
        <input type="text" name="deskripsi_foto" placeholder="Deskripsi">
    </p>
    <p>
        <input type="file" name="lokasi_file">
    </p>
    <p>
        <input type="submit" value="Save">
    </p>
    <?php echo form_close() ?>
</body>

</html>