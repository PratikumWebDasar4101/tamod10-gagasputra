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
    <div class="container">
        <div class="row">
            <div class="col">
                <center><h2 style="margin-top:5%;"> Profile </h2></center>
                <hr>
                <form action="proses.php?edit=proses" method="post" style="margin: 0 35% 0 35%;">
                    <div class="form-group">
                        <input type="text" name="username" id="inputUsername" maxlength="20" class="form-control" value="<?php echo $username; ?> " readonly>
                    </div>
                    <div class="form-group">
                        <input type="password" name="newpassword" id="inputPassword" minlength="6" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="newrepassword" id="inputrePassword" minlength="6" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <center><input type="submit" value="Edit" id="submit" class="btn btn-primary" style="width:50%;"></center><br>
                    <center><a href="profile.php"><input type="button" value="Profile" id="edit" class="btn btn-outline-primary"></a></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
