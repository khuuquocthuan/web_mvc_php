<?php  
include_once ("../models/m_giohang.php");
include_once ("../models/m_categories.php");
include_once ("../controllers/Pager.php");
class C_gio_hang{
	//admin
	public function Hien_thi_gio_hang(){
		//model
		$m_giohang = new M_gio_hang();
		$gh=$m_giohang->Hien_thi_gio_hang();
		//Phân trang
		$pager=new pager();
		$limit=8;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($gh);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);
		$gh=$m_giohang->Hien_thi_gio_hang($start,$limit);
		// print_r($mang);
		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("gh",$gh);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("ad_tieude","Quản lí giỏ hàng");
		$smarty->assign("activeg","class='active'");
		$smarty->assign("ad_view","views_admin/set_giohang/ht_giohang.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
	public function Sua_gio_hang(){
			$status=isset($_POST["status"])?$_POST["status"]:"";
			$cus_id=$_GET["id"];
			$m_giohang=new M_gio_hang();
			$sua=$m_giohang->Sua_gio_hang($status,$cus_id);


		if ($sua) {
			header("location:set_giohang.php");
		}
	}
	public function Chi_tiet_gio_hang(){
		$m_giohang = new M_gio_hang();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$cus_id=isset($_GET["cus_id"])?$_GET["cus_id"]:"";
		$ctgh=$m_giohang->Chi_tiet_don_hang($id);
		$ctkh=$m_giohang->Chon_kh_theo_id($cus_id);
		//
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ctgh",$ctgh);
		$smarty->assign("ctkh",$ctkh);
		$smarty->assign("ad_tieude","Quản lí giỏ hàng");
		$smarty->assign("activeg","class='active'");
		$smarty->assign("ad_view","views_admin/set_giohang/ct_gh.tpl");
		$smarty->display("layout_setadmin.tpl");

	}
	//Xóa 
	public function Xoa_don_hang(){
		$m_giohang = new M_gio_hang();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$cgh=$m_giohang->Chon_gh_theo_id($id);
		$m_giohang->Xoa_san_pham_pbill($id);
		$m_giohang->Xoa_san_pham_bill($id);
		$mgh=$m_giohang->Xoa_san_pham_cus($cgh->cus_id);
		if ($mgh) {
			header("location:set_giohang.php");
		}

	}
}
?>