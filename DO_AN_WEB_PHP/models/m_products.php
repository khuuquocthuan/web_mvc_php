<?php  
	require_once 'database.php';
	/**
	* 
	*/
	class M_san_pham extends database
	{
		
		// Hiển thị danh sách sản phẩm giảm giá
		public function Doc_san_pham_sale($vt=-1,$limit=-1){
			$sql="select * from product where status=1 and sale=1";
			if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
			$this->setQuery($sql);
			return $this->loadAllRow();

		}
		//ĐỌc theo c_id
		public function Doc_san_pham_theo_cid($vt=-1,$limit=-1,$p_id){
			$sql="select * from product where c_id=?";
			if ($vt >=0 && $limit>0) {
				$sql.=" order by id	desc limit $vt,$limit";
			}
			$this->setQuery($sql);
			return $this->loadAllRow(array($p_id));
		}
		//end
		public function lay_mon_an_cho_gio_hang($chuoi)
        {
            $query="Select * from product where id in($chuoi)";
			$this->setQuery($query);
			return $this->loadAllRow();
        }
		//Đọc sp theo id
		public function Doc_san_pham_theo_id($p_id){
			$sql="select * from product where id=? ";
			$this->setQuery($sql);
			return $this->loadRow(array($p_id));
		}
		//đọc sản phẩm teo p_id
		public function Doc_san_pham_theo_loai($vt=-1,$limit=-1,$p_id){
			$sql="select product.*,categories.p_id from product,categories where product.c_id = categories.id and p_id=?";
			if ($vt >=0 && $limit>0) {
				$sql.=" order by id	desc limit $vt,$limit";
			}
			$this->setQuery($sql);
			return $this->loadAllRow(array($p_id));
		}
		//Hiển thị sản phẩm nổi bật
		public function Doc_san_pham_noi_bat($vt=-1,$limit=-1){
			$sql="select * from product where status=1 and special=1";
			if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
			$this->setQuery($sql);
			return $this->loadAllRow();
		}

		//Hiển thị danh sách sản phẩm mới nhất
		public function Doc_san_pham_moi_nhat($vt=-1,$limit=-1){
			$sql="select * from product where status=1";
			if ($vt >=0 && $limit>0) {
				$sql.=" order by id desc limit $vt,$limit ";
				
			}
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
		//Hiển thị sản phẩm giá tăng dần
		public function Doc_san_pham_gia_tang_dan($vt=-1,$limit=-1){
			$sql="select * from product where status=1";
			if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit order by price desc";
				
			}
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
		//Hien thi theo tên
		public function Doc_san_pham_theo_ten($vt=-1,$limit=-1,$name){
			$sql="select * from product where status=1 and name like '%$name%' ";
			if ($vt >=0 && $limit>0) {
				$sql.=" order by id desc limit $vt,$limit ";
				
			}
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
		//Admin
		public function Hien_thi_sp($vt=-1,$limit=-1){
			$sql="select * from product order by id desc";
			if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
				
			}
			$this->setQuery($sql);

			return $this->loadAllRow();

		}
		//Thêm sản phẩm
		//INSERT INTO `product`( `c_id`, `name`, `price`, `sale_price`, `image`, `describe`, `sale`, `special`, `status`, `manny`, `image_same`, `s_describe`, `from`)
		public function Them_san_pham($c_id, $name, $price, $sale_price, $image, $describe, $sale, $special, $status, $manny,  $image_same, $s_describe,$from){
			// $sql=" insert into product( c_id, name, price, sale_price, image, describe, sale, special, status, manny, image_same, s_describe,from) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$sql=" INSERT INTO `product`(`c_id`,`name`,`price`,`sale_price`,`image`,`describe`,`sale`,`special`,`status`,`manny`,`image_same`,`s_describe`,`from`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";			
			$this->setQuery($sql);
			$param=array($c_id,$name,$price,$sale_price,$image,$describe,$sale,$special,$status,$manny,$image_same,$s_describe,$from);
			return $this->execute($param);
		}


		//Cập nhật sản phẩm
		
		public function Sua_san_pham($c_id, $name, $price, $sale_price, $image, $describe, $sale, $special, $status, $manny,$date_edit,$image_same, $s_describe,$from,$id){
			$sql="UPDATE `product` SET `c_id`=?,`name`=?,`price`=?,`sale_price`=?,`image`=?,`describe`=?,`sale`=?,`special`=?,`status`=?,`manny`=?,`date_edit`=?,`image_same`=?,`s_describe`=?,`from`=? WHERE `id`=?";
			$this->setQuery($sql);
			$param=array($c_id, $name, $price, $sale_price, $image, $describe, $sale, $special, $status, $manny,$date_edit,$image_same, $s_describe,$from,$id);
			return $this->execute($param);
			}

		//Xóa sản phẩm
			public function Xoa_san_pham($id){
				$sql="DELETE FROM product WHERE id=?";
				$this->setQuery($sql);
				$param=array($id);
				return $this->execute($param);

			}


	}
?>