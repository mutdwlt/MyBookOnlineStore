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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Quản lý khách hàng</title>
		<link rel="stylesheet" href="css/customers.css">
		<link rel="stylesheet" href="css/upload_book.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/top_header.css">
		<link rel="stylesheet" href="css/cus_account.css">
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
                <div class="title"><a href="index.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
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
						<h1>Quản lý khách hàng</h1>
					</div>
					<div class="main-2">
						<p>
							<strong>Xin chào, admin!</strong><br> Bạn có thể xem ngắn gọn thông tin về khách hàng. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.
						</p>
					</div>
					<div class="main-3">
						<form id="search-customer" action="customers.php" method="post">
							<ul class="search ">
								<li class="head">
									<h4>Tìm kiếm</h4>
								</li>
								<li>
									<div class="search-customer">
										<div class="c-id">
											<span><b>CustomerId</b></span>
											<input type="text" id="customer-id" name="cus_ID" placeholder="CustomerId" title="CustomerId" style="width: 70px;" class="form-text" maxlength="7">
										</div>
										<div class="c-name">
											<b>Tên khách hàng</b>
											<input type="text" id="customer-name" name="cus_name" placeholder="Tên khách hàng" title="Tên khách hàng" style="width: 150px;" class="form-text" maxlength="50">
										</div>
										<div class="b-search--button">
											<button name="tim" type="submit">Tìm khách hàng</button>
										</div>
									</div>
								</li>
							</ul>
						</form>
					</div>
					<?php
					if(isset($_POST['tim']))
						{
							if(isset($_POST['cus_ID']))
								{
									if($_POST['cus_ID'])
									{
									$cus_ID=$_POST['cus_ID'];
									$strid="cus_ID='$cus_ID'";
									}
									else $strid="1";
								}
							if(isset($_POST['cus_name']))
								{
									if($_POST['cus_name'])
									{
									$cus_name=$_POST['cus_name'];
									$strname="AND cus_name LIKE '%$cus_name%'";
									}
									else $strname="AND 1";
								}							
						}
						if(isset($_POST['tim']))
							{
								$sql="SELECT * FROM customers WHERE $strid $strname";
							}
						else $sql="SELECT * FROM customers";
					?>
							<div class="main-3">
								<div class="title-box">
									<h4 class="orange-t">DANH SÁCH KHÁCH HÀNG</h4>
									<br>
								</div>
								<table class="table table-striped table-bordered" id="my-orders-table">
									<thead>
										<tr class="first last">
											<th style="width: 5%;">ID&nbsp;#</th>
											<th style="width: 20%;">Tên khách hàng</th>
											<th style="width: 14%;">SĐT</th>
											<th style="width: 14%;">email</th>
											<th style="">Địa chỉ</th>
											<th style="width: 10%;">Ngày sinh</th>
											<th style="width: 14%;">Tổng đơn hàng</th>
										</tr>
									</thead>
									<?php
									$query=mysqli_query($conn,$sql);
									if(mysqli_num_rows($query)==0) echo "<font color='red'>Không tìm thấy dữ liệu</font>";
									while($row=mysqli_fetch_assoc($query))
									{
									$cus_ID=$row['cus_ID'];
									$queryx=mysqli_query($conn,"SELECT count(cus_ID) as count FROM orders WHERE cus_ID='$cus_ID'");
									$rowx=mysqli_fetch_assoc($queryx);	
									?>
									<tbody>
										<tr class="first last odd">
											<td>
												<a href="#" title="Xem khách hàng"><?php echo $row['cus_ID'];?></a>&nbsp;
											</td>
											<td>
												<a href="#" title="Xem khách hàng"><?php echo $row['cus_name'];?></a>
											</td>
											<td>
												<span class=""><em><?php echo $row['phone'];?></em></span>&nbsp;
											</td>
											<td><?php echo $row['email'];?></td>
											<td><?php echo $row['address'];?></td>
											<td><?php echo $row['birth'];?></td>
											<td class="last">
												<?php echo $rowx['count']; ?>
												<a href="ad_cus_orders.php?cus_ID=<?php echo $cus_ID;?>">-Xem</a>&nbsp;
											</td>
										</tr>
									</tbody>
									<?php
									}
									?>
								</table>
							</div>						
					<div class="button-set">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="leter_icon">
			<img src="images/Homepage/icon_sign.png" width="25" height="25">
		</div>
		<span id="footer_title">Đăng Kí Nhận Bản Tin Hedspi - <span style="font-weight: normal">Nhiều Tiện Lợi và Ưu Đãi đang chờ bạn!</span></span>
		<div class="hand_icon">
			<img src="images/Homepage/hand-right-128.png" width="40" height="40">
		</div>
		<form>
			<div class="input">
				<input type="text" name="input" class="input_class">
			</div>
			<input name="button" type="button" class="button_class" value="Đăng Ký - Nhận Tiện Ích">
		</form>
		<div class="clr"></div>
		<p>
			© Đại Học Bách Khoa Hà Nội<br> <br>Lớp Thực Hành Cơ Sở Dữ Liệu - Việt Nhật B- K57<br>Thành viên: Ngô Văn Thịnh, Trần Bảo Huy, Đặng Mỹ Linh, Đồng Xuân Mạnh
		</p>
	</div>
</body>
<html>
