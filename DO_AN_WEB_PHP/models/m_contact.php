<?php 
require_once "database.php";

/**
* 
*/
class M_phan_hoi extends database
{
	//Hiern thi toàn bộ phản hổi
	public function Doc_phan_hoi($vt=-1,$limit=-1){
		$sql="select * from contact order by id desc";
		if ($vt>=0 && $limit>0) {
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	//Chọn theo id
	public function Doc_san_pham_id($id){
		$sql="select * from contact where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	//ADMIN
	//Thêm
	public function Them_phan_hoi($name,$email,$phone,$feedback){
		$sql="INSERT INTO `contact`( `name`, `email`, `phone`, `feedback`) VALUES (?,?,?,?)";
		$this->setQuery($sql);
		$param=array($name,$email,$phone,$feedback);
		return $this->execute($param);
	}
	public function Xoa_phan_hoi($id){
		$sql="delete from contact where id=?";
		$this->setQuery($sql);
		return $this->execute(array($id));
	}
}

 ?>