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
<link rel="stylesheet" href="css/store.css">

<script src="script.js"></script>
<title>Kho hàng</title>
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
					<h3>Điều hành trang web</h3>
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
					<li><a href="upload-new-book.php">Thêm sách mới</a></li>
					<li class="on">Kho hàng</li>
					<li><a href="sales-off.php">Quản lý khuyến mại</a></li>
					<li><a href="customers.php">Quản lý khách hàng</a></li>
					<li><a href="ad-order-history.php">Quản lý đơn hàng</a></li>
					
					<li><a href="#">Hướng dẫn</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Kho hàng</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, user!</strong><br>
				Từ trang kho hàng này có thể quản lý và sửa chữa thông tin các cuốn sách trên website . 
				Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<div class="main-3">
					<form id ="search-book" action="" method= "get" onsubmit="">
						<ul class="search">
							<li class="head">
								<h4>Tìm kiếm</h4>
							</li>
							<li >
								<div class="search-book">
									<div class="b-id">
										Tìm theo <span><b>BookId</b></span>
										<input type="text" id="book-id" placeholder="BookID" title="Id" style="width: 80px;" class="form-text" maxlength="7" >
										
									</div>
									<div class="b-name">
										hoặc theo <b>Tên sách</b>
										<input type="text" id="b-name" placeholder="Tên sách" title="Tên sách" style="width: 150px;" class="form-text" maxlength="50" >
									</div>
									<div class="b-search--button">
										<button type="button" type="submit" class=""> Tìm </button>
									</div>
								</div>
							</li>
							<li>
								<label for="book-search" class="label-dob">( Ấn * để tìm tất cả)</label>
							</li>
						</ul>
					</form>
				</div>
				
				<div class="books-table">
					<table class="table table-striped table-bordered" id="my-books-table">
						<thead>
							<tr class="first last">
								<th style="width:10%;">Sách #</th>
								<th>Tên sách</th>
								<th style="width:14%;">Khuyến mãi&nbsp;</th>
								<th style="width:14%;">Giá tiền</th>
								<th style="width:12%;">Tồn kho</th>
								<th style="width:7%;">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
                            <tr class="first last odd">
								<td><a href="book_info.php" title="Xem chi tiết sách">10019</a></td>
								<td><a href="book_info.php" title="Xem chi tiết sách"><span class="b-name">5 Centimet Trên Giây</span> </a></td>
								<td><span class="b-sales-off"><em>15</em>&nbsp;%</span></td>
								<td><span class="price">50.000,00&nbsp;₫</span>&nbsp;</td> 
								<td>
									<em>10000</em>&nbsp;quyển&nbsp;
								</td>
								<td class="last">
									<a href="edit-book.php">Sửa</a>
								</td>
							</tr>
							<tr class="first last odd">
								<td><a href="book_info.php" title="Xem chi tiết sách">10019</a></td>
								<td><a href="book_info.php" title="Xem chi tiết sách"><span class="b-name">5 Centimet Trên Giây</span> </a></td>
								<td><span class="b-sales-off"><em>15</em>&nbsp;%</span></td>
								<td><span class="price">50.000,00&nbsp;₫</span>&nbsp;</td> 
								<td>
									<em>10000</em>&nbsp;quyển&nbsp;
								</td>
								<td class="last">
									<a href="upload-new-book.php">Sửa</a>
								</td>
							</tr>
						</tbody>
					</table>
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