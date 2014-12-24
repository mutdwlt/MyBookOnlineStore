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
	$cus_ID=$_GET['cus_ID'];
	$query=mysqli_query($conn,"SELECT * FROM customers WHERE cus_ID='$cus_ID' LIMIT 1");
	$rowcus=mysqli_fetch_assoc($query);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Quản lý đơn hàng</title>
		<link rel="stylesheet" href="css/upload_book.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/top_header.css">
		<link rel="stylesheet" href="css/cus_account.css">
		<link rel="stylesheet" href="css/ad_order_history.css">
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
            <form action="search_result.php" method="post">
            	<div class="search_div"><input type="text" name="search" class="search"/></div>
            	<input name="submit" type="submit" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="search.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
        </div>
		<div class="login_area">
           	<div class="login_icon"><img src="images/<?php if($_SESSION['role']==1) echo "admin_icon.png"; else echo"login_icon.png";?>" width="45" height="41" align="middle" /></div>
			<?php
				if(isset($_SESSION['name']))
				{
					if($_SESSION['role']==1)
					{
					?>
						<div class="login_text">Chào Admin</div>
						<div class="login_text"><a href="ad_account.php">Trang quản lý</a> | <a href="logout.php">Đăng Xuất</a></div>
					<?php					
					}
					else
					{
					?>
						<div class="login_text"> Chào <?php echo $_SESSION['name'];?> - <a href="logout.php">Log out</a></div>
						<div class="login_text"><a href="cus_account.php">Trang cá nhân</a> | <a href="cus_cart.php">Giỏ hàng</a></div>
					<?php
					}
				}
				else
				{
				?>
				<div class="login_text1"><a href="login.php">Đăng nhập</a> | <a href="registered.php">Đăng ký</a></div>
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
					<li><a href="ad_account.php">Thông tin chung về trang web</a></li>
					<li><a href="upload_book.php">Thêm sách mới</a></li>
					<li><a href="store.php">Quản lý Kho hàng</a></li>
					<li class="on"><a href="customers.php">Quản lý khách hàng</a></li>
					<li><a href="ad_order_history.php">Quản lý đơn hàng</a></li>
					
					<li><a href="#">Hướng dẫn</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Đơn hàng của <?php echo $rowcus['cus_name'];?> </h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, admin</strong><br>
				Bạn có thể xem ngắn gọn về các giao dịch đã thực hiện</p>
				</div>
				<div class="main-3">
				<div class="main-3">
					<div class="title-box">
						<h4 class="orange-t">Tất cả các đơn hàng</h4>
						<br>
					</div>
					<table class="table table-striped table-bordered" id="my-orders-table">
						<thead>
							<tr class="first last">
								<th>Đơn hàng #</th>
								<th>Ngày mua</th>
								<th>Gửi đến</th>
								<th>Tổng tiền</th>
								<th>Trạng thái đơn hàng</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sqlorder="SELECT * FROM orders WHERE cus_ID='$cus_ID'";
								$query=mysqli_query($conn,$sqlorder);
								if(mysqli_num_rows($query)==0) {echo "<font color='red'>không tìm thấy dữ liệu yêu cầu</font>";}
								else{
								while($row=mysqli_fetch_assoc($query))
								{?>
									<tr class="first last odd">
										<td><a href="#" title="Xem đơn hàng"><?php echo $row['order_ID'];?></a></td>
										<td><?php echo $row['date']; ?> </td>
										<?php
											$cus_ID=$row['cus_ID'];
											$query1=mysqli_query($conn,"SELECT cus_name FROM customers WHERE cus_ID='$cus_ID'");
											$row1=mysqli_fetch_assoc($query1);
										?>
										<td><?php echo $row1['cus_name'];?>&nbsp;</td>
										<td><span class="price"><?php echo $row['total'];?>.000₫</span>&nbsp;</td> 
										<td>
											<a href="#" title="Xem đơn hàng">
												<em><?php if($row['status']==0) echo "Chưa hoàn thành"; else echo"Hoàn thành";?></em>&nbsp;
											</a>
										</td>
										<td class="last">
											<a href="ad_order_detail.php?orderID=<?php echo $row['order_ID'];?>">Xem đơn hàng</a>
										</td>
									</tr>
								<?php
								}}
							?>	
						</tbody>
					</table>
				
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
