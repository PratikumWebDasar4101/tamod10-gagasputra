<?php
    class Proses {
        private $connect;

        public function Proses() {
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db         = "db_jurnal10";

            $this->connect = mysqli_connect($servername, $username, $password, $db);
        }

        public function register() {
            $username   = $_POST['username'];
            $password   = md5($_POST['password']);
            $repassword = md5($_POST['repassword']);

            if ($repassword == $password) {
                $database = "INSERT INTO akun(username, password) VALUES ('$username', '$password')";

                if (mysqli_query($this->connect, $database)) {
                    ?>
                    <script>
                        alert("Registrasi Berhasil");
                        location= "index.php";
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script>
                        alert("User Sudah Terdaftar");
                        location= "register.php";
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert("Password Tidak Cocok");
                    location = "register.php";
                </script>
                <?php
            }
        }

        public function login() {
            session_start();
            $username   = $_POST['username'];
            $password   = md5($_POST['password']);

            $database = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($this->connect, $database);
            $row = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result) != 0) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $username;
                $_SESSION['berhasil'] = "Berhasil";
                header("Location: dashboard.php");
            } else {
                ?>
                <script>
                    alert("Login Gagal");
                    location= "index.php";
                </script>
                <?php
            }
        }

        public function insert() {
            $nim        = $_POST['nim'];
            $namadep    = $_POST['namadep'];
            $namabel    = $_POST['namabel'];
            $kelas      = $_POST['kelas'];
            $hobi       = $_POST['hobi'];
            $all_hobi   = implode(", ", $hobi);
            $film       = $_POST['film'];
            $all_film   = implode(", ", $film);
            $wisata     = $_POST['wisata'];
            $all_wisata = implode(", ", $wisata);

            $database = "INSERT INTO mahasiswa (nim, namadep, namabel, kelas, hobi, film, wisata) VALUES ('$nim', '$namadep', '$namabel', '$kelas', '$all_hobi', '$all_film', '$all_wisata')";

            if (mysqli_query($this->connect, $database)) {
                ?>
                <script>
                    alert("Upload Berhasil");
                    location= "dashboard.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Upload Gagal");
                    location= "dashboard.php";
                </script>
                <?php
            }
        }

        public function edit() {
            $newpassword = md5($_POST['newpassword']);
            $conpassword = md5($_POST['newrepassword']);

            $database = "UPDATE akun SET password = '$newpassword'";

            if ($newpassword == $conpassword) {
                mysqli_query($this->connect, $database);
                ?>
                <script>
                    alert("Password Berhasil Diubah");
                    location="profile.php";
                </script>
                <?
            } else {
                ?>
                <script>
                    alert("Password Tidak Cocok");
                    location="editprofile.php";
                </script>
                <?php
            }
        }

        public function delete($nim) {
            $database = "DELETE FROM mahasiswa WHERE nim = '$nim'";
            if (mysqli_query($this->connect, $database)) {
                ?>
                <script>
                    alert("Delete Berhasil");
                    location= "dashboard.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Delete Gagal");
                    location= "dashboard.php";
                </script>
                <?php
            }
        } 


        public function view($search = null) {
            if (isset($search)) {
                $database = "SELECT * FROM mahasiswa WHERE nim LIKE '%$search%'";
            } else {
                $database = "SELECT * FROM mahasiswa";
            }
            return mysqli_query($this->connect, $database);
        }

        public function akun() {
            $database = "SELECT username FROM akun WHERE username = '$username'";
            return mysqli_query($this->connect, $database);
        }
    }

    $proses = new Proses();

    if (isset($_GET['register'])) {
        $proses -> register();
    }

    if (isset($_GET['login'])) {
        $proses -> login();
    }

    if (isset($_GET['insert'])) {
        $proses -> insert();
    }

    if (isset($_GET['edit'])) {
        $proses -> edit();
    }

    if (isset($_GET['delete'])) {
        $proses -> delete($_GET['delete']);
    }
    
?>