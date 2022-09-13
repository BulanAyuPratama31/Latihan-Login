<?php
session_start();
if(!$_SESSION['user']){
    header('locatinon:index.php');
}
?>

<h1>Selamat Datang Bulan, <?php echo $_SESSION['user']: ?> di XII RPL 1</h1>

<br>
<br>
<from method="POST">
    <input type="submit" name="logout" value="logout">
</form>

<?php
if (isset($_POST['logout'])) {
    session_unset($_SESSION['usser'];
    header("location:index.php");
    )
}
?>