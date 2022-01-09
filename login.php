$<?php
  include 'koneksi.php';

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query) == 1) {
      header('location: index.php');
    } else {
      echo 'Username tidak ada';
    }
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

  <title>Login</title>
</head>

<body>

  <h1 class="text-center fw-bold mt-5 mb-4">Halaman login</h1>

  <form action="" method="post" class="container w-25">

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input text="username" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <button type="reset" class="btn btn-danger">reset</button>

    <p class="mt-3">Belum punya akun? <a href="register.php">Register</a></p>
  </form>











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>