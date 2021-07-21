<?php 
include_once ("../models/m_categories.php");
include_once ("../controllers/Pager.php");
/**
* 
*/
class C_danh_muc 
{
	public function Hien_thi_danh_muc(){
		//model
		$m_danh_muc=new M_loai_sp();
		$dm=$m_danh_muc->Doc_loai();
		//Phân trang
		$pager=new pager();
		$limit=5;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($dm);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);
		$dm=$m_danh_muc->Doc_loai($start,$limit);
		//Phân trang

		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("dm",$dm);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("ad_tieude","Quản lí danh mục");
		$smarty->assign("active4","class='active'");
		$smarty->assign("ad_view","views_admin/set_danhmuc/ht_danhmuc.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
	public function Xoa_danh_muc(){
		$m_danh_muc=new M_loai_sp();
		$id=$_GET["id"];
		$del_dm=$m_danh_muc->xoa_loai($id);
		if ($del_dm) {
			header("location:set_danhmuc.php");
		}
	}
	public function Sua_danh_muc(){
		$m_danh_muc=new M_loai_sp();
		$id=$_GET["id"];
		$doc=$m_danh_muc->Doc_1loai($id);
		if (isset($_POST["sm"])) {
			$name=$_POST["name"];
			$p_id=$_POST["p_id"];
			$status=$_POST["status"];
			$date=date("Y-m-d", time());
			$sua_loai=$m_danh_muc->sua_loai($name,$p_id,$status,$date,$id);
			if ($sua_loai) {
				header("location:set_danhmuc.php");
			}
		}
		// $sua=$m_danh_muc->sua_loai();

		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí danh mục");
		$smarty->assign("doc",$doc);
		$smarty->assign("active4","class='active'");
		$smarty->assign("ad_view","views_admin/set_danhmuc/sua_danhmuc.tpl");
		$smarty->display("layout_setadmin.tpl");

	}
	public function Them_danh_muc(){
		$m_danh_muc=new M_loai_sp();
		if (isset($_POST["sm"])) {
			$name=$_POST["name"];
			$p_id=$_POST["p_id"];
			$status=$_POST["status"];
			$date=date("Y-m-d", time());
			$sua_loai=$m_danh_muc->them_loai($name,$p_id,$status,$date);
			if ($sua_loai) {
				header("location:set_danhmuc.php");
			}
		}
		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí danh mục");
		$smarty->assign("active4","class='active'");
		$smarty->assign("ad_view","views_admin/set_danhmuc/them_danhmuc.tpl");
		$smarty->display("layout_setadmin.tpl");

	}
}

 ?>