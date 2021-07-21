<?php 
include_once("models/m_home.php");
include_once("models/m_website.php");
include_once ("models/m_categories.php");

class C_home{
	function Hien_thi_home(){
		//model
		$m_home = new M_home();
		$ds_sp = $m_home->Doc_san_pham_sale(0,8);
		$ds_spnb = $m_home->Doc_san_pham_noi_bat(0,8);
		$ds_sl= $m_home->Hien_thi_sl(0,4);

		// $cha=$m_home->Doc_menu_cha();
		// $con=$m_home->Doc_menu_con();
		$m_loai_san_pham = new M_loai_sp();
		$p_id2=2;
		$p_id1=1;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id1);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
		//Menu
		$menucha=$m_home->Doc_menu_cha();
		include "set_smarty.php";
		$smarty= new set_smarty();
		$smarty->assign("tieu_de","Trang chủ");
		$smarty->assign("sl",$ds_sl);
		// $smarty->assign("cha",$cha);
		// $smarty->assign("con",$con);
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("product",$ds_sp);
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		$smarty->assign("product_nb",$ds_spnb);
		$smarty->assign("idactive","id='menuactive'");
		$smarty->assign("view","views/home/home_content.tpl");
		$smarty->display("layout_home.tpl");
}	

}

 ?>