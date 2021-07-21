<?php 
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_danhmuc.php");
$c_danhmuc=new C_danh_muc();
$c_danhmuc->Them_danh_muc();

?>