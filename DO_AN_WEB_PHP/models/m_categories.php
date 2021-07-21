<?php
	require_once("database.php");

	class M_loai_sp extends database{
			//người dùng
		//Hiển thị dan sách loại sản phẩm
		public function Doc_loai($vt=-1,$limit=-1){
			$sql="select * from categories";
			if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
				
			}
			$this->setQuery($sql);
			return $this->loadAllRow();

		}
		//Hien thi 1 danh mục
		public function Doc_1loai($c_id){
			$sql="select * from categories where id=?";
			$this->setQuery($sql);
			return $this->loadRow(array($c_id));
		}
		//Hiển thị loại theo mã và stt
		public function Doc_loai_theo_ma($c_id){
			$sql="select * from categories where id=? and status=1";
			$this->setQuery($sql);
			return $this->loadAllRow(array($c_id));
		}
		//Hiển thị theo parent_id
		public function Doc_loai_theo_p_id($p_id){
			$sql="select * from categories where p_id=? and status=1";
			$this->setQuery($sql);
			return $this->loadAllRow(array($p_id));

		}
	
		/********Quản trị*****/
		//thêm loại sản phẩm
		public function them_loai($name,$p_id,$status){
			$sql="insert into categories(name,p_id,status) values (?,?,?)";
			$this->setQuery("$sql");
			return $this->execute(array($name,$p_id,$status));


		}
		//Cập nhật
		public function sua_loai($name,$p_id,$status,$date,$id){
			$sql="UPDATE categories SET name=?,p_id=?,status=?,date_edit=? WHERE id=?";
			$this->setQuery("$sql");
			return $this->execute(array($name,$p_id,$status,$date,$id));

		}
		//Xóa
		public function xoa_loai($id){
			$sql="delete from categories where id=?";
			$this->setQuery("$sql");
			return $this->execute(array($id));

		}



	}




?>