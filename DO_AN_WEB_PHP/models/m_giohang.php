<?php 
include_once "database.php";
/**
* 
*/
class M_gio_hang extends database
{
	
	function Hien_thi_gio_hang($vt=-1,$limit=-1)
	{
		$sql="SELECT bill.*,customer.cus_name,cus_status FROM customer,bill WHERE customer.cus_id=bill.cus_id";
		if ($vt>=0 && $limit>0) {
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	public function Sua_gio_hang($cus_status,$cus_id){
		$sql="UPDATE `customer`SET `cus_status`=? WHERE cus_id=?";
		$this->setQuery($sql);
		return $this->execute(array($cus_status,$cus_id));
	}
	public function Hien_thi_tong_sp($b_id){
		$sql="SELECT * FROM `pbill` WHERE b_id=?";
		$this->setQuery($sql);
		return $this->loadAllRow(array($b_id));
	}
	public function Chon_gh_theo_id($b_id){
		$sql="select * from bill WHERE b_id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($b_id));
	}
	public function Chon_kh_theo_id($b_id){
		$sql="select * from customer WHERE cus_id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($b_id));
	}
	public function Chi_tiet_don_hang($id){
		$sql="select * from pbill where b_id=?";
		$this->setQuery($sql);
		return $this->loadAllRow(array($id));
	}
	public function Xoa_san_pham_pbill($id){
		$sql="DELETE FROM `pbill` WHERE b_id=?";
		$this->setQuery($sql);;
		return $this->execute(array($id));
	}
	public function Xoa_san_pham_bill($id){
		$sql="DELETE FROM `bill` WHERE b_id=?";
		$this->setQuery($sql);;
		return $this->execute(array($id));
	}
	public function Xoa_san_pham_cus($id){
		$sql="DELETE FROM `customer` WHERE cus_id=?";
		$this->setQuery($sql);;
		return $this->execute(array($id));
	}
}


 ?>