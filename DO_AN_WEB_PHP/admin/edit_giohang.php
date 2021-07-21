<?php 
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_giohang_admin.php");
$c_sanpham=new C_gio_hang();
$c_sanpham->Sua_gio_hang();

?>
