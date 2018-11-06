<!DOCTYPE html>
<html>
<head>
    <title> New Data </title>
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
      <a class="nav-item nav-link active" href="newData.php"> Tambah Data</a>
      <a class="nav-item nav-link" href="profile.php"> Profile </a>
      <a class="nav-item nav-link" href="index.php?logout=iya"> Logout </a>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <center><h2 style="margin-top:5%;"> Tambah Data </h2></center>
                <hr>
                <form action="proses.php?insert=proses" method="post" style="margin: 0 29% 0 29%;">
                    <div class="form-group">
                        <input type="text" name="nim" id="inputNim" pattern="\d*" maxlength="10" class="form-control" placeholder="NIM" reqired>
                    </div>
                    <div class="form-group">
                        <input type="text" name="namadep" id="inputNamaDep" class="form-control" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <input type="text" name="namabel" id="inputNamaBel" class="form-control" placeholder="Nama Belakang">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kelas" id="inputKelas" class="form-control" placeholder="Kelas">
                    </div>
                    <div class="from-group" style="text-align:center;">
                        <b> Hobi : </b><br>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hobi[]" id="inputHobi" value="Membaca"> Membaca&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hobi[]" id="inputHobi" value="Mewarnai"> Mewarnai&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hobi[]" id="inputHobi" value="Menggambar" > Menggambar&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hobi[]" id="inputHobi" value="Menyanyi"> Menyanyi&nbsp;
                        </label>
                    </div>
                    <div class="from-group" style="text-align:center;">
                        <b> Genre Film : </b><br>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="film[]" id="inputFilm" value="Anime"> Anime&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="film[]" id="inputFilm" value="Horror"> Horror&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="film[]" id="inputFilm" value="Action" > Action&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="film[]" id="inputFilm" value="Drama"> Drama&nbsp;
                        </label>
                    </div>
                    <div class="from-group" style="text-align:center;">
                        <b> Tempat Wisata : </b><br>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="wisata[]" id="inputWisata" value="Bali"> Bali&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="wisata[]" id="inputWisata" value="Tanjung Selor"> Tanjung Selor&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="wisata[]" id="inputWisata" value="Jakarta" > Jakarta&nbsp;
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="wisata[]" id="inputWisata" value="Lombok"> Lombok&nbsp;
                        </label> 
                    </div><br>
                    <center><input type="submit" value="Submit" id="submit" class="btn btn-primary" style="width:50%;"></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
