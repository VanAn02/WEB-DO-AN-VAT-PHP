<base href="http://localhost/mixifood/" />
<?php 
session_start();
include("include/connect.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> MIXI FOOD </title>

<link rel="stylesheet" style="style/sheet" href="css/index.css">




</head>
<body style="background:white">
<div id="wapper">
	<div id="header">
		<div id="bg-header">	
		</div><!-- End .bg-header -->
			<div id="menu-header">
			<?php include("home_include/menu_ngang.php"); ?>
				<!-- End .menu -->
			</div><!-- End .menu-header -->
	</div><!-- End .header -->
		<div id="main-content">
			<div id="left-content">
				<?php include("home_include/left_content.php");?>
			</div><!-- End .left-content -->
			
			<div id="center-content">
				
				<?php include("content_page.php"); ?>
				<!-------------------------------------------------------------------------------------------------------------------->
					
				
			</div><!-- End .center-content -->
			
			<div id="right-content">
				<?php include("home_include/right_content.php"); ?>
			</div><!-- End .right-content-->
		</div><!-- End .main-content -->
	<div id="footer">
		<div id="bg-footer">
			<div id="noidungfooter">
				<div id="noidung">
					<ul>
						<li><span id="tencongty">MIXI FOOD</span></li> <br>
						
						<li>Địa chỉ:Toà V1 chung cư Văn Phú Victoria - Khu đô thị Văn Phú - Phú La - Hà Đông.  </li>
						<li>Điện thoại: 0972341193 - Hotline:  0972341193</li>
						<li>Email:  doanvat@gmail.com</li>
					</ul>
				</div><!-- End .noidung -->
				<div id="thanhngang">
					<img src="img/thanhngang-footer.png">
				</div><!-- End .thanhngang -->
				<div id="copyright">
					<p>Sinh Viên : Hoàng Thị Vân Anh | Lớp : CNTT14-03 | Gmail : hoangthivananh22122002@gmail.com<p>
				</div><!-- End .copyright -->
			</div><!-- End .noidungfooter -->
		</div><!-- End .bg-footer -->
	</div><!-- End .footer -->
</div><!-- End .wapper -->
</body>
</html>