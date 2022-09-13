<?php
session_start();
?>

<from methop="post" >

<input type="text" name="username" placeholder="username"> <br><br>
<input type="password" name="password_kamu" placeholder="password"> <br><br>

<input type="submit" name="masuk" value="login">
</from>

<?php
if(isset($_PPOST['masuk'])){
    $username = $_POST['username'];
    $password_kamu = $_POST['password kamu'];
    if($username == 'user1'){
        if($password_kamu == '123'){
            $_SESSION['user'] = $username;
            header('location: beranda.php');
        }else{
            echo "
            <script>
            alert(' PASSWORD SALAH...!! ');
            </script>
            ";
        }
        }else{
            echo " 
            <script>
            alert( USERNAME TIDAK TERDAFTAR...!! ')
            </script>
            ";
    }
}
?>