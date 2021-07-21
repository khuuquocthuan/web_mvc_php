<?php 
include_once("../models/database.php");
//HIỂN THỊ ADMIN
class M_admin extends database{
	//HIỂN THỊ ADMIN
		function Hien_thi_admin($vt=-1,$limit=-1){
		$sql="select * from admin";
		if ($vt>-1 && $limit>0) {
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Hien_thi_admin_on($vt=-1,$limit=-1){
		$sql="select * from admin where status=1";
		if ($vt>-1 && $limit>0) {
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Hien_thi_1admin($id){
		$sql="select * from admin WHERE id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	function Hien_thi_admin_theo_user($id){
		$sql="select * from admin WHERE user='?' ";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	//Quản lí admin
	function Them_admin($name,$email,$date_born,$status,$user,$pass){
		$sql="INSERT INTO `admin`(`name`, `email`, `date_born`, `status`,`user`, `pass`) VALUES (?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($name,$email,$date_born,$status,$user,$pass);
		return $this->execute($param);

	}
	function Sua_admin($name,$email,$date_born,$status,$user,$pass,$id){
		$sql="UPDATE admin SET name=?,email=?,date_born=?,status=?,user=?,pass=? WHERE id=? ";
		$this->setQuery($sql);
		$param=array($name,$email,$date_born,$status,$user,$pass,$id);
		return $this->execute($param);
	}
	function Xoa_admin($id){
		$sql="DELETE FROM admin WHERE id=?";
		$this->setQuery($sql);
		$param=array($id);
		return $this->execute($param);

	}
}


 ?>