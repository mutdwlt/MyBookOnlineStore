<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/upload-new-book.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/top_header.css">
<link rel="stylesheet" href="css/cus-account.css">

<script src="script.js"></script>
<title>Tạo sách mới</title>
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
					<h3>Bảng điều khiển</h3>
					<div class="all-left">
						<a href="#" title="User-name">
						<img src="images/login_icon.png" alt="User-name" width="45" height="45">
						</a>
						<a href="#" title="đặng linh">
							<span class="u-name">đặng linh	</span>		</a>
					</div>
				</div>
				<ul>
					<li><a href="ad-account.php">Thông tin chung tài khoản</a></li>
					<li class="on">Thêm sách mới</a></li>
					<li><a href="store.php">Kho hàng</a></li>
					<li><a href="sales-off.php">Quản lý khuyến mại</a></li>
					<li><a href="customers.php">Quản lý khách hàng</a></li>
					<li><a href="ad-order-history.php">Quản lý đơn hàng</a></li>
					
					<li><a href="#">Hướng dẫn</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Tạo sách mới</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, user!</strong><br>
				Từ trang tạo sách mới này có thể tạo thêm sách mới vào database. 
				Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<div class="main-5 a-input">
					<form id="upload-new-book" method="post" onsubmit="">
						<fieldset id="field-box">
						<ul>
							<li>
						<h4 class="orange">Thông tin sách</h4>
						</li>
							<li class="info">
								<div class = "book"> 
									<label for="book name">Tên sách </label> </br>
									<input type="text" id="book-name" required value="" title="Tên sách" style="width: 350px;" class="form-text" maxlength="50" >
								</div>
								<div class = "image "> 
									<label for="image">Ảnh bìa </label> </br>
									<input type="text" id="image" required value="" title="Ảnh bìa" class="form-text" maxlength="50">
								</div>
								<a href="#" target="_blank" class="b-cart__item-img">
									<img src="images/5-centimet-tren-giay.jpg" alt="5 Centimet Trên Giây" title="5 Centimet Trên Giây">
								</a>
								
							</li>
							<li class="info">
								<div class="author"> 
									<label for="author-name">Tên tác giả </label> </br>
									<div class = "author-box" >
										<input type="text" id="author-name" name="ten" value="" title="Tên tác giả" style="width: 350px;"class="form-text" maxlength="30">
									</div>
								</div>
								<div class="input-price"> 
									<label for="price">Giá tiền</label> </br>
									<div class = "price-box" >
										<input type="text" id="price" name="price" value="" title="Giá tiền" class="form-text" maxlength="10"> .000 &nbsp;₫
									</div>
								</div>
								<div class="pages"> 
									<label for="pages">Số trang </label> </br>
									<div class = "page-box" > 
										<input type="text" id="pages-number" name="pages" value="" title="Số trang" class="form-text" maxlength="5">
									</div>
								</div>
								<div class = "cover">
									<label for="cover"></label> </br>
									<div class="left"><input type="radio" name="cover"  value="mềm"> Bìa mềm </div>
									<div class="right"><input type="radio" name="cover" value="cứng"> Bìa cứng </div>
								</div>
							</li>
							<li class="info">
								<div class="category"> 
									<label for="category">
										<div class="inner-head">
											<h5>Thể loại</h5>
										</div>
									</label> </br>
									<table style="width:100%">
										<tbody>
									  <tr>
										<td><input type="radio" name="category" value="Anh"> Sách Tiếng Anh</td>
										<td><input type="radio" name="category" value="Viet"> Sách Kỹ Năng Sống - Nghệ Thuật Sống</td> 
										<td><input type="radio" name="category" value="Nhat"> Sách Chuyên Ngành</td>
									  </tr>
									  <tr>
										<td><input type="radio" name="category" value="kt"> Sách Kinh Tế</td>
										<td><input type="radio" name="category" value="tapchi"> Sách Giáo Khoa - Tham Khảo</td> 
										<td><input type="radio" name="category" value="Tre-em"> Sách Truyện Thiếu Nhi</td>
									  </tr>
									  <tr>
										<td><input type="radio" name="category" value="ki-thuat"> Sách Học Ngoại Ngữ - Từ Điển</td>
										<td><input type="radio" name="category" value="van"> Sách  Văn Học - Tiểu Thuyết</td> 
										<td><input type="radio" name="category" value="nn"> Sách Cho Tuổi Mới Lớn</td>
									  </tr>
									  <tr>
										<td><input type="radio" name="category" value="ki-thuat"> Sách Thường Thức - Đời Sống</td>
										<td><input type="radio" name="category" value="van"> Sách  Văn Học - Tiểu Thuyết</td> 
										<td><input type="radio" name="category" value="tapchi"> Sách Văn Hóa - Nghệ Thuật - Du Lịch</td>
									  </tr>
									  <tbody>
									</table>
								</div>
							</li>
							<li class="info">
								<div class="description"> 
									<label for="sales-off">
											Miêu tả
									</label> </br>
									<textarea  id="sales-off" name="sales-off" value="" title="Miêu tả" maxlength="200"></textarea>
								</div>
							</li>
						</ul>
						</fieldset>
						<fieldset id="field-box">
						<ul>
							<li>
								<h4 class="orange">Thông tin thêm</h4>
							</li>
							<li class="info">
								<div class="sales-off"> 
									<label for="sales-off">Khuyến mãi <i> (nếu có)</i></label> </br>
									<input type="text" id="sales-off" name="sales-off" value="" title="Khuyến mãi" class="form-text" maxlength="10"> %
								</div>
								<div class="store"> 
									<label for="store">Tồn kho</label> </br>
									<input type="text" id="store" name="store" value="" title="Tồn kho" class="form-text" maxlength="10"> 
								</div>
							</li>	
							<li class="info">
								<div class="author"> 
									<label for="company">Công ty phát hành</label> </br>
									<div class = "author-box" >
										<input type="text" id="company" name="company" value="" title="Công ty phát hành" class="form-text" maxlength="30">
									</div>
								</div>
								<div class="author"> 
									<label for="publishing_house">Nhà xuất bản</label> </br>
									<div class = "author-box" >
										<input type="text" id="publishing_house" name="publishing_house" value="" title="Nhà xuất bản" class="form-text" maxlength="10"> 
									</div>
								</div>
								<div class="dates"> 
									<label for="dates">Ngày phát hành <i>(dd/mm/yy)</i> </label> </br>
									<div class = "page-box" > 
										<input type="text" id="publish_dates" name="pages" value="" title="Số trang" class="form-text" maxlength="5">
									</div>
								</div>
							</li>
							
								
							</ul>
						</fieldset>
						<button type="button" class="signin-button" onclick="window.location='#';">
						Tạo sách mới</button>
					</form>				
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