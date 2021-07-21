<?php
    require_once('database.php');
    class M_khach_hang extends database {
        function khach_hang_hoa_don() {
            $query = 'SELECT hd.ma_hoa_don, ngay_dat, kh.ma_khach_hang, ten_khach_hang, dia_chi, dien_thoai,email, tong_tien, mon_an.ma_mon, ten_mon, so_luong, mon_an.don_gia, mon_an.don_gia*so_luong as thanh_tien, hinh FROM hoa_don hd, khach_hang kh, mon_an, chi_tiet_hoa_don ct WHERE hd.ma_hoa_don = ct.ma_hoa_don AND hd.ma_khach_hang = kh.ma_khach_hang AND ct.ma_mon = mon_an.ma_mon Order by  kh.ma_khach_hang';
            $this->setQuery($query);
			$khachhangs=$this->loadAllRow();
			$mang=array();
			foreach($khachhangs as $row)
			{
				$mang[]=$row;
			}
            return $mang;
        }
        function themKhachHang($cus_name,$cus_email,$cus_phone,$cus_address,$cus_note,$cus_status) {
            $query = "INSERT INTO `customer`( `cus_name`, `cus_email`, `cus_phone`, `cus_address`, `cus_note`, `cus_status`) VALUES (?,?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($cus_name,$cus_email,$cus_phone,$cus_address,$cus_note,$cus_status));
            if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
            
                return false;
        }
        function themHoaDon($cus_id,$b_date_up,$b_cprice) {
            $query = "INSERT INTO `bill`(`cus_id`, `b_date_up`, `b_cprice`) VALUES (?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($cus_id,$b_date_up,$b_cprice));
            if($result) 
                return $this->getLastId();
            else
                return false;
        }
        function themChiTietHoaDon($b_id,$pr_id,$pb_count,$pb_cprice) {
            $query = "INSERT INTO `pbill`(`b_id`, `pr_id`, `pb_count`, `pb_cprice`) VALUES (?,?,?,?)";
            $this->setQuery($query);
            return $this->execute(array($b_id,$pr_id,$pb_count,$pb_cprice));
        }
        function capNhatDonGia_mon($pr_id) {
            $query = "UPDATE pbill";
            $query.= "SET don_gia = (SELECT sale_price FROM product WHERE pbill.pr_id = product.id) ";
            $query.= "WHERE sale=1 and pr_id = ?";
            $this->setQuery($query);
            return $this->execute(array($pr_id));
        }
        function capNhatTongTien($ma_hoa_don)
        {
            $query = "UPDATE bill ";
            $query.= "SET b_cprice = (SELECT SUM( pb_count * pb_cprice ) AS tt FROM pbill WHERE pbill.b_id = bill.b_id) ";
            $query.= "WHERE b_bill = ?";
            $this->setQuery($query);
            return $this->execute(array($ma_hoa_don));
        }
        function getChiTietHoaDon($ma_hoa_don) {
            $query = "SELECT hd.b_id,b_date_up, kh.cus_id,cus_name,cus_email,cus_phone,cus_address,cus_note, ";
            $query.= "cus_status, sp.id,name,pb_count, sp.price, sp.price*pb_count as thanh_tien, ";
            $query.= "FROM bill hd, customer kh, product sp, pbill ct ";
            $query.= "WHERE hd.b_id = ct.b_id AND hd.cus_id = kh.cus_id AND ct.pr_id = sp.id ";
            $query.= "AND hd.b_id = ?";
            $this->setQuery($query);
            return $this->loadAllRow(array($ma_hoa_don));
        }
        public function lay_hoa_don($key)
        {
            $query = "SELECT khach_hang.ma_khach_hang,ten_khach_hang, email, dia_chi, dien_thoai,
                    hoa_don.ma_hoa_don,ngay_dat,tong_tien,tien_dat_coc,con_lai,hinh_thuc_thanh_toan,chi_tiet_hoa_don.ma_mon,
                    so_luong,chi_tiet_hoa_don.don_gia,mon_thuc_don FROM khach_hang,hoa_don,chi_tiet_hoa_don 
                    WHERE hoa_don.ma_khach_hang=khach_hang.ma_khach_hang and hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don and khach_hang.ma_khach_hang=?";
            $this->setQuery($query);
            return $this->loadAllRow(array($key));
        }
    } 
?>