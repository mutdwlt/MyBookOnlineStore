<?php
	session_start();
	if(!$_SESSION['name']||($_SESSION['role']!=1)) header('location:login.php');
	$username=$_SESSION['name'];
	$conn=mysqli_connect("localhost","root","","bookstore");
	mysqli_set_charset($conn,"utf8");
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$sql="select * from customers where username='".$username."'";
	$query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($query) == 0)
		{
			 header('location:login.php');
		}
	$data=mysqli_fetch_assoc($query);
	$name=$data['cus_name'];
	$sex=$data['sex'];
	$phone=$data['phone'];
	$email=$data['email'];
	$address=$data['address'];
	$birth=$data['birth'];
	$password=$data['password'];
	$role=$data['role'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Điều hành trang web</title>
		<link rel="stylesheet" href="css/ad_account.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/top_header.css">
		<link rel="stylesheet" href="css/cus_account.css">
		<link rel="stylesheet" href="css/store.css">
		<style type="text/css">
			a:link{
				text-decoration:none;
				color:#05b2e9;
			}
			a:visited {
				color: #05b2e9;
			}
			a:hover {
				color: #3C3;
			}
			a:active {			
				color: #F00;
			}
		</style>
</head>
<body>
    <div class="top">
    	<center><a href="index.php"><img src="images/File-1414989219.png" alt="" width="1140" height="65" /></a></center>
	</div>
    <!--------- START HEADER----------------->
	<div class="header">
        <div id="homepage_icon"><a href="index.php"><abbr title="Home Page"><img src="images/Homepage_icon.jpg" width="80" height="97"/></abbr></a></div>
	  	<div class="search_area">
            <form>
            	<div class="search_div"><input type="text" name="search" class="search"/></div>
            	<input name="button" type="button" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="index.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
        </div>
		<div class="login_area">
           	<div class="login_icon"><img src="images/<?php if($_SESSION['role']==1) echo "admin_icon.png"; else echo"login_icon.png";?>" width="45" height="41" align="middle" /></div>
			<?php
				if(isset($_SESSION['name']))
				{
				?>
				<div class="login_text"><a href="ad_account.php">Xin chào <?php echo $_SESSION["name"];?></a> | <a href="logout.php">Đăng Xuất</a></div>
				<?php
				}
				else
				{
				?>
				<div class="login_text"><a href="login.php">Đăng nhập</a> | <a href="registered.php">Đăng ký</a></div>
				<?php
				}
			?>  
            <div class="hotline"><img src="images/phone_icon.jpg" width="15" height="15" /><span class="hotline_text">Hotline:</span> <span class="phone_number">1900-6035</span><span style="font-size:12px">(8-21h kể cả T7,CN)</span></div>
        </div>
    </div>
    <br />
	<hr />
	    <!--------- END HEADER ------------------>	
<div class="container">
	
	<div class="clearfix">
		<div class="layout">
			<div class="col-left">
				<div class="avatar clearfix">
					<h3>Điều hành trang web</h3>
					<div class="all-left">
						<a href="ad_account.php" title="User-name">
						<img src="images/<?php if($_SESSION['role']==1) echo "admin_icon.png"; else echo"login_icon.png";?>" alt="User-name" width="45" height="45">
						</a>
						<a href="ad_account.php" title="đặng linh">
							<span class="u-name"><?php echo $name;?></span>		</a>
					</div>
				</div>
				<ul>
					<li class="on"><a href="ad_account.php">Thông tin chung về trang web</a></li>
					<li><a href="upload_book.php">Thêm sách mới</a></li>
					<li><a href="store.php">Quản lý Kho hàng</a></li>
					<li><a href="customers.php">Quản lý khách hàng</a></li>
					<li><a href="ad_order_history.php">Quản lý đơn hàng</a></li>
					
					<li><a href="#">Hướng dẫn</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Bảng điều khiển</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, admin!</strong><br>
				Sử dụng bảng điều khiển này để quản lý trang web</p>
				</div>
				<div class="main-3">
					
						<ul class="ad-web-info">
							<li class="head">
								<h4>Thông tin trang web </h4>
							</li>
							<li class="info">
							<?php $today=date("Y-m-d");?>
								<div class="info-date">Hôm nay là ngày <i> <?php echo $today;?></i>.</div>
							</li >
							<?php
								$sql="SELECT book_ID FROM books";
								$query=mysqli_query($conn,$sql);
								$row=mysqli_num_rows($query);
								$sql="SELECT book_ID FROM books WHERE sale_off!=0";
								$query=mysqli_query($conn,$sql);
								$sale_off=mysqli_num_rows($query);
								$sql="SELECT order_ID FROM orders WHERE status=1";
								$query=mysqli_query($conn,$sql);
								$xuly=mysqli_num_rows($query);
								$sql="SELECT order_ID FROM orders WHERE status=0";
								$query=mysqli_query($conn,$sql);
								$chuaxuly=mysqli_num_rows($query);
								$sql="SELECT cus_ID FROM customers WHERE role=0";
								$query=mysqli_query($conn,$sql);
								$member=mysqli_num_rows($query);
							?>
							<li class="info">
								<ul class="info-record">
									<li>
										<p>Hiện giờ trang web có <span class="info-number"><?php echo $row;?></span> <a href="store.php"> đầu sách</a> trong đó có <em><?php echo $sale_off;?></em> đầu sách đang được giảm giá</p>
								
									</li>
									<li>
										<p>Tính đến bây giờ trang web đã xử lý <span class="info-number"><?php echo $xuly;?></span> <a href="ad-order-history.php">đơn hàng</a> và <em><?php echo $chuaxuly;?></em> đơn hàng chưa xử lý</p>
									</li>
									<li>
										<p>Có <span class="info-number"><?php echo $member;?></span> <a href="customers.php">khách hàng</a> đã đăng ký vào trang web
									</li>
								</ul>
							</li>
							
						</ul>
					
				</div>
				<div class="button-set">
				</div>
				
			</div>
			
		</div>
	</div>

</div>	
<div class="footer">
       		<div class="leter_icon"><img src="images/Homepage/icon_sign.png" width="25" height="25"></div>
			<span id="footer_title">Đăng Kí Nhận Bản Tin Hedspi - <span style="font-weight:normal">Nhiều Tiện Lợi và Ưu Đãi đang chờ bạn!</span></span>
        	<div class="hand_icon"><img src="images/Homepage/hand-right-128.png" width="40" height="40"></div>
        	<form>
            	<div class="input"><input type="text" name="input" class="input_class"></div>
            	<input name="button" type="button" class="button_class" value="Đăng Ký - Nhận Tiện Ích">
            </form>
             <div class="clr"></div>
            <p>© Đại Học Bách Khoa Hà Nội<br><br>Lớp Thực Hành Cơ Sở Dữ Liệu - Việt Nhật B- K57<br>Thành viên: Ngô Văn Thịnh, Trần Bảo Huy, Đặng Mỹ Linh, Đồng Xuân Mạnh</p>
        </div>



</body>
<html>
