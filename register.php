<?php
    include 'koneksi.php';

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if($password == $password2) {
            //memasukkan data user kedatabase

            $sql = "INSERT INTO users VALUES ('', '$username', '$password')";
            mysqli_query($koneksi, $sql);

            echo "Berhasil registrasi";
    
        }
        else {
            echo "Konfirmasi password tidak sama";
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

    <title>Register</title>
  </head>
  <body>

    <h1 class="text-center fw-bold mt-5 mb-4" >Halaman register</h1>
<form action="" method="post"class="container w-25">

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div> 
  <div class="mb-3">
    <label for="password2" class="form-label">konfirmasi password</label>
    <input type="password2" class="form-control" id="password2" name="password2" required>
  </div>

  
  
  <button type="submit" class="btn btn-primary"name="register">register</button>
  <button type="reset" class="btn btn-danger">reset</button>

  <p class="mt-3">sudah punya akun? <a href="login.php">login</a></p>
</form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>