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
	$name=$data['cus_name'];
	$ID=$data['cus_ID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hỏi đáp</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/cus_account.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
		<link rel="stylesheet" type="text/css" href="css/report.css"/>
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
					<li><a href="order_history.php">Đơn hàng của tôi</a></li>
					<li class="on"><a href="report.php">Hỏi đáp</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Hỏi đáp</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, <?php echo $name;?>!</strong><br>
				Nếu bạn có bất cứ thắc mắc gì, hoặc phát hiện bất kì lỗi nào, hãy báo ngay cho chúng tôi!</p>
				</div>
				<?php
					if(isset($_POST['submit']))
					{
						if($_POST['noidung'])
						{
							$noidung=$_POST['noidung'];
							$query=mysqli_query($conn,"INSERT INTO report VALUE('','$ID','$noidung')");
							echo "<font color='red'>Đã gửi câu hỏi thành công</font>";
						}
						else "<font color='red'>Bạn phải nhập nội dung</font>";
					}
				?>
				<div class="report-problem">
					<form action="report.php" method="post">
					<div class="clearfix">
						<label for="report">
								
						</label> </br>
						<textarea  id="report" name="noidung" title="Report Problem" maxlength="200"></textarea>
					</div>
						<button type="submit" name="submit" class="signin-button">
							Gửi</button>
					</form>
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