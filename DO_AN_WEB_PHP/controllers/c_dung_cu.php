<?php  
include_once ("models/m_products.php");
include_once ("models/m_categories.php");
include_once ("controllers/Pager.php");
class C_dung_cu
{

	public function Hien_thi_dung_cu(){
		
		$m_san_pham = new M_san_pham();
		// $ds_sp = $m_san_pham->Doc_san_pham_sale(0,8);
		// $ds_spnb = $m_san_pham->Doc_san_pham_noi_bat(0,8);
		// $ds_spmn=$m_san_pham->Doc_san_pham_moi_nhat();
		
		$m_loai_san_pham = new M_loai_sp();
		$p_id2=2;
		$p_id1=1;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id1);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
		$p_id=2;
		$ds_dc=$m_san_pham->Doc_san_pham_theo_loai(-1,-1,$p_id);
		//phân trang
		$pager=new pager();
		$limit=2;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($ds_dc);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);
		$ds_dc=$m_san_pham->Doc_san_pham_theo_loai($start,$limit,$p_id);
			// Gọi view hiển thị
		
		include "set_smarty.php";
		$smarty = new set_smarty();
		include_once("models/m_website.php");
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("dcactive","id='menuactive'");
		$smarty->assign("tieu_de","Dụng cụ");
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		$smarty->assign("ds_dc",$ds_dc);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("view","views/sanpham/sp_content.tpl");
		$smarty->assign("view1","views/sanpham/dc_content.tpl");
		$smarty->display("layout_home.tpl");
	}
}
?>