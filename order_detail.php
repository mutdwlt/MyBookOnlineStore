<?php
	session_start();
	if(!$_SESSION['name']) header('location:login.php');
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
	$ID=$data['cus_ID'];
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
        <title>Chi tiết đơn hàng</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/cus_account.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
		<link rel="stylesheet" type="text/css" href="css/order_detail.css"/>
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
					<h3>Tài khoản của tôi</h3>
					<div class="all-left">
						<a href="cus_account.php" title="User-name">
						<img src="images/login_icon.png" alt="User-name" width="45" height="45">
						</a>
						<a href="cus_account.php">
							<span class="u-name"><?php echo $name;?></span></a>
					</div>
				</div>
				<ul>
					<li><a href="cus_account.php">Thông tin chung tài khoản</a></li>
					<li><a href="account_edit.php">Sửa thông tin tài khoản</a></li>
					<li><a href="cus_cart.php">Giỏ hàng</a></li>
					<li class="on"><a href="order_history.php">Đơn hàng của tôi</a></li>

				</ul>
				</div>
				<div id="main" class="col-main col-md-9 b-content" role="main">
				<?php
					$orderID=$_GET['orderID'];
					$query=mysqli_query($conn,"SELECT * FROM orderlines WHERE order_ID='$orderID'");
					$query1=mysqli_query($conn,"SELECT * FROM orders WHERE order_ID='$orderID'");
					$row1=mysqli_fetch_assoc($query1);
					$cusID=$row1['cus_ID'];
					$query2=mysqli_query($conn,"SELECT * FROM customers WHERE cus_ID='$cusID'");
					$row2=mysqli_fetch_assoc($query2);
				?>
					<div class="b-order-info">
						<div class="b-my-account__head clearfix">
							<h1 class="b-my-account__title">Đơn hàng #<?php echo $orderID."-"; if($row1['status']==0) echo"Chưa hoàn thành"; else echo"Hoàn thành"; ?></h1>
						</div>
						<p>Ngày đặt hàng: <?php echo $row1['date'];?></p>
						<br>
						<div class="b-order-view">
							<h4>Sản phẩm mua</h4>
							<table class="table table-bordered " id="my-orders-table">
								<thead>
									<tr class="first last">
										<th>Tên sản phẩm</th>
										<th style="width: 9%;">Sách #</th>
										<th style="width: 10%;">Giá</th>
										<th style="width: 17%;">Số lượng</th>
										<th style="width: 10%;">Giảm giá</th>
										<th style="width: 10%;">Tổng cộng</th>
									</tr>
								</thead>
								<tfoot>
									<tr class="last">
										<td colspan="5" class="a-right">Tổng cộng</td>
										<td class="last a-right">
											<span class="price"><?php echo $row1['total'];?>.000₫</span>
										</td>
									</tr>
								</tfoot>
								<?php
									while($row=mysqli_fetch_array($query))
									{
										$book_ID=$row['book_ID'];
										$query4=mysqli_query($conn,"SELECT * FROM books WHERE book_ID='$book_ID'");
										$row4=mysqli_fetch_assoc($query4);
									?>
										<tbody class="odd">
											<tr id="" class="first">
												<td>
													<h5 class="title">
														<a href="book_info.php?book_ID=<?php echo $book_ID;?>" target="_blank"><?php echo $row4['title'];?></a>
													</h5>
												</td>
												<td><?php echo $book_ID;?></td>
												<td>
													<span class="price-excl-tax">
														<div class="cart-price">
															<span class="price"><?php echo $row4['price'];?>.000₫</span>
														</div>
													</span> <br>
												</td>
												<td>
													<span class="nobr"> Được đặt hàng:&nbsp;<strong><?php echo $row['quantity'];?></strong><br>
													</span>
												</td>
												<td>
													<span class="price-excl-tax">
														<div class="cart-price">
															<span class="price"><?php $giaban=(int)($row4['price']*(100-$row4['sale_off'])/100); echo ($row4['price']-$giaban)*$row['quantity'];?>.000₫</span>
														</div>
													</span>
												</td>
												<td class="last">
													<span class="price-excl-tax">
														<div class="cart-price">
															<span class="price"><?php echo $row['quantity']*$giaban;?>.000₫</span>
														</div>
													</span> <br>
												</td>
											</tr>
										</tbody>
										<?php
									}
								?>								
							</table>
						</div>
						<div class="col2-set generic-box">
							<div class="col-1">
								<h4>Địa chỉ người nhận</h4>
								<address>
									<span class="c-name"><?php echo $row2['cus_name'];?></span><br> 
									<?php echo $row2['address'];?><br> <?php echo $row2['phone'];?> <br>
								</address>
							</div>
							<div class="col-2">
								<h4>Thông tin thanh toán</h4>
								<address>
									<?php echo $row2['cus_name']."<br>".$row2['email']."<br>".$row2['phone'];?><br>
								</address>
							</div>
						</div>
					</div>
					<div class="button-set">
						<a href="order_history.php" class="left">« Quay về mục lịch sử đơn hàng</a>
						<input type="hidden" value="384" name="order_form_key" id="order_form_key">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="leter_icon">
			<img src="images/Homepage/icon_sign.png" width="25" height="25">
		</div>
		<span id="footer_title">Đăng Kí Nhận Bản Tin Hedspi - <span
			style="font-weight: normal"
		>Nhiều Tiện Lợi và Ưu Đãi đang chờ bạn!</span></span>
		<div class="hand_icon">
			<img src="images/Homepage/hand-right-128.png" width="40" height="40">
		</div>
		<form>
			<div class="input">
				<input type="text" name="input" class="input_class">
			</div>
			<input name="button" type="button" class="button_class"
				value="Đăng Ký - Nhận Tiện Ích"
			>
		</form>
		<div class="clr"></div>
		<p>
			© Đại Học Bách Khoa Hà Nội<br> <br>Lớp Thực Hành Cơ Sở Dữ Liệu - Việt
			Nhật B- K57<br>Thành viên: Ngô Văn Thịnh, Trần Bảo Huy, Đặng Mỹ Linh,
			Đồng Xuân Mạnh
		</p>
	</div>
</body>