<?php 
include_once("../models/database.php");
/**
* 
*/
class M_index extends database
{
	
	//Sản phẩm
	function Dem_tong_san_pham()
	{
		$sql="select * from product";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Dem_tong_san_pham_ht()
	{
		$sql="select * from product where status=1";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}

	//Phản hồi
	function Dem_tong_phan_hoi(){
		$sql="SELECT * FROM `admin`";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Phan_hoi_trong_ngay(){
		$sql="SELECT * FROM `admin` where status=1";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	//Danh mục
	function Dem_danh_muc(){
		$sql="SELECT * FROM `categories`";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Dem_danh_muc_ht(){
		$sql="SELECT * FROM `categories` where status=1";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	//Hóa đơn
	function Tong_hoa_don(){
		$sql="SELECT * FROM `customer`";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Hoa_don_moi(){
		$sql="SELECT * FROM `customer` where cus_status=0";
		$this->setQuery($sql);
		return $this->loadAllRow();
	}

}
?>