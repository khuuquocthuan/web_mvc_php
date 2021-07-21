<?php 
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_slider.php");
$c_sl=new C_slider();
$c_sl->Sua_slider();
 ?>