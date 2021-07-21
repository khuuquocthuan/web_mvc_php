<?php 
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_san_pham_admin.php");
$c_danhmuc=new C_san_pham();
$c_danhmuc->Sua_san_pham();

?>
 