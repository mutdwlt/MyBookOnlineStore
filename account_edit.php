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
	<title>Chỉnh sửa thông tin tài khoản</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/global2.css">
	<link rel="stylesheet" href="css/global1.css">

	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/top_header.css">
	<link rel="stylesheet" href="css/cus_account.css">
	<link rel="stylesheet" href="css/account_edit.css">
	<script src="script.js"></script>
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
				<div class="login_text"><a href="cus_account.php">Xin chào <?php echo $_SESSION["name"];?></a> | <a href="logout.php">Đăng Xuất</a></div>
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
					<li class="on"><a href="account_edit.php">Sửa thông tin tài khoản</a></li>
					<li><a href="cus_cart.php">Giỏ hàng</a></li>
					<li><a href="order_history.php">Đơn hàng của tôi</a></li>
					<li><a href="#">Hỏi đáp</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Chỉnh sửa thông tin tài khoản</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào,<?php echo $name;?>!</strong><br>
				Bạn có thể cập nhật thông tin tài khoản ở đây. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<?php
					if(isset($_POST['submit']))
					{
						$password1 =$_POST['password'];
						$newpassword =$_POST["newpassword"];
						$renewpassword =$_POST["renewpassword"];
						$name1=$_POST["name"];
						$email1=$_POST["email"];
						$address1=$_POST["address"];
						$phone1=$_POST["phone"];
						$year1=$_POST["year"];
						$month1=$_POST["month"];
						$day1=$_POST["day"];
						if($name1&&$email1&&$address1&&$phone1&&$day1&&$month1&&$year1)
						{
							$birth1=date("$year1-$month1-$day1");
							$sqlinfo="UPDATE customers SET cus_name='$name1',email='$email1',address='$address1',phone='$phone1',birth='$birth1' WHERE cus_ID='$ID'";							
							$query=mysqli_query($conn,$sqlinfo);
							$pass_success=0;
							if($password1)
							{
								if($password1!=$password) echo "Mật khẩu nhập không chính xác";
								else
								{
									if($newpassword&&$renewpassword)
									{
										if($newpassword==$renewpassword)
										{
											$sqlpass="UPDATE customers SET password='$newpassword' WHERE cus_ID='$ID'";
											$query=mysqli_query($conn,$sqlpass);
											$pass_success=1;
										}
										else echo "Mật khẩu mới và xác nhận mật khẩu không khớp ";
									}
									else
									{
										echo "Bạn phải nhập đầy đủ password mới";
									}
								}
							
							}
							if($pass_success==0 && !$password1) header('location:edit_success.php');
							if($pass_success==1) header('location:edit_success.php');
							if($pass_success==0 && $password1) echo "<br>Cập nhật mật khẩu không thành công";
						}
						else
							{
								echo "Bạn không được để trống các trường";
							}						
					}
				?>
				<form action="account_edit.php" enctype="multipart/form-data" method="POST" id="form-validate">
					<fieldset class="group-select">	
						<input name="form_key" type="hidden" value="wSNZzZ1kEUrT9EDV">
							<h4 class="legend">Thông tin tài khoản</h4>
							<ul>
								<li>
									<div class="customer-name">
										<div class="input-box name-firstname">
											<label for="firstname">Tên </label>       	
											<br>
											<input type="text" id="firstname" name="name" value="<?php echo $name;?>" title="Họ" class="required-entry input-text" maxlength="30">
										</div>
									</div>
								</li>
								<li>
									<div class="customer-name">
										<div class="input-box name-firstname">
											<label for="firstname">Địa chỉ</label>       	
											<br>
											<input type="text" id="firstname" name="address" value="<?php echo $address;?>" title="Họ" class="required-entry input-text" maxlength="30">
										</div>
										<div class="input-box name-lastname">
											<label for="lastname">Số điện thoại </label>	
											<br>
											<input type="text" id="lastname" name="phone" value="<?php echo $phone;?>" title="Tên" maxlength="30" class="required-entry input-text">
										</div>
									</div>
								</li>
								<li>
									<div class="input-box">
									<label for="email">Địa chỉ email</label><br>
									<input type="text" name="email" id="email" value="<?php echo $email;?>" title="Địa chỉ email" class="required-entry validate-email input-text">
									</div>
									<div class="customer-dob" id="">
										<label for="day">Ngày sinh</label>	
										<br>
										<?php
											$ymd=explode("-",$birth);
										?>
										<div class="input-box dob-day">
											<input type="text" id="day" name="day" value="<?php echo $ymd[2];?>" title="Ngày" class="input-text validate-custom">
											<label for="day" class="label-dob">Ngày</label>
										</div>
										<div class="input-box dob-month">
											<input type="text" id="month" name="month" value="<?php echo $ymd[1];?>" title="Tháng" class="input-text validate-custom">
											<label for="month" class="label-dob">Tháng</label>
										</div>

										<div class="input-box dob-year">
											<input type="text" id="year" name="year" value="<?php echo $ymd[0];?>" title="Năm" class="input-text validate-custom" autocomplete="off">
											<label for="year" class="label-dob">Năm</label>
										</div>

										<div class="dob-full" style="display:none;">
											<input type="hidden" id="dob" name="dob">
										</div>

										<div style="opacity: 0.999999; display: none;" class="validation-advice"></div>
									   
									</div>
								</li>
									
							</ul>
					</fieldset>
					<fieldset class="group-select">
							<h4 class="legend">Thay đổi mật khẩu</h4>
							<ul>
								<li>
									<div class="input-box">
										<label for="current_password">Mật khẩu hiện tại</label><br>
										<input type="password" class="input-text" name="password" id="current_password">
									</div>
								</li>
								<li>
									<div class="input-box">
										<label for="password">Mật khẩu mới</label><br>
										<input type="password" class="validate-password input-text" name="newpassword" id="password">
									</div>
									<div class="input-box">
										<label for="confirmation">Xác nhận mật khẩu mới</label><br>
										<input type="password" class="validate-cpassword input-text" name="renewpassword" id="confirmation">
									</div>
								</li>
							</ul>
					</fieldset>
						<div class="button-set">
							<button type="submit" name="submit" class="form-button-login" id="form-button-login"><span>Lưu</span></button>
						</div>
				</form>
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
