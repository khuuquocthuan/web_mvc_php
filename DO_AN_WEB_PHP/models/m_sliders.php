<?php
include_once ("database.php");

class M_slider extends database{
	function Hien_thi_sl($vt=-1,$limit=-1){
		$sql="select * from slider where status=1";
		if ($vt>-1 && $limit>0) {
			$sql=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	
//Sửa slidder
	function Hien_thi_slad($vt=-1,$limit=-1){
		$sql="select * from slider";
		if ($vt>-1 && $limit>0) {
			$sql=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	function Hien_thi_1sl($id){
		$sql="select * from slider where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	public function Sua_slider($name,$status,$date_edit,$ma_sl,$id){
		$sql=" UPDATE `slider` SET `name`=?,`status`=?,`date_edit`=?,`ma_sl`=? WHERE id=?";
		$this->setQuery($sql);
		$param=array($name,$status,$date_edit,$ma_sl,$id);
		return $this->execute($param);
	}

}

?>