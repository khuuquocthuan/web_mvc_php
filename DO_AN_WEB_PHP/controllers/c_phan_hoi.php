<?php
session_start(); 
include_once("models/m_contact.php");
include_once("models/m_website.php");
include_once ("models/m_categories.php");

class C_phan_hoi{
	function Them_phan_hoi(){
		//model
		$ph=isset($_SESSION["ph"])?$_SESSION["ph"]:"";
				if (isset($_SESSION["ph"])) {
					unset($_SESSION["ph"]);
				}
		$m_phan_hoi = new M_phan_hoi();
		if (isset($_POST["sm"])) {
			$name=isset($_POST["name"])?$_POST["name"]:"";
			$email=isset($_POST["email"])?$_POST["email"]:"";
			$phone=isset($_POST["phone"])?$_POST["phone"]:"";
			$feedback=isset($_POST["feedback"])?$_POST["feedback"]:"";
			$themph=$m_phan_hoi->Them_phan_hoi($name,$email,$phone,$feedback);
			if ($themph) {
				$_SESSION["ph"]="Thêm phản hồi thành công";
				$ph=isset($_SESSION["ph"])?$_SESSION["ph"]:"";
				if (isset($_SESSION["ph"])) {
					unset($_SESSION["ph"]);
				}
				
			}
		}
		$m_loai_san_pham = new M_loai_sp();
		$p_id2=2;
		$p_id1=1;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id1);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();	
		// Gọi view hiển thị
		include "public/js/lien_he.js";
		include "set_smarty.php";
		$smarty = new set_smarty();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("ph",$ph);
		$smarty->assign("tieu_de","Liên hệ");
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		$smarty->assign("lhactive","id='menuactive'");
		$smarty->assign("view","views/lienhe/lh_content.tpl");
		$smarty->display("layout_home.tpl");

	}

} ?>