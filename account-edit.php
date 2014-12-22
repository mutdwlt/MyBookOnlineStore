<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/global2.css">
<link rel="stylesheet" href="css/global1.css">

<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/top_header.css">
<link rel="stylesheet" href="css/cus-account.css">
<link rel="stylesheet" href="css/account-edit.css">
<script src="script.js"></script>
<title>Sửa thông tin tài khoản</title>
</head>
<body>
	<div class="top">
    	<center><a href="index.html"><img src="images/File-1414989219.png" alt="" width="1140" height="65"></a></center>
	</div>
	<div class="header">
        <div id="homepage_icon"><a href="index.html"><abbr title="Home Page"><img src="images/Homepage_icon.jpg" width="80" height="97"/></abbr></a></div>
	  	<div class="search_area">
            <form>
            	<div class="search_div"><input type="text" name="search" class="search"/></div>
            	<input name="button" type="button" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="index.html"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
        </div>
		<div class="login_area">
           	<div class="login_icon"><img src="images/login_icon.png" width="45" height="41" align="middle" /></div>
            <div class="login_text"><a href="sign_in.html">Đăng nhập</a> | <a href="registered.html">Đăng ký</a></div>
            <div class="hotline"><img src="images/phone_icon.jpg" width="15" height="15" /><span class="hotline_text">Hotline:</span> <span class="phone_number">1900-6035</span><span style="font-size:12px">(8-21h kể cả T7,CN)</span></div>
        </div>
    </div>
    <br />
	<hr>
<div class="container">
	
	<div class="clearfix">
		<div class="layout">
			<div class="col-left">
				<div class="avatar clearfix">
					<h3>Tài khoản của tôi</h3>
					<div class="all-left">
						<a href="#" title="User-name">
						<img src="images/avatar-s.png" alt="User-name" width="45" height="45">
						</a>
						<a href="#" title="đặng linh">
							<span class="u-name">đặng linh	</span>		</a>
					</div>
				</div>
				<ul>
					<li><a href="cus-account.php">Thông tin chung tài khoản</a></li>
					<li class= "on">Sửa thông tin tài khoản</li>
					<li><a href="#">Sổ địa chỉ (Address book)</a></li>
					<li><a href="order-history.php">Đơn hàng của tôi</a></li>
					<li><a href="cus-cart.php">Giỏ hàng</a></li>
					<li><a href="#">Hỏi đáp</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Chỉnh sửa thông tin tài khoản</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, user!</strong><br>
				Bạn có thể cập nhật thông tin tài khoản ở đây. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<form action="" enctype="multipart/form-data" method="post" id="form-validate">
					<fieldset class="group-select">	
						<input name="form_key" type="hidden" value="wSNZzZ1kEUrT9EDV">
							<h4 class="legend">Thông tin tài khoản</h4>
							<ul>
								<li>
									<div class="customer-name">
										<div class="input-box name-firstname">
											<label for="firstname">Họ </label>       	
											<br>
											<input type="text" id="firstname" name="firstname" value="đặng" title="Họ" class="required-entry input-text" maxlength="30">
										</div>
										<div class="input-box name-lastname">
											<label for="lastname">Tên </label>	
											<br>
											<input type="text" id="lastname" name="lastname" value="linh" title="Tên" maxlength="30" class="required-entry input-text">
										</div>
									</div>
								</li>
								<li>
									<div class="input-box">
									<label for="email">Địa chỉ email <span class="required">*</span></label><br>
									<input type="text" name="email" id="email" value="abc@email.com" title="Địa chỉ email" class="required-entry validate-email input-text">
									</div>
									<div class="customer-dob" id="">
										<label for="day">Ngày sinh<span class="not-required-text">(Không bắt buộc)</span></label>	
										<br>             
										<div class="input-box dob-day">
											<input type="text" id="day" name="day" value="" title="Ngày" class="input-text validate-custom">
											<label for="day" class="label-dob">Ngày</label>
										</div>
										<div class="input-box dob-month">
											<input type="text" id="month" name="month" value="" title="Tháng" class="input-text validate-custom">
											<label for="month" class="label-dob">Tháng</label>
										</div>

										<div class="input-box dob-year">
											<input type="text" id="year" name="year" value="" title="Năm" class="input-text validate-custom" autocomplete="off">
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
						<fieldset class="group-select" style="">
							<h4 class="legend">Thay đổi mật khẩu</h4>
							<ul>
								<li>
									<div class="input-box">
										<label for="current_password">Mật khẩu hiện tại</label><br>
										<input type="password" class="input-text" name="current_password" id="current_password">
									</div>
								</li>
								<li>
									<div class="input-box">
										<label for="password">Mật khẩu mới</label><br>
										<input type="password" class="validate-password input-text" name="password" id="password">
									</div>
									<div class="input-box">
										<label for="confirmation">Xác nhận mật khẩu mới</label><br>
										<input type="password" class="validate-cpassword input-text" name="confirmation" id="confirmation">
									</div>
								</li>
							</ul>
						</fieldset>
						<div class="button-set">
							<a href="#" class="left">« Trở lại</a>
							<p class="required">* Các trường bắt buộc</p>
							<button type="submit" class="form-button-login" id="form-button-login"><span>Lưu</span></button>
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