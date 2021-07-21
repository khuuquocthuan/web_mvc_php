<?php

require_once("../models/m_admin.php");
require_once("../controllers/Pager.php");
class C_admin{
public	function Hien_thi_admin(){
		$m_admin=new M_admin();
		$ht_admin=$m_admin->Hien_thi_admin();
		//validate
		//Phân trang
		// $pager=new pager();
		// $limit=2;
		// $crent=isset($_GET["page"])?$_GET["page"]:"";
		// $count=count($ht_admin);
		// $start=$pager->findStart($limit);
		// $page=$pager->findPages($count, $limit);
		// $listpage=$pager->pageList($crent, $page);
		//  $ht_admin=$m_admin->Hien_thi_admin($start,$limit);
		//view	
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí admin");
		$smarty->assign("active6","class='active'");
		$smarty->assign("ht_admin",$ht_admin);
		// $smarty->assign("listpage",$listpage);
		$smarty->assign("ad_view","views_admin/set_admin/ht_admin.tpl");
		$smarty->display("layout_setadmin.tpl");
		}



public function Them_admin(){
	$m_admin=new M_admin();
	if (isset($_POST["sm"])) {
		$name=$_POST["name"];
		$email=$_POST["email"];
		$date_born=$_POST["date_born"];
		$user=$_POST["user"];
		$passt=$_POST["pass"];
		$pass=md5($_POST["pass"]);
		$status=$_POST["status"];
		$them_admin=$m_admin->Them_admin($name,$email,$date_born,$status,$user,$pass);
		if($them_admin)
			{ 
				header("location:set_admin.php");
			}
	}


		//view
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		// $smarty->assign("err_name",$err_name);
		$smarty->assign("ad_tieude","Quản lí admin");
		$smarty->assign("active6","class='active'");
		$smarty->assign("ad_view","views_admin/set_admin/them_admin.tpl");
		$smarty->display("layout_setadmin.tpl");
}
public function Xoa_admin(){
	$m_admin=new M_admin();
	$id=isset($_GET["id"])?$_GET["id"]:"";
	$xoa_admin=$m_admin->Xoa_admin($id);
	if ($xoa_admin) {
		header("location:set_admin.php");
	}
}
public function Sua_admin(){
	$m_admin=new M_admin();
	$id=isset($_GET["id"])?$_GET["id"]:"";
	 $sua=$m_admin->Hien_thi_1admin($id);
	//validate
	if (isset($_POST["sm"])) {
	$flag=true;
		$err_name=$err_email=$err_date_born=$err_status=$err_user=$err_pass="";

	if ($_POST["name"]=="") {
		$err_name="Bạn đang để trống tên";
		$flag=false;
	}
	else{
		$name=$_POST["name"];
	}
	if ($_POST["email"]=="") {
		$err_email="Bạn đang để trống email";
		$flag=false;
	}
	// elseif(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
	// 	$err_email="Email không hợp lệ";
	// 	$flag=false;
	// }
	else{
		$email=$_POST["email"];
	}
	if ($_POST["date_born"]=="") {
		$err_date_born="Bạn đang để trống ngày sinh";
		$flag=false;
	}
	else{
		$date_born=$_POST["date_born"];
	}
	if ($_POST["user"]=="") {
		$err_user="Bạn đang để trống user";
		$flag=false;
	}
	else{
		$user=$_POST["user"];
	}
	if ($_POST["pass"]=="") {
		$err_pass="Bạn đang để trống pass";
		$flag=false;
	}
	else{
		$passt=$_POST["pass"];
		$pass=md5($_POST["pass"]);
	}
	$status=$_POST["status"];

	if ($flag) {
		$m_admin=new M_admin();
		 $id=isset($_GET["id"])?$_GET["id"]:"";
		
		$sua_admin=$m_admin->Sua_admin($name,$email,$date_born,$status,$user,$pass,$id);
	if ($sua_admin) {
				header("location:set_admin.php");
				// echo "Thêm mới thành công";
			}
		}
	}
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("sua",$sua);
		$smarty->assign("ad_tieude","Quản lí admin");
		$smarty->assign("active6","class='active'");
		$smarty->assign("ad_view","views_admin/set_admin/sua_admin.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
}

?>