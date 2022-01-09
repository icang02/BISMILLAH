<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $harga = $_POST['harga'];

    $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', harga = '$harga' ";
    mysqli_query($koneksi, $sql);
    header('location: index.php');
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

    <title>Halaman Index</title>
</head>

<body>


    <div class="container w-50">
        <h1 class="text-center">Halaman Update Data</h1>
        <a href="index.php" class="btn btn-primary mb-4">kembali</a>
        <form action="" method="POST">

            <?php while ($data = mysqli_fetch_array($query)) : ?>
                <label for="Judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="Judul" name="judul" required value="<?php echo $data['judul'] ?>">

                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required value="<?php echo $data['penulis'] ?>">

                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required value="<?php echo $data['harga'] ?>">

                <button type="submit" class="btn btn-primary mt-3" name="update">Update</button>
                <button type="reset" class="btn btn-danger mt-3">reset</button>
            <?php endwhile ?>


        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>