<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$database ="hosstile";

$db = mysqli_connect($localhost, $username ,$password , $database);

if(!isset($_SESSION)){session_start();}
$error=array();

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location:login.php");
}
?>
