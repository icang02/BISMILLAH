<?php

include 'koneksi.php';

// query menampilkan data mahasiswa
$sql = "SELECT * FROM tb_mhs";
$query = mysqli_query($koneksi, $sql);



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Final Pemrograman Web</title>
</head>

<body>

    <div class="container py-5">
        <table class="table table-hover">
            <h1 class="text-center mb-4">Data Mahasiswa</h1>
            <a class="btn btn-sm btn-primary" href="update.php?id<?php echo $data['id'] ?>">Tambah</a>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>

                <?php $no = 1; ?>
                <?php while ($data = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <th scope="row"> <?php echo $no++ ?> </th>
                        <td> <?php echo $data['nim'] ?> </td>
                        <td> <?php echo $data['nama'] ?> </td>
                        <td> <?php echo $data['alamat'] ?> </td>
                        <td> <?php echo $data['agama'] ?> </td>
                        <td>
                            <a class="btn btn-sm btn-danger" href="update.php?id<?php echo $data['id'] ?>">hapus</a>
                        </td>
                    </tr>
                <?php endwhile ?>


            </tbody>



        </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
