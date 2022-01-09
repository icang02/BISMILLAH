<?php
include 'koneksi.php';

// $sql = "SELECT * FROM buku";
// $query = mysqli_query($koneksi, $sql);

$query = mysqli_query($koneksi, "SELECT * FROM buku");

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
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">BUKU</a>
      <form class="d-flex">
        <a href="login.php" class="btn btn-success">Logout</a>
      </form>
    </div>
  </nav>

  <h1 class="text-center mt-3 fw-bold">Daftar Buku</h1>
  <div class="container">
    <a href="tambah.php" class="btn btn-primary">tambah</a>
    <table class="table mt-4 table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Penulis</th>
          <th scope="col">Harga</th>
          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>

        <?php $no = 1 ?>
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
          <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <td><?php echo $data['judul'] ?></td>
            <td><?php echo $data['penulis'] ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td>
              <a href="update.php?id=<?php echo $data['id'] ?>" class="btn btn-warning">update</a>
              <a href="delete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">delete</a>
            </td>
          </tr>
        <?php } ?>

      </tbody>

    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>