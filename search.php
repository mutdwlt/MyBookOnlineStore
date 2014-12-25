<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tìm kiếm nâng cao</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/content.css"/>
        <link rel="stylesheet" type="text/css" href="css/left_content.css"/>
        <link rel="stylesheet" type="text/css" href="css/middle_content.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
		<link rel="stylesheet" href="css/upload_book.css">
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
            	<div class="search_div"><input type="text" name="search" placeholder="Tìm theo tên sách" class="search"/></div>
            	<input name="submit" type="submit" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="search.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
        </div>
		<div class="login_area">
           	<div class="login_icon"><img src="images/<?php if(isset($_SESSION['role'])){if($_SESSION['role']==1) echo "admin_icon.png"; else echo"login_icon.png";}else echo"login_icon.png";?>" width="45" height="41" align="middle" /></div>
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
    <div class="main">
    	<!----- START CONTENT --------->
        	<div class="start">
            	<span><a href="index.php">Trang chủ</a></span> / <strong>Mua sách trực tuyến Giảm Giá Hơn 20% - Nhà Sách HEDSPI</strong>
            </div>
            <!----- START left_content ------->
            <div class="left_content">
            	<div class="title_box1">DANH MỤC SÁCH</div>
                <div class="left_menu1">
                    <ul class="left_menu_content1">
						<li><a href="category.php?cate_ID=1">Sách Tiếng Anh</a></li>
                        <li><a href="category.php?cate_ID=2">Sách Văn Học - Tiểu Thuyết</a></li>
                        <li><a href="category.php?cate_ID=3">Sách Kinh Tế</a></li>
                        <li><a href="category.php?cate_ID=4">Sách Chuyên Ngành</a></li>
						<li><a href="category.php?cate_ID=5">Sách Kỹ Năng Sống - Nghệ Thuật Sống</a></li>
                        <li><a href="category.php?cate_ID=6">Sách Giáo Khoa - Tham Khảo</a></li>
                        <li><a href="category.php?cate_ID=7">Sách Học Ngoại Ngữ - Từ Điển</a></li>
                        <li><a href="category.php?cate_ID=8">Sách Cho Tuổi Mới Lớn</a></li>
                        <li><a href="category.php?cate_ID=9">Sách Truyện Thiếu Nhi</a></li>
						<li><a href="category.php?cate_ID=10">Sách Thường Thức - Đời Sống</a></li>
						<li><a href="category.php?cate_ID=11">Truyện Tranh, Manga, Comic</a></li>
						<li><a href="category.php?cate_ID=12">Sách Văn Hóa - Nghệ Thuật - Du Lịch</a></li>
                        <li style="border: none;"><a href="category.php?cate_ID=13">Sách Nuôi Dạy Con</a></li>
                    </ul>
                </div>
            </div>
            <!------- END left_content ------->
            
            <!------- START Middle_content ------->
        <div class="middle_content">
		<div class="col-main">
				<div class="main-1">
				<h1>Tìm kiếm nâng cao</h1>
				</div>
				<div class="main-2">
				<p>Từ trang này bạn có thể tìm kiếm sách theo tùy chọn</p>
				</div>
				<div class="main-5 a-input">
					<form id="upload-new-book" action="search_result.php" method="post">
						<fieldset id="field-box">
						<ul>
						<li>
						<h4 class="orange">Thông tin sách</h4>
						</li>
							<li class="info">
								<div class = "book"> 
									<label for="book name">Tên sách </label> </br>
									<input type="text" name="title"  title="Tên sách" style="width: 350px;" class="form-text" maxlength="50" >
								</div>
								<div class="author"> 
									<label for="author-name">Tên tác giả </label> </br>
									<div class = "author-box" >
										<input type="text" name="author" title="Tên tác giả" style="width: 350px;"class="form-text" maxlength="30">
									</div>
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
										<td><input type="checkbox" name="category[]" value="1"> Sách Tiếng Anh</td>
										<td><input type="checkbox" name="category[]" value="5"> Sách Kỹ Năng Sống - Nghệ Thuật Sống</td> 
										<td><input type="checkbox" name="category[]" value="4"> Sách Chuyên Ngành</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="3"> Sách Kinh Tế</td>
										<td><input type="checkbox" name="category[]" value="6"> Sách Giáo Khoa - Tham Khảo</td> 
										<td><input type="checkbox" name="category[]" value="9"> Sách Truyện Thiếu Nhi</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="7"> Sách Học Ngoại Ngữ - Từ Điển</td>
										<td><input type="checkbox" name="category[]" value="2"> Sách  Văn Học - Tiểu Thuyết</td> 
										<td><input type="checkbox" name="category[]" value="8"> Sách Cho Tuổi Mới Lớn</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="10"> Sách Thường Thức - Đời Sống</td>
										<td><input type="checkbox" name="category[]" value="13"> Sách Nuôi Dạy Con</td> 
										<td><input type="checkbox" name="category[]" value="12"> Sách Văn Hóa - Nghệ Thuật - Du Lịch</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="11"> Truyện Tranh - Manga - Comic</td>
									  </tr>
									  <tbody>
									</table>
								</div>
							</li>
						</ul>
						</fieldset>
						<fieldset id="field-box">
						<ul>	
							<li class="info">
								<div class="author"> 
									<label for="company">Công ty phát hành</label> </br>
									<div class = "author-box" >
										<input type="text" name="company" title="Công ty phát hành" class="form-text" maxlength="30">
									</div>
								</div>
								<div class="author"> 
									<label for="publishing_house">Nhà xuất bản</label> </br>
									<div class = "author-box" >
										<input type="text"  name="publishing_house" title="Nhà xuất bản" class="form-text" maxlength="30"> 
									</div>
								</div>
							</li>							
						</ul>
						</fieldset>
						<input type="submit" name="timnangcao" value="Tìm" class="signin-button">
					</form>				
				</div>
			</div>

            <!------- END Middle_content ------->
        </div>
	</div>
        <div class="clr"></div>
        <!--------------- FOOTER ------------------>
		<div class="footer">
       		<div class="leter_icon"><img src="images/Homepage/icon_sign.png" width="25" height="25" /></div>
			<span id="footer_title">Đăng Kí Nhận Bản Tin Hedspi - <span style="font-weight:normal">Nhiều Tiện Lợi và Ưu Đãi đang chờ bạn!</span></span>
        	<div class="hand_icon"><img src="images/Homepage/hand-right-128.png" width="40" height="40" /></div>
        	<form>
            	<div class="input"><input type="text" name="input" class="input_class"/></div>
            	<input name="button" type="button" class="button_class" value="Đăng Ký - Nhận Tiện Ích" />
            </form>
             <div class="clr"></div>
            <p>© Đại Học Bách Khoa Hà Nội<br /><br />Lớp Thực Hành Cơ Sở Dữ Liệu - Việt Nhật B- K57<br />Thành viên: Ngô Văn Thịnh, Trần Bảo Huy, Đặng Mỹ Linh, Đồng Xuân Mạnh</p>
        </div>
</body>
</html>
