<!DOCTYPE html>
<html>
<head>
    <title> Data Mahasiswa </title>
    <link rel="stylesheet" href="asset\css\bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="newData.php"> Tambah Data</a>
      <a class="nav-item nav-link" href="profile.php"> Profile </a>
      <a class="nav-item nav-link" href="index.php?logout=iya"> Logout </a>
    </div>
  </div>
</nav>

    <div class="container mt-2">
        <div class="row">
            <div class="col" >   
                <center><h2> Data Mahasiswa </h2></center>
                <hr>
                <form action="dashboard.php" method="get" class="mb-2 float-right">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">NIM</span>
                    </div>
                    <input type="text" class="form-control" name="search">
                    <div class="input-group-append">
                        <input type="submit" name="action" value="Cari" class="btn btn-success">
                    </div>
                </div>
                </form>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th> NIM </th>
                            <th width=20%> Nama Lengkap </th>
                            <th width=10%> Kelas </th>
                            <th width=20%> Hobi </th>
                            <th> Genre Film </th>
                            <th> Tempat Wisata </th>
                            <th style="width:14%;"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("proses.php");
                            if(isset($_GET['search'])){
                                $s = $_GET['search'];
                                $result = $proses-> view($s);
                            } else {
                                $result = $proses-> view();
                            }
                            $isi = mysqli_num_rows($result);

                            if($isi != 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['namadep'], " ", $row['namabel']; ?></td>
                                        <td><?php echo $row['kelas']; ?></td>
                                        <td><?php echo $row['hobi']; ?></td>
                                        <td><?php echo $row['film']; ?></td>
                                        <td><?php echo $row['wisata']; ?></td>
                                        <td><a href="proses.php?delete=<?php echo $row['nim']; ?>"><button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</button></a></td>
                                    </tr>
                                    <?php
                                }
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>