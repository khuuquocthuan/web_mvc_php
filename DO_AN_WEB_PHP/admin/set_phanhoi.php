<?php 
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_phan_hoi_admin.php");
$ph=new C_phan_hoi();
$htph=$ph->Hien_thi_phan_hoi();
		
 ?>