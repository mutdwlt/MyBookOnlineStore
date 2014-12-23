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
        <title>Thêm sách mới</title>
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
				<div class="login_text"><a href="ad_account.php">Xin chào <?php echo $_SESSION["name"];?></a> | <a href="logout.php">Đăng Xuất</a></div>
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
					<li class="on"><a href="upload_book.php">Thêm sách mới</a></li>
					<li><a href="store.php">Quản lý Kho hàng</a></li>
					<li><a href="customers.php">Quản lý khách hàng</a></li>
					<li><a href="ad_order_history.php">Quản lý đơn hàng</a></li>
					
					<li><a href="#">Hướng dẫn</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Tạo sách mới</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, <?php echo $name;?>!</strong><br>
				Từ trang tạo sách mới này có thể tạo thêm sách mới vào database.</p>
				</div>
				<div class="main-5 a-input">
				<?php
					if(isset($_POST['submit']))
					{
						$title=$_POST['title'];
						$image=$_POST['image'];
						$author=$_POST['author'];
						$price=$_POST['price'];
						$number_page=$_POST['number_page'];
						$cover=$_POST['cover'];
						$description=$_POST['description'];
						$store=$_POST['store'];
						$sale_off=$_POST['sale_off'];
						$company=$_POST['company'];
						$publish_date=$_POST['publish_date'];
						$publishing_house=$_POST['publishing_house'];
						if($title&&$image&&$author&&$price&&$number_page&&$store&&isset($_POST['category']))
						{
							$sql="INSERT INTO books VALUE('','$title','$image','$author','$price','$cover','$company','$publishing_house','$publish_date','$number_page','$description','$sale_off','$store')";
							$query=mysqli_query($conn,$sql);
							$book_ID=mysqli_insert_id($conn);
							foreach($_POST['category'] as $theloai)
							{
								$sql="INSERT INTO book_cate VALUE('$book_ID','$theloai')";
								$query=mysqli_query($conn,$sql);
							}
							echo "<span style='color: #F0601C'>Bạn đã thêm sách mới thành công !</span>";
						}
						else echo"<span style='color: #F0601C'>Bạn phải nhập đầy đủ các thông tin yêu cầu</span>";
					}
				?>
					<form id="upload-new-book" action="upload_book.php" method="post">
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
								<div class = "image "> 
									<label for="image">File ảnh bìa </label> </br>
									<input type="text" name="image" title="Ảnh bìa" class="form-text" maxlength="50">
								</div>								
							</li>
							<li class="info">
								<div class="author"> 
									<label for="author-name">Tên tác giả </label> </br>
									<div class = "author-box" >
										<input type="text" name="author" title="Tên tác giả" style="width: 350px;"class="form-text" maxlength="30">
									</div>
								</div>
								<div class="input-price"> 
									<label for="price">Giá tiền</label> </br>
									<div class = "price-box" >
										<input type="text" name="price" title="Giá tiền" class="form-text" maxlength="10"> .000 &nbsp;₫
									</div>
								</div>
								<div class="pages"> 
									<label for="pages">Số trang </label> </br>
									<div class = "page-box" > 
										<input type="text" name="number_page" title="Số trang" class="form-text" maxlength="5">
									</div>
								</div>
								<div class = "cover">
									<label for="cover"></label> </br>
									<div class="left"><input type="radio" name="cover" value="0" checked>Bìa mềm</div>
									<div class="right"><input type="radio" name="cover" value="1">Bìa cứng</div>
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
										<td><input type="checkbox" name="category[]" value="12"> Sách Nuôi Dạy Con</td> 
										<td><input type="checkbox" name="category[]" value="11"> Sách Văn Hóa - Nghệ Thuật - Du Lịch</td>
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
									<textarea name="description" title="Miêu tả" maxlength="1000"></textarea>
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
									<input type="text" name="sale_off" title="Khuyến mãi" class="form-text" maxlength="10"> %
								</div>
								<div class="store"> 
									<label for="store">Tồn kho</label> </br>
									<input type="text" name="store" title="Tồn kho" class="form-text" maxlength="10"> 
								</div>
							</li>	
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
								<div class="dates"> 
									<label for="dates">Ngày phát hành <i>(Y-m-d)</i> </label> </br>
									<div class = "page-box" > 
										<input type="text" name="publish_date" title="Số trang" class="form-text" maxlength="30">
									</div>
								</div>
							</li>
							
								
						</ul>
						</fieldset>
						<input type="submit" name="submit" value="Tạo sách mới" class="signin-button">
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
