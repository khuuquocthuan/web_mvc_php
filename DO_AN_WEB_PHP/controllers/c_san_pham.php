<?php  
include_once ("models/m_products.php");
include_once ("models/m_categories.php");
include_once ("controllers/Pager.php");
class C_san_pham
{

	public function Hien_thi_san_pham(){

		$m_san_pham = new M_san_pham();
		$ds_sp = $m_san_pham->Doc_san_pham_sale(0,8);
		$ds_spnb = $m_san_pham->Doc_san_pham_noi_bat(0,8);
		$ds_spmn=$m_san_pham->Doc_san_pham_theo_loai(-1,-1,1);
		//phân trang
		$pager=new pager();
		$limit=8;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($ds_spmn);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);
		$ds_spmn=$m_san_pham->Doc_san_pham_theo_loai($start,$limit,1);


		$m_loai_san_pham = new M_loai_sp();
		$p_id=1;
		$p_id2=2;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
			// Gọi view hiển thị
		include "set_smarty.php";
		$smarty = new set_smarty();
		include_once("models/m_website.php");
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("tieu_de","Cây trồng");
		$smarty->assign("spactive","id='menuactive'");
		$smarty->assign("spm",$ds_spmn);
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("view","views/sanpham/sp_content.tpl");
		$smarty->assign("view1","views/sanpham/sp_content_right.tpl");
		$smarty->display("layout_home.tpl");
	}
	
}
?>