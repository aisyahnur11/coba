<?php

session_start();
if(isset($_SESSION['username'])){
    echo "<h1>iki halaman user</h1>";
    echo $_SESSION["username"];
}