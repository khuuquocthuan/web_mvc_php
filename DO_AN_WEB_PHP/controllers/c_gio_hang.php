<?php
    @session_start();
    include_once ("models/m_categories.php");
     include_once ("models/m_khach_hang.php");
    class C_gio_hang{
        protected $smarty;
        function xem_gio_hang()
        {
            include_once('set_smarty.php');
            $smarty=new set_smarty();
            $smarty->assign('tieu_de','Giỏ hàng');
            $gio_hang=$this->layGioHang();
            if($gio_hang) //Nếu có giỏ hàng
            {
                $gio_hang_thuc_don=array();
                $gio_hang_mon_an=array();
                foreach($gio_hang as $key=>$value)
                {
                    if(substr($key,0,1)=='t')
                        $gio_hang_thuc_don[substr($key,1,strlen($key)-1)]=$value;
                    else
                        $gio_hang_mon_an[$key]=$value;
                }
                
                if($gio_hang_mon_an) //Nếu có chọn món
                {
                    $_SESSION['gio_hang_mon_an']=$gio_hang_mon_an;
                    //lay_thong_tin_mon_an
                    $smarty->assign('ds_mon_an',$this->lay_thong_tin_mon_an($gio_hang_mon_an));
                }
                if($gio_hang_thuc_don) //Nếu có chọn thực đơn
                {
                    $_SESSION['gio_hang_thuc_don']=$gio_hang_thuc_don;
                    //lay_thong_tin_thuc_don
                    $smarty->assign('ds_thuc_don',$this->lay_thong_tin_thuc_don($gio_hang_thuc_don));
                }
            }
            //khách hàng
            if(isset($_POST['submit']))
        {
            $ten_khach_hang=$_POST['name'];
            $email=$_POST['email'];
            $dia_chi=$_POST['address'];
            $dien_thoai=$_POST['phone'];
            $ghi_chu=$_POST['note'];        
            $m_khach_hang=new M_khach_hang();
            $ma_khach_hang=$m_khach_hang->themKhachHang($ten_khach_hang, $email, $dien_thoai, $dia_chi, $ghi_chu);
            if($ma_khach_hang>0)
            {
               $ngay_dat = date('Y-m-d',time());
                $httt=isset($_SESSION['thanh_tien'])?$_SESSION['thanh_tien']:"";
                $hoa_don=$m_khach_hang->themHoaDon($ma_khach_hang, $ngay_dat,$httt);
                if($hoa_don>0)
                {
                    include_once('controllers/c_gio_hang.php');
                    $c_gio_hang=new c_gio_hang();
                    $gio_hang=$c_gio_hang->layGioHang();
                     if ($gio_hang) {
                     foreach($gio_hang as $key=>$value)
                    {       
                            include_once('models/m_products.php');
                            $m_products=new M_san_pham();
                            $gia=$m_products->Doc_san_pham_theo_id($key);
                            $pr_name=$gia->name;
                            $pr_image=$gia->image;
                            $tong=($gia->price)*($value);                       
                            $m_khach_hang->themChiTietHoaDon($hoa_don,$key,$value,$tong,$pr_name,$pr_image);
                    }   
                    }

                    $m_khach_hang->capNhatDonGia_mon($hoa_don);
                    $m_khach_hang->capNhatTongTien($hoa_don);
                    $c_gio_hang->xoaGioHang();
                    //In hoa đơn
                    if ($c_gio_hang) {
                        header("location:index.php");
                    }
                }
            }
        }
        else
        { 
        // include_once("models/m_website.php");
        //     $m_website=new M_website();
        //     $mweb=$m_website->Hien_thi_1website();
        //     $smarty->assign("mweb",$mweb);
        //     $m_loai_san_pham = new M_loai_sp();
        //     $p_id2=2;
        //     $p_id1=1;
        //     $menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id1);
        //     $menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
        //     $smarty->assign("menu1",$menu1);
        //     $smarty->assign("menu2",$menu2);
        //     $smarty->assign("ghactive","id='menuactive'");
        //     $smarty->assign("view","views/giohang/v_gio_hang.tpl");
        //     $smarty->display("layout_home.tpl");  
        }       
            //end khách hàng
            include_once("models/m_website.php");
            $m_website=new M_website();
            $mweb=$m_website->Hien_thi_1website();
            $smarty->assign("mweb",$mweb);
            $m_loai_san_pham = new M_loai_sp();
            $p_id2=2;
            $p_id1=1;
            $menu1=$m_loai_san_pham->Doc_loai_theo_p_id($p_id1);
            $menu2=$m_loai_san_pham->Doc_loai_theo_p_id($p_id2);
            $smarty->assign("menu1",$menu1);
            $smarty->assign("menu2",$menu2);
            $smarty->assign("view","views/giohang/v_gio_hang.tpl");
            $smarty->display("layout_home.tpl");
        }
        function layGioHang() {
            if(isset($_SESSION['gioHang']))
                return $_SESSION['gioHang'];
            else
                return false;
        }
        
        function lay_thong_tin_mon_an($mon_an)
        {
            $ma_mon=array();
            foreach($mon_an as $key=>$value)
            {
                $ma_mon[]=$key;
            }
            $ma_mon=implode(",",$ma_mon);
            include_once('models/m_products.php');
            $m_mon_an=new M_san_pham();
            $ds_mon_an=$m_mon_an->lay_mon_an_cho_gio_hang($ma_mon);
            $ds_mon_an_gio_hang=array(); //Ðua số lượng vào $ds_mon_an
            foreach($ds_mon_an as $item)
            {
                $item->so_luong=$mon_an[$item->id];
                $ds_mon_an_gio_hang[]=$item;
            }
            return $ds_mon_an_gio_hang;
        }
        function lay_thong_tin_thuc_don($thuc_don)
        {
            $ma_thuc_don=array();
            foreach($thuc_don as $key=>$value)
            {
                $ma_thuc_don[]=$key;
            }
            $ma_thuc_don=implode(",",$ma_thuc_don);
            include_once('models/m_thuc_don.php');
            $m_thuc_don=new M_thuc_don();
            
            $ds_thuc_don=$m_thuc_don->lay_thuc_don_cho_gio_hang($ma_thuc_don);
            $ds_thuc_don_gio_hang=array(); //Ðua s? lu?ng vào $ds_thuc_don
            foreach($ds_thuc_don as $item)
            {
                $item->so_luong=$thuc_don[$item->ma_thuc_don];
                $ds_thuc_don_gio_hang[]=$item;
            }
            return $ds_thuc_don_gio_hang;
        }

        function themGioHang($maSP, $so_luong, $donGia) {
            if($so_luong>0) {
                if(isset($_SESSION['gioHang'][$maSP])) {
                    $_SESSION['thanh_tien'] -= $_SESSION['gioHang'][$maSP]*$donGia;
                    $_SESSION['so_luong'] -= $_SESSION['gioHang'][$maSP];      
                }
                $_SESSION['gioHang'][$maSP] = $so_luong;
                if(isset($_SESSION['thanh_tien']))
                {
                    $_SESSION['thanh_tien']= $_SESSION['thanh_tien']+$so_luong*$donGia;
                    $_SESSION['so_luong'] = $_SESSION['so_luong']+$so_luong;
                }
                else
                {
                    $_SESSION['thanh_tien'] = $so_luong*$donGia;
                    $_SESSION['so_luong'] = $so_luong;    
                }
            }
            elseif($so_luong==0)
            {
                xoaMatHang($maSP, $donGia);
            }
        }
        function xoaMatHang($maSP, $donGia) {
            $gioHang = $this->layGioHang();
            $gioHangMoi = array();
            foreach($gioHang as $key=>$value)
            {
                if($key!=$maSP)
                    $gioHangMoi[$key]=$value;
                else
                {
                    $_SESSION['thanh_tien']=@$_SESSION['thanh_tien']-$gioHang[$maSP]*$donGia;
                    $_SESSION['so_luong']=@$_SESSION['so_luong']-$gioHang[$maSP];
                }   
            }
            if(!empty($gioHangMoi)) {
                $_SESSION['gioHang']=$gioHangMoi;
            }
            else {
                $this->xoaGioHang();
            }
        }        
        function xoaGioHang() {
            unset($_SESSION['gioHang']);
            unset($_SESSION['thanh_tien']);
            unset($_SESSION['so_luong']);
        }
        function thanh_tien() {
            if(isset($_SESSION['thanh_tien']))
                return $_SESSION['thanh_tien'];
            else
                return 0;
        }
        function so_luong() {
            if(isset($_SESSION['so_luong']))
                return $_SESSION['so_luong'];
            else
                return 0;
        }
        function tongSoMatHang() {
            if(isset($_SESSION['so_luong']))
                return $_SESSION['so_luong'];
            else
                return 0;
        }
        
        function capNhatGioHang($maSP, $so_luong, $donGia) {
            if(!is_numeric($so_luong))
                return false;
            $so_luong = (int)$so_luong;
            if($so_luong>0) {
                $_SESSION['thanh_tien']-=$_SESSION['gioHang'][$maSP]*$donGia;
                $_SESSION['thanh_tien']+=$so_luong*$donGia;
                $_SESSION['gioHang'][$maSP]=$so_luong;
                $_SESSION['so_luong']-=$_SESSION['gioHang'][$maSP];
                return false;
            }
            if($so_luong ==0) 
                $this->xoaMatHang($maSP, $donGia);
            return false;
        }
    }
?>