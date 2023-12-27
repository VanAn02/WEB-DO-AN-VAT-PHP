<?php
include'../include/connect.php';

$delete = "delete from danhmuc where madm='{$_GET['madm']}'";
$del = mysql_query($delete);
if ($del)
    {  
        echo"Xoa danh mục thành công. ";
       header ("admin.php?admin=hienthidm");
    }
    else
        echo "Xóa danh mục thất bại";
?>
