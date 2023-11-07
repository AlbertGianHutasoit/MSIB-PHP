<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<div class = "container">
    <div class = "row-mt-5">
        <div class = "col-sm-12">
        <?php
        include "koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM customer")
        ?>

        <center><h1>Data Buku:</h1></center>
        <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php"> Tambah Buku </a>
            <table  class="table table-striped table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Dibuat Pada</th>
                    <th>Aksi</th>
                </tr>
                <?php if(mysqli_num_rows($query)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $data["id"] ?></td>
                    <td><?php echo $data["first_name"]." ".$data["last_name"] ?></td>
                    <td><?php echo $data["email"] ?></td>
                    <td><?php echo $data["phone"] ?></td>
                    <td><?php echo $data["address"] ?></td>
                    <td><?php echo $data["created_at"] ?></td>
                    <td> <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger">Delete</a> &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah</a></td>
                </tr>
                <?php }
                } ?>
            </table>
        </form>
        </div>
    </div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>