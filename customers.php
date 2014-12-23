<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/customers.css">
<link rel="stylesheet" href="css/upload-new-book.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/top_header.css">
<link rel="stylesheet" href="css/cus-account.css">
<script src="script.js"></script>
<title>Quản lý khách hàng</title>
</head>
<body>
	<div class="top">
		<center>
			<a href="index.html"><img src="images/File-1414989219.png" alt="" width="1140" height="65"></a>
		</center>
	</div>
	<div class="header">
		<div id="homepage_icon">
			<a href="index.html"><abbr title="Home Page"><img src="images/Homepage_icon.jpg" width="80" height="97" /></abbr></a>
		</div>
		<div class="search_area">
			<form>
				<div class="search_div">
					<input type="text" name="search" class="search" />
				</div>
				<input name="button" type="button" class="button" value="TÌM" />
			</form>
			<div class="title">
				<a href="index.html"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a>
			</div>
		</div>
		<div class="login_area">
			<div class="login_icon">
				<img src="images/login_icon.png" width="45" height="41" align="middle" />
			</div>
			<div class="login_text">
				<a href="sign_in.html">Đăng nhập</a> | <a href="registered.html">Đăng ký</a>
			</div>
			<div class="hotline">
				<img src="images/phone_icon.jpg" width="15" height="15" /><span class="hotline_text">Hotline:</span> <span class="phone_number">1900-6035</span><span style="font-size: 12px">(8-21h kể cả T7,CN)</span>
			</div>
		</div>
	</div>
	<br />
	<hr>
	<div class="container">
		<div class="clearfix">
			<div class="layout">
				<div class="col-left">
					<div class="avatar clearfix">
						<h3>Điều hành trang web</h3>
						<div class="all-left">
							<a href="#" title="User-name"> <img src="images/login_icon.png" alt="User-name" width="45" height="45">
							</a> <a href="#" title="đặng linh"> <span class="u-name">đặng linh </span>
							</a>
						</div>
					</div>
					<ul>
						<li><a href="ad-account.php">Thông tin chung tài khoản</a></li>
						<li><a href="upload-new-book.php">Thêm sách mới</a></li>
						<li><a href="store.php">Kho hàng</a></li>
						<li class="on">Quản lý khách hàng</a></li>
						<li><a href="ad-order-history.php">Quản lý đơn hàng</a></li>
						<li><a href="report.php">Báo lỗi<span style="color: red;font-size: 1.1em;"> <b>!</b></span></a></li>
					</ul>
				</div>
				<div class="col-main">
					<div class="main-1">
						<h1>Quản lý khách hàng</h1>
					</div>
					<div class="main-2">
						<p>
							<strong>Xin chào, user!</strong><br> Bạn có thể xem ngắn gọn thông tin về khách hàng. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.
						</p>
					</div>
					<div class="main-3">
						<form id="search-customer" action="" method="get" onsubmit="">
							<ul class="search ">
								<li class="head">
									<h4>Tìm kiếm</h4>
								</li>
								<li>
									<div class="search-customer">
										<div class="c-id">
											Tìm theo <span><b>CustomerId</b></span>
											<input type="text" id="customer-id" placeholder="CustomerId" title="CustomerId" style="width: 70px;" class="form-text" maxlength="7">
										</div>
										<div class="c-name">
											<b>Tên khách hàng</b>
											<input type="text" id="customer-name" placeholder="Tên khách hàng" title="Tên khách hàng" style="width: 150px;" class="form-text" maxlength="50">
										</div>
										<div class="b-search--button">
											<button type="button" type="submit" class="">Tìm khách hàng</button>
										</div>
									</div>
								</li>
							</ul>
						</form>
					</div>
					<div class="main-3">
						<div class="title-box">
							<h4 class="orange-t">Đơn hàng</h4>
							<br>
						</div>
						<table class="table table-striped table-bordered" id="my-orders-table">
							<thead>
								<tr class="first last">
									<th style="width: 14%;">Khách hàng&nbsp;#</th>
									<th style="width: 22%;">Tên khách hàng</th>
									<th style="width: 14%;">SĐT</th>
									<th style="">Địa chỉ</th>
									<th style="width: 9%;">Đơn hàng</th>
								</tr>
							</thead>
							<tbody>
								<tr class="first last odd">
									<td>
										<a href="cus_account.php" title="Xem khách hàng">838</a>&nbsp;
									</td>
									<td>
										<a href="cus_account.php" title="Xem khách hàng">ĐẶNG LINH&nbsp;</a>
									</td>
									<td>
										<span class=""><em>09643234545</em></span>&nbsp;
									</td>
									<td>Nhà số 544 tổ 454 phường AAAA quận AAAA, ĐIỆN BIÊN, Điện Biên Phủ</td>
									<td class="last">
										<a href="order_history.php">Xem</a>&nbsp;
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="button-set">
						<a href="index.php" class="left">« Trở lại trang chủ</a>
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