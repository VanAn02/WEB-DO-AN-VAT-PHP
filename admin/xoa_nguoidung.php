<?php
include '../include/connect.php';

$delete = "delete from nguoidung where idnd='{$_GET['idnd']}'";
$tennd=$_GET['tennd'];
$del = mysql_query($delete);
if ($del)
	//echo "thanh cong";
	//header("location: index.php?admin=hienthind");
	//redirect ("admin.php?admin=hienthind");
	header("location: index.php?admin=hienthind");
		
?>