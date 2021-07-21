<?php 
require_once "database.php";
/**
* 
*/
class M_website extends database
{
public function Hien_thi_website(){
	$sql="select * from website";
	$this->setQuery($sql);
	return $this->loadAllRow();
}
public function Hien_thi_1website(){
	$sql="Select * from website where id=1";
	$this->setQuery($sql);
	return $this->loadRow();
}
//quản trị
public function Sua_website($tittle, $logo, $address, $phone, $email,$face,$s_describe){
	$sql="UPDATE `website` SET `tittle`=?,`logo`=?,`address`=?,`phone`=?,`email`=?,`face`=?,`s_describe`=? WHERE id=1";
	$this->setQuery($sql);
	$param=array($tittle, $logo, $address, $phone, $email,$face,$s_describe);
	return $this->execute($param);
}
}
?>