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
                <center><h2 style="margin-top:5%;"> Registrasi </h2></center>
                <hr>
                <form action="proses.php?register=proses" method="post" style="margin: 0 35% 0 35%;">
                    <div class="form-group">
                        <input type="text" name="username" id="inputUsername" maxlength="20" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="inputPassword" minlength="6" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="repassword" id="inputrePassword" minlength="6" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <center><input type="submit" value="Register" id="submit" class="btn btn-primary" style="width:50%;"></center>
                    <hr>
                    <center><a href="index.php"><input type="button" value="Login" class="btn btn-outline-primary" ></a></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
