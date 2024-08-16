<?php
    //menyertakan file program koneksi.php pada login
    include '../../config/koneksi.php';
    //inisialisasi session
    session_start();

    $error = '';
    $validate = '';

    //mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
    if( isset($_SESSION['username']) ) header('Location: index.php');

    //mengecek apakah form disubmit atau tidak
    if( isset($_POST['submit']) )
    {        
        //menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($koneksi, $username);
        //menghilangkan backshlases
        $password = stripslashes($_POST['password']);
        //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($koneksi, $password);
        
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($password))){

            //select data berdasarkan username dari database
            $query      = "SELECT * FROM admin WHERE username = '$username'";
            $result     = mysqli_query($koneksi, $query);
            $rows       = mysqli_num_rows($result);

            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
                
                    echo "<script>alert('Berhasil Login');window.location='../../index.php';</script>";
                }
                            
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    }
?>

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
    <center>
        <form action="login.php" method="POST">
            <h1> Login </h1>
            <?php if($error != ''){ ?>
                <div><?= $error; ?></div>
            <?php } ?>
            
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
            
            <button type="submit" name="submit">Login</button>
            <div>
                <p> Belum punya akun? <a href="register.php">Daftar</a></p>
            </div>
        </form>
    </center>
</body>

</html>
