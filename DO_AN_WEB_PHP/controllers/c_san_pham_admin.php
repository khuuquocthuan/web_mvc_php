<?php  
include_once ("../models/m_products.php");
include_once ("../models/m_categories.php");
include_once ("../controllers/Pager.php");
class C_san_pham{
	//admin
	public function Hien_thi_sp(){
		//model
		$m_san_pham = new M_san_pham();
		$sp=$m_san_pham->Hien_thi_sp();
		//Phân trang
		$pager=new pager();
		$limit=4;
		$crent=isset($_GET["page"])?$_GET["page"]:"";
		$count=count($sp);
		$start=$pager->findStart($limit);
		$page=$pager->findPages($count, $limit);
		$listpage=$pager->pageList($crent, $page);
		$sp=$m_san_pham->Hien_thi_sp($start,$limit);
		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("sp",$sp);
		$smarty->assign("listpage",$listpage);
		$smarty->assign("ad_tieude","Quản lí sản phẩm");
		$smarty->assign("active5","class='active'");
		$smarty->assign("ad_view","views_admin/set_sanpham/ht_sanpham.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
	public function Hien_thi_ctsp(){
		$m_san_pham = new M_san_pham();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$sp=$m_san_pham->Doc_san_pham_theo_id($id);
		$chuoi=$sp->image_same;
		$mang=explode(",",$chuoi);
		// echo count($mang);

		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("sp",$sp);
		$smarty->assign("mang",$mang);
		$smarty->assign("ad_tieude","Quản lí sản phẩm");
		$smarty->assign("active5","class='active'");
		$smarty->assign("ad_view","views_admin/set_sanpham/ct_sanpham.tpl");
		$smarty->display("layout_setadmin.tpl");

	}
	public function Them_sp(){
		//Model
		$m_san_pham = new M_san_pham();
		if (isset($_POST["sm"])) {
			$name=isset($_POST["name"])?$_POST["name"]:"";
			$describe=$_POST["ckeditor"];
			$c_id=$_POST["c_id"];
			$price=$_POST["price"];
			$sale_price=isset($_POST["sale_price"])?$_POST["sale_price"]:"0";
			$from=$_POST["from"];
			$manny=$_POST["manny"];
		 	$sale=isset($_POST["sale"])?1:0;
		 	$special=isset($_POST["special"])?1:0;
		 	$status=isset($_POST["status"])?1:0;
			$s_describe=$_POST["s_describe"];
			$image=$_FILES["image"]["error"]==0?$_FILES["image"]["name"]:"";
			// if (strlen($_FILES["image"]["name"]<4)) {
			// 	$err_anh="vui long chon file ảnh chính";
			// }
			$image1=$_FILES["image1"]["error"]==0?$_FILES["image1"]["name"]:"";
			$image2=$_FILES["image2"]["error"]==0?$_FILES["image2"]["name"]:"";
			$image3=$_FILES["image3"]["error"]==0?$_FILES["image3"]["name"]:"";
			$image4=$_FILES["image4"]["error"]==0?$_FILES["image4"]["name"]:"";
			$image_same=$image1.",".$image2.",".$image3.",".$image4;
			$m_san_pham = new M_san_pham();
			$them_sp=$m_san_pham->Them_san_pham($c_id,$name,$price,$sale_price,$image,$describe,$sale,$special,$status,$manny,$image_same, $s_describe,$from);
			if ($them_sp) {
				if ($image!="") {
					move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/caytrong/".$image);
				}
				if ($image1!="") {
					move_uploaded_file($_FILES["image1"]["tmp_name"],"../public/images/caytrong/".$image1);
				}
				if ($image2!="") {
					move_uploaded_file($_FILES["image2"]["tmp_name"],"../public/images/caytrong/".$image2);
				}
				if ($image3!="") {
					move_uploaded_file($_FILES["image3"]["tmp_name"],"../public/images/caytrong/".$image3);
				}
				if ($image4!="") {
					move_uploaded_file($_FILES["image4"]["tmp_name"],"../public/images/caytrong/".$image4);
				}
				header("location:set_sanpham.php");
			}
		}
		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí sản phẩm");
		$smarty->assign("active5","class='active'");
		// $smarty->assign("err_anh",$err_anh);
		$smarty->assign("ad_view","views_admin/set_sanpham/them_sanpham.tpl");
		$smarty->display("layout_setadmin.tpl");
	}
	public function Xoa_san_pham(){
		$m_san_pham = new M_san_pham();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$xoa_sp=$m_san_pham->Xoa_san_pham($id);
		$sp=$m_san_pham->Doc_san_pham_theo_id($id);
		if ($xoa_sp) {
			if (file_exists('$sp->image'))
			{
    		unlink('$sp->image');
			}
			header("location:set_sanpham.php");
		}

	}

	public function Sua_san_pham(){
		$m_san_pham = new M_san_pham();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$sp=$m_san_pham->Doc_san_pham_theo_id($id);
		$image_sameo=$sp->image_same;
		$mang=explode(",", $image_sameo);
		//Các giá tị
		if (isset($_POST["sm"])) {
			$name=isset($_POST["name"])?$_POST["name"]:"";
			$describe=$_POST["ckeditor"];
			$id=isset($_GET["id"])?$_GET["id"]:"";
			$c_id=$_POST["c_id"];
			$price=$_POST["price"];
			$sale_price=isset($_POST["sale_price"])?$_POST["sale_price"]:"0";
			$from=$_POST["from"];
			$manny=$_POST["manny"];
		 	$sale=isset($_POST["sale"])?1:0;
		 	$special=isset($_POST["special"])?1:0;
		 	$status=isset($_POST["status"])?1:0;
			$s_describe=$_POST["s_describe"];
			$date_edit=date("Y-m-d",time());
			$image=$_FILES["image"]["error"]!==0?($sp->image):$_FILES["image"]["name"];
			$image1=$_FILES["image1"]["error"]!==0?$mang[0]:$_FILES["image1"]["name"];
			$image2=$_FILES["image2"]["error"]!==0?$mang[1]:$_FILES["image2"]["name"];
			$image3=$_FILES["image3"]["error"]!==0?$mang[2]:$_FILES["image3"]["name"];
			$image4=$_FILES["image4"]["error"]!==0?$mang[3]:$_FILES["image4"]["name"];
			$image_same=$image1.",".$image2.",".$image3.",".$image4;
			$sua_sanpham=$m_san_pham->Sua_san_pham($c_id, $name, $price, $sale_price, $image, $describe, $sale, $special, $status, $manny, $date_edit, $image_same, $s_describe,$from,$id);
			if ($sua_sanpham) {
				if (($_FILES["image"]["name"])!=$sp->image) {
					move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/caytrong/".$image);
				}
				if (($_FILES["image1"]["name"])!=$mang[0]) {
					move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/caytrong/".$image1);
				}
				if (($_FILES["image2"]["name"])!=$mang[1]) {
					move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/caytrong/".$image2);
				}
				if (($_FILES["image3"]["name"])!=$mang[2]) {
					move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/caytrong/".$image3);
				}
				if (($_FILES["image4"]["name"])!=$mang[3]) {
					move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/caytrong/".$image4);
				}
				header('location:set_sanpham.php');
			}
		}
		//View
		require_once ("../set_smarty.php");
		$smarty = new set_smarty();
		$smarty->assign("ad_tieude","Quản lí sản phẩm");
		$smarty->assign("active5","class='active'");
		$smarty->assign("sp",$sp);
		$smarty->assign("ad_view","views_admin/set_sanpham/sua_sanpham.tpl");
		$smarty->display("layout_setadmin.tpl");
	}

}
?>