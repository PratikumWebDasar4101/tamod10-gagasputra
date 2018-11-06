<?php
    session_start();
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title> Register </title>
    <link rel="stylesheet" href="asset\css\bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="newData.php"> Tambah Data</a>
      <a class="nav-item nav-link active" href="profile.php"> Profile </a>
      <a class="nav-item nav-link" href="index.php?logout=iya"> Logout </a>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row m-auto w-25">
            <div class="col">
                <h2 class="text-center mt-5"> Profile </h2>
                <hr>
                <div class="form-group">
                <label> Username : </label>
                    <input type="text" name="username" id="inputUsername" maxlength="20" class="form-control" value="<?php echo $username; ?> " readonly>
                </div>
                <center><a href="editprofile.php"><input type="button" value="Edit Password" id="edit" class="btn btn-primary"></a></center>
            </div>
        </div>
    </div>
</body>
</html>
