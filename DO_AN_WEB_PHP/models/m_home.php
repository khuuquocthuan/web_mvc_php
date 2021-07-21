<?php 
include_once("database.php");
class M_home extends database{
	//Hiển thị slider
	function Hien_thi_sl($vt=-1,$limit=-1){
		$sql="select * from slider where status=1";
		if ($vt>=1 && $limit>0) {
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}
	//Hiển thị sản phẩm khuyến mại
	public function Doc_san_pham_sale($vt=-1,$limit=-1){
			$sql="select * from product where status=1 and sale=1";
			if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
				
			}
			$this->setQuery($sql);
			return $this->loadAllRow();

		}
		//Hiển thị sản phẩm nổi bật
		public function Doc_san_pham_noi_bat(){
			$sql="select * from product order by id desc";
				$sql.=" limit 0,8";
			$this->setQuery($sql);
			return $this->loadAllRow();

		}
		public function Doc_menu_cha(){
			$sql="select * from categories where p_id=0 and status=1";
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
		public function Doc_menu_con(){
			$sql=" select * from categories where p_id<>0 and status=1";
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
}


 ?>