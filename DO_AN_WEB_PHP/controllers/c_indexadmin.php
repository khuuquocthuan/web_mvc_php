<?php  
include_once ("../models/m_index_admin.php");
/**
* 
*/
class C_index_admin
{
	
	function Hien_thi()
	{
		//modell
		$m_index=new M_index();
		//Sẩn phẩm
		$tsp=count($m_index->Dem_tong_san_pham());
		$tspht=count($m_index->Dem_tong_san_pham_ht());
		//Phản hồi
		$tph=count($m_index->Dem_tong_phan_hoi());
		$tphht=count($m_index->Phan_hoi_trong_ngay());
		//Danh mục
		$tdm=count($m_index->Dem_danh_muc());
		$tdmht=count($m_index->Dem_danh_muc_ht());
		//Hóa đơn
		$hdm=count($m_index->Hoa_don_moi());
		$thd=count($m_index->Tong_hoa_don());

		//View
		require_once ("../set_smarty.php");
				$smarty = new set_smarty();
				$smarty->assign("ad_tieude","Trang chủ");
				$smarty->assign("active","class='active'");
				$smarty->assign("tsp",$tsp);
				$smarty->assign("tspht",$tspht);
				$smarty->assign("tph",$tph);
				$smarty->assign("tphht",$tphht);
				$smarty->assign("tdm",$tdm);
				$smarty->assign("tdmht",$tdmht);
				$smarty->assign("hdm",$hdm);
				$smarty->assign("thd",$thd);
				$smarty->assign("ad_view","views_admin/set_index/ht_index.tpl");
				$smarty->display("layout_admin.tpl");
	}
}
?>