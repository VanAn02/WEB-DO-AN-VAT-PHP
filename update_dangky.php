﻿
<?php 
include 'include/connect.php';


if(isset($_POST['submit']))
{
	
	$user=$_POST['user'];
	$pass=MD5($_POST['pass']);
	$email=$_POST['email'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	
	//Lay gio cua he thong
		$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		//Lay ngay cua he thong
		$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
	
	$insert="INSERT INTO nguoidung VALUES('', '$user', '$pass','$ngaysinh','$gioitinh', '$email','$dienthoai', '$diachi','$ngay', '1')";
		$query=mysql_query($insert);
		if($query) {
		//header("index.php" );
			echo "<p align = center>Đăng ký thành công!</p>";
			echo '<meta http-equiv="refresh" content="1;url=index.php">';
		}
			else { echo "Thất bại";
			}
}
?>