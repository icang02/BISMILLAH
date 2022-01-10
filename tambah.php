<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO tb_mhs VALUES ('', '$nim', '$nama', '$alamat', '$agama')";
    mysqli_query($koneksi, $sql);

    header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Final | Web</title>
</head>

<body class="container">

    <form action="" method="post">
        <h1 class="text-center mb-4">Update</h1>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="password" class="form-control" id="nim" name="nim" value="">
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Nama</label>
            <input type="password" class="form-control" id="nim" name="nama">
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Alamat</label>
            <input type="password" class="form-control" id="nim" name="alamat">
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Agama</label>
            <input type="password" class="form-control" id="nim" name="agama">
        </div>

        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
