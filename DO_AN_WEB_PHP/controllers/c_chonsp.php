<?php 
include_once ("models/m_products.php");
include_once ("models/m_categories.php");
include_once ("controllers/Pager2.php");
include_once ("controllers/Pager.php");
/**
* 
*/
class C_chon_loai
{
	public function Chon_sp(){
		$m_san_pham = new M_san_pham();
		$c_id=isset($_GET["id"])?$_GET["id"]:"";
		$chon=$m_san_pham->Doc_san_pham_theo_cid(-1,-1,$c_id);

		$m_loai_san_pham = new M_loai_sp();
		$p_id=1;
		$p_id2=2;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);

		$pager=new pager2();
		$limit=8;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($chon);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);

		$chon=$m_san_pham->Doc_san_pham_theo_cid($start,$limit,$c_id);
		//View
		include "set_smarty.php";
		$smarty = new set_smarty();
		include_once("models/m_website.php");
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("tieu_de","Sản phẩm");
		$smarty->assign("chon",$chon);
		$smarty->assign("spactive","id='menuactive'");
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("view","views/sanpham/sp_content.tpl");
		$smarty->assign("view1","views/sanpham/chon_sp.tpl");
		$smarty->display("layout_home.tpl");
	}
	public function Tim_san_pham(){
		//Modell
		$m_san_pham = new M_san_pham();
		$seach=isset($_POST["tim"])?$_POST["seach"]:"";
		$chonname=$m_san_pham->Doc_san_pham_theo_ten(-1,-1,$seach);
		$m_loai_san_pham = new M_loai_sp();
		$p_id=1;
		$p_id2=2;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
		// $pager=new pager();
		// $limit=2;
		// $crent=isset($_GET["page"])?$_GET["page"]:"";
		// $count=count($chonname);
		// $start=$pager->findStart($limit);
		// $page=$pager->findPages($count, $limit);
		// $listpage=$pager->pageList($crent, $page);

		// $chonname=$m_san_pham->Doc_san_pham_theo_ten($start,$limit,$seach);

		//View
		include "set_smarty.php";
		$smarty = new set_smarty();
		include_once("models/m_website.php");
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("tieu_de","Sản phẩm");
		$smarty->assign("chon",$chonname);
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		// $smarty->assign("listpage",$listpage);
		$smarty->assign("view","views/sanpham/sp_content.tpl");
		$smarty->assign("view1","views/sanpham/tim_sp.tpl");
		$smarty->display("layout_home.tpl");
	}
	public function Hien_thi_ct_sp(){
		$m_products=new M_san_pham();
		$id=$_GET["id"];
		$ct_sp=$m_products->Doc_san_pham_theo_id($id);
		$image_child=$ct_sp->image_same;
		$img_child=explode(",",$image_child);
		$m_loai_san_pham = new M_loai_sp();
		$p_id=1;
		$p_id2=2;
		$menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id);
		$menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);

		//vieww
		include "set_smarty.php";
		$smarty = new set_smarty();
		include_once("models/m_website.php");
		$m_website=new M_website();
		$mweb=$m_website->Hien_thi_1website();
		$smarty->assign("mweb",$mweb);
		$smarty->assign("tieu_de","Chi tiết sản phẩm");
		$smarty->assign("ct_sp",$ct_sp);
		$smarty->assign("img_child",$img_child);
		$smarty->assign("menu1",$menu1);
		$smarty->assign("menu2",$menu2);
		$smarty->assign("view","views/sanpham/ct_sp.tpl");
		$smarty->display("layout_home.tpl");

	}
}
 ?>