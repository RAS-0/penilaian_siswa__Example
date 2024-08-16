<!DOCTYPE html>
<html lang="en">
<head>
	<title>Example</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- costum css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <?php
        //menyertakan file program koneksi.php pada register
        include '../../config/koneksi.php';
        //inisialisasi session
        session_start();

        $error = '';
        $validate = '';
        if( isset($_SESSION['user']) ) header('Location: index.php');
        //mengecek apakah data username yang diinpukan user kosong atau tidak
        if( isset($_POST['submit']) )
        {
            // menghilangkan backshlases
            $username = stripslashes($_POST['username']);
            //cara sederhana mengamankan dari sql injection
            $username = mysqli_real_escape_string($koneksi, $username);
            $nama     = stripslashes($_POST['nama']);
            $nama     = mysqli_real_escape_string($koneksi, $nama);
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($koneksi, $password);
            $repass   = stripslashes($_POST['repassword']);
            $repass   = mysqli_real_escape_string($koneksi, $repass);
            //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
            if(!empty(trim($nama)) && !empty(trim($username)) && !empty(trim($password)) && !empty(trim($repass))){
                //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
                if($password == $repass){
                    //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                    if( cek_nama($nama,$koneksi) == 0 ){
                        //hashing password sebelum disimpan didatabase
                        $pass   = password_hash($password, PASSWORD_DEFAULT);
                        //insert data ke database
                        $query  = "INSERT INTO admin (username,nama, password ) VALUES ('$username','$nama','$pass')";
                        $result = mysqli_query($koneksi, $query);
                        //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                        if ($result) {
                            $_SESSION['username'] = $username;
                        
                            echo "<script>alert('Berhasil daftar dan login');window.location='../../index.php';</script>";
                        
                            //jika gagal maka akan menampilkan pesan error
                        } else {
                            $error =  'Register User Gagal !!';
                        }
                    } else {
                        $error =  'Username sudah terdaftar !!';
                    }
                } else {
                    $validate = 'Password tidak sama !!';
                }
            } else {
                $error =  'Data tidak boleh kosong !!';
            }
        } 

        //fungsi untuk mengecek username apakah sudah terdaftar atau belum
        function cek_nama($username,$koneksi)
        {
            $user   = mysqli_real_escape_string($koneksi, $username);
            $query  = "SELECT * FROM admin WHERE username = '$user'";
            if ( $result = mysqli_query($koneksi, $query) ) return mysqli_num_rows($result);
        }
    ?>
    <form action="register.php" method="POST">
        <center>
            <h1> Daftar </h1>
            <?php if($error != ''){ ?>
                <div><?= $error; ?></div>
            <?php } ?>
            
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama" placeholder="Masukkan Nama">
            </div>
            <div>
                <label>Username</label><br>
                <input type="text" name="username" placeholder="Masukkan username">
            </div>
            <div>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Password">
                <?php if($validate != '') {?>
                    <p><?= $validate; ?></p>
                <?php }?>
            </div>
            <div>
                <label>Re-Password</label><br>
                <input type="password" name="repassword" placeholder="Re-Password">
                <?php if($validate != '') {?>
                    <p><?= $validate; ?></p>
                <?php }?>
            </div>
            <button type="submit" name="submit">Daftar</button>
            <div>
                <p> Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
        </center>
    </form>
</body>
</html>
