<?php 
@session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != "OK" ) {
header("location:login.php");
session_destroy();
}  
require_once ("../controllers/c_website_admin.php");
$c_website=new C_website();
$c_website->Hien_thi_website();

?>