<?php require_once('../model/config/DB_class.php');


	if(!isset($_POST['request']) && !isset($_GET['request'])) die();

	session_start();

	switch ($_POST['request']) {
		case 'dangnhap':
			dangNhap();
			break;

		case 'dangxuat':
			dangXuat();
			break;

		case 'dangky':
			dangKy();
			break;

		case 'getCurrentUser':
			if(isset($_SESSION['currentUser'])) {
				die (json_encode($_SESSION['currentUser']));
			}
			die (json_encode(null));
			break;
		
		default:
			# code...
			break;
	}

	function dangXuat() {
		if(isset($_SESSION['currentUser'])) {
			unset($_SESSION['currentUser']);
			die ("ok");
		}
		die ("no_ok");
	}

	function dangNhap() {
		$taikhoan=$_POST['data_username'];
		$matkhau=$_POST['data_pass'];
		$matkhau=md5($matkhau);

		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan='$taikhoan' AND MatKhau='$matkhau' AND MaQuyen=1 AND TrangThai=1";
		$result = (new DB_driver())->get_row($sql);

		if($result != false){
		    $_SESSION['currentUser']=$result;
		    die (json_encode($result)); 
		}  
		die (json_encode(null));
	}

	function dangKy() {
        $xuli_ten=$_POST['data_ten'];
        $xuli_ho=$_POST['data_ho'];
		$xuli_sdt=$_POST['data_sdt'];
		$xuli_email=$_POST['data_email'];
		$xuli_newUser=$_POST['data_newUser'];
		$xuli_newPass=$_POST['data_newPass'];
		$xuli_newPass=md5($xuli_newPass);

		$status = (new NguoiDungBUS())->add_new(array(
            "MaND" => '',
			"Ho" => $xuli_ho,
            "Ten" => $xuli_ten,
            "GioiTinh" => '',
			"SDT" => $xuli_sdt,
			"Email" => $xuli_email,
			// "DiaChi" => '',
			"TaiKhoan" => $xuli_newUser,
			"MatKhau" => $xuli_newPass,
			"MaQuyen" => 1,
			"TrangThai" => 1
        ));

		// đăng nhập vào ngay
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan='$xuli_newUser' AND MatKhau='$xuli_newPass' AND MaQuyen=1 AND TrangThai=1";
		$result = (new DB_driver())->get_row($sql);

        if($result != false){
		    $_SESSION['currentUser']=$result;
		    die (json_encode($result)); 
		}  

		die (json_encode(null));
	}
?>