<?php  
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_indexadmin.php");
$c_admin=new C_index_admin();
$c_admin->Hien_thi();
	
?>