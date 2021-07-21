<?php 
require_once "../models/m_sliders.php";
/**
* 
*/
class C_slider
{
	
	function Hien_thi_slider()
	{
		$m_slider=new M_slider();
		$c_slider=$m_slider->Hien_thi_slad();
		//Viêw
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí Slider");
		$smarty->assign("c_sl",$c_slider);
		$smarty->assign("active2","class='active'");
		$smarty->assign("ad_view","views_admin/set_slider/ht_slider.tpl");
		$smarty->display("layout_setadmin.tpl");
	}

	function Sua_slider()
	{
		$m_slider=new M_slider();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$c_slider=$m_slider->Hien_thi_1sl($id);

		if (isset($_POST["sm"])) {
			$ma_sl=isset($_POST["ma_sl"])?3:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			$date_edit=date("y-m-d",time());
			$status=$_POST["status"];
			$name=$_FILES["image"]["error"]!==0?($c_slider->name):$_FILES["image"]["name"];
			$them_sl=$m_slider->Sua_slider($name,$status,$date_edit,$ma_sl,$id);
			if ($them_sl) {
				move_uploaded_file($_FILES["image"]["tmp-name"],"../public/images/slider/$name");
				header("location:set_slider.php");
			}
		}
		//Viêw
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí Slider");
		$smarty->assign("c_sl",$c_slider);
		$smarty->assign("active2","class='active'");
		$smarty->assign("ad_view","views_admin/set_slider/sua_slider.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
}

 ?>