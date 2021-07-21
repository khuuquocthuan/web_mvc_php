<?php 
include_once("../models/m_contact.php");
require_once ("../controllers/Pager.php");
class C_phan_hoi{
	function Hien_thi_phan_hoi(){
		//model
		$m_phan_hoi = new M_phan_hoi();
		$ht_ph=$m_phan_hoi->Doc_phan_hoi();
		//pHÂN TRANG
		$pager=new pager();
		$limit=5;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($ht_ph);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);
		$ht_ph=$m_phan_hoi->Doc_phan_hoi($start,$limit);
		// Gọi view hiển thị $smarty->assign("ht_ph",$ht_ph);
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí phản hồi");
		$smarty->assign("ht_ph",$ht_ph);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("active3","class='active'");
		$smarty->assign("ad_view","views_admin/set_phanhoi/ht_phanhoi.tpl");
		$smarty->display("layout_setadmin.tpl");

	}


 function Xoa_phan_hoi(){
	$m_phan_hoi = new M_phan_hoi();
	$id=isset($_GET["id"])?$_GET["id"]:"";
	$xoaph=$m_phan_hoi->Xoa_phan_hoi($id);
	if ($xoaph) {
		header("location:set_phanhoi.php");
	}
}

}

 ?>