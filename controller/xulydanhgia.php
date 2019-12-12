<?php
	 require_once('../model/config/DB_class.php');

    if(!isset($_POST['request']) && !isset($_GET['request'])) die(null);
    
	switch ($_POST['request']) {
    	// lấy đánh giá của 1 sản phẩm
        case 'getbyidsp':
            $sp = (new DanhGiaBUS())->getDanhGiaCuaSP($_POST['idsp']);
            for($i = 0; $i < sizeof($sp); $i++) {
                // thêm thông tin người đánh giá
                $sp[$i]["TK"] = (new TaiKhoanBUS())->getTaiKhoanBangMa($sp[$i]['MaND']);
            }
            die (json_encode($sp));
            break;
        case 'save':
            luuDanhGia();
            break;
    	default:
    		# code...
    		break;
    }

    function luuDanhGia() {
        $masp=$_POST['masp'];
        $mand=$_POST['mand'];
		$sosao=$_POST['sosao'];
		$binhluan=$_POST['binhluan'];
        $ngay=$_POST['ngay'];
        $status = (new DanhGiaBUS())->add_new(array(
            "MaSP" => $masp,
			"MaND" => $mand,
            "SoSao" => $sosao,
            "BinhLuan" => $binhluan,
			"NgayLap" => $ngay
        ));
        die (json_encode("Success"));
    }

?>