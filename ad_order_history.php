<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/ad_order_history.css">
<link rel="stylesheet" href="css/upload-new-book.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/top_header.css">
<link rel="stylesheet" href="css/cus-account.css">
<script src="script.js"></script>
<title>Quản lý đơn hàng</title>
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
						<li><a href="sales-off.php">Quản lý khuyến mại</a></li>
						<li><a href="customers.php">Quản lý khách hàng</a></li>
						<li class="on">Quản lý đơn hàng</li>
						<li><a href="#">Hướng dẫn</a></li>
					</ul>
				</div>
				<div class="col-main">
					<div class="main-1">
						<h1>Quản lý đơn hàng</h1>
					</div>
					<div class="main-2">
						<p>
							<strong>Xin chào, user!</strong><br> Bạn có thể xem ngắn gọn về các giao dịch đã thực hiện. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.
						</p>
					</div>
					<div class="main-3">
						<form id="search-book" action="" method="get" onsubmit="">
							<ul class="search ">
								<li class="head">
									<h4>Tìm kiếm</h4>
								</li>
								<li>
									<div class="search-order">
										<div class="b-id">
											Tìm theo <span><b>OrderId</b></span>
											<input type="text" id="order-id" placeholder="OrderId" title="OrderId" style="width: 80px;" class="form-text" maxlength="7">
										</div>
										<div class="b-name">
											<b>Mã khách hàng</b>
											<input type="text" id="order-name" placeholder="Mã khách hàng" title="Mã khách hàng" style="width: 150px;" class="form-text" maxlength="50">
										</div>
									</div>
								</li>
								<li class="search-order">
									<div class="date">
										hoặc <span><b>Ngày tháng </b></span>
										<input type="text" id="order-id" placeholder="Ngày tháng" title="Id" style="width: 100px;" class="form-text" maxlength="7">
									</div>
									<div class="or-stt" style="float: left;">
										<b>Trạng thái đơn hàng</b>
									</div>
									<div class="or-status">
										<div class="left">
											<input type="radio" name="cover" value="1">
											Hoàn thành
										</div>
										<div class="right">
											<input type="radio" name="cover" value="0">
											Chưa hoàn thành
										</div>
									</div>
									<div class="b-search--button">
										<button type="button" type="submit" class="">Tìm đơn hàng</button>
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
									<th>Đơn hàng #</th>
									<th>Ngày mua</th>
									<th>Gửi đến</th>
									<th>Tổng tiền</th>
									<th>Trạng thái đơn hàng</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr class="first last odd">
									<td>
										<a href="order_details.php" title="Xem đơn hàng">100198318</a>
									</td>
									<td>05/02/2013</td>
									<td>ĐẶNG LINH&nbsp;</td>
									<td>
										<span class="price">182.000,00&nbsp;₫</span>&nbsp;
									</td>
									<td>
										<a href="order_details.php" title="Xem đơn hàng"> <em>Hoàn thành</em>&nbsp;
										</a>
									</td>
									<td class="last">
										<a href="order_details.php">Xem đơn hàng</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="button-set">
						<a href="" class="left">« Trở lại</a>
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
