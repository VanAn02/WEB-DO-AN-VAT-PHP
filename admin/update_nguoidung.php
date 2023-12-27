<?php
 include('../include/connect.php');
		$user=$_POST['user'];
		$email=$_POST['email'];
	   $dienthoai=$_POST['dienthoai'];
		$phanquyen=$_POST['phanquyen'];
		$id = $_GET['idnd'];
	$sql_update=("
		UPDATE nguoidung SET
							username='$user',
							email='$email',
							dienthoai='$dienthoai',
							phanquyen='$phanquyen'
							where idnd=$id
	");
	//echo $sql_update;
$update=mysql_query($sql_update);
if($update)
{

	header("Location: admin.php?admin=hienthind");
	echo"Bạn đã sửa thành công sản phẩm.";
    exit; 
}
else {

	echo"Sửa thất bại";
	header("Location:admin.php?admin=suasp&idnd=$id ");
	echo"Sửa thất bại";
    exit;

}
	
?>