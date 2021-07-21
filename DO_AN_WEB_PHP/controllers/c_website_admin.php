<?php 
include_once("../models/m_website.php");
class C_website {
	public function Hien_thi_website(){
		//Modell
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();

		if (isset($_POST["sm"])) {
			$tittle=isset($_POST["tittle"])?$_POST["tittle"]:"$mweb->tittle";
			$logo=$_FILES["logo"]["error"]!==0?($mweb->logo):$_FILES["logo"]["name"];
			$s_describe=isset($_POST["s_describe"])?$_POST["s_describe"]:"$mweb->s_describe";
			$address=isset($_POST["address"])?$_POST["address"]:"$mweb->address";
			$phone=isset($_POST["phone"])?$_POST["phone"]:"$mweb->phone";
			$email=isset($_POST["email"])?$_POST["email"]:"$mweb->email";
			$face=isset($_POST["face"])?$_POST["face"]:"$mweb->face";
			$suaw=$m_website->Sua_website($tittle,$logo,$address,$phone,$email,$face,$s_describe);
			if ($suaw) {
				move_uploaded_file($_FILES["logo"]["tmp_name"],"../public/images/logo/$logo");
				header("location:set_website.php");
			}
		}
		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("ad_tieude","Quản lí website");
		$smarty->assign("active1","class='active'");
		$smarty->assign("ad_view","views_admin/set_website/ht_website.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
	}
 ?>