

<?php

if(isset($_GET['admin']))
	switch($_GET['admin'])
	{
		case 'hienthisp':
			include ("sanpham.php");
			break;
		case 'themsp':
			include ("them_sanpham.php");
			break;
		case 'suasp':
			include ("sua_sanpham.php");
			break;
		case 'hienthidm':
			include ("danhmuc.php");
			break;
		case 'themdm':
			include ("them_danhmuc.php");
			break;
		case 'suadm':
			include ("sua_danhmuc.php");
			break;
		case 'hienthind':
			include ("nguoidung.php");
			break;
		case 'suand':
			include ("sua_nguoidung.php");
			break;
		case 'hienthihd':
			include ("hoadon.php");
			break;
		default:
			include ("sanpham.php");
			break;
	}
	else 
	{
	?>
		<div id="admincon">
			
			<div id="sanphammoi">
				<table>
				<?php $ngay=date('Y-m-d'); ?>
					<tr class="sanphammoitheongay">
						<td colspan=6>Đơn hàng cần được xử lý</td>
					</tr>
					<tr class="tieudespmoi">
						<td>STT</td>
						<td>Họ tên</td>
						<td>Địa chỉ</td>
						<td>Điện thoại</td>
						<td>Ngày đặt hàng</td>
					</tr>
					<?php 
						$i=1;
						$sql=mysql_query("select * from hoadon where trangthai='1'");
						while($row=mysql_fetch_array($sql))
						{
					
					?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['hoten'] ?></td>
						<td><?php echo $row['diachi'] ?></td>
						<td><?php echo $row['dienthoai'] ?></td>
						<td><?php echo $row['ngaydathang'] ?></td>
					</tr>
					<?php } ?>
					
				</table>
			</div>
		</div>
	<?php 
	}

?>