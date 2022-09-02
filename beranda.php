<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:formsession.php");
}
?>
<h1>halaman beranda</h1>
<button><a href="user.php">halaman user</a></button>
<button><a href="hapussession.php">wes metu wae</a></button>