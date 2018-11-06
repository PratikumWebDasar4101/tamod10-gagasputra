<?php
    session_start();

    if(isset($_SESSION['berhasil'])) {
        header("Location: dashboard.php");
    }

    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" href="asset\css\bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <center><h2 style="margin-top:5%;"> Login </h2></center>
                <hr>
                <form action="proses.php?login=proses" method="post" style="margin: 0 35% 0 35%;">
                    <div class="form-group">
                        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                    </div>
                    <center><input type="submit" value="Login" id="submit" class="btn btn-primary" style="width:50%;"></center>
                    <hr>
                    <center><a href="register.php"><input type="button" value="Register" class="btn btn-outline-primary" ></a></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
