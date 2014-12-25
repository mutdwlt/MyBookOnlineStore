<?php
	session_start();
	if(!$_SESSION['name']||($_SESSION['role']!=1)) header('location:login.php');
	if(!$_GET['book_ID']) header('location:store.php');
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Chỉnh sửa thông tin sách</title>
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
					<li><a href="upload_book.php">Thêm sách mới</a></li>
					<li class="on"><a href="store.php">Quản lý Kho hàng</a></li>
					<li><a href="customers.php">Quản lý khách hàng</a></li>
					<li><a href="ad_order_history.php">Quản lý đơn hàng</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1>Chỉnh sửa thông tin sách của bạn</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, admin <?php echo $name;?>!</strong></p>
				</div>
				<div class="main-5 a-input">
				<?php
				$book_ID=$_GET['book_ID'];
					//Kiểm tra chỉnh sửa
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
						if($title&&$image&&$author&&$price&&$number_page&&isset($_POST['category']))
						{
							$sql="UPDATE books SET title='$title',image='$image',author='$author',price='$price',number_page='$number_page',cover='$cover',description='$description',store='$store',sale_off='$sale_off',company='$company',publishing_house='$publishing_house',publish_date='$publish_date' WHERE book_ID='$book_ID'";
							$query=mysqli_query($conn,$sql);
							$query=mysqli_query($conn,"DELETE FROM book_cate WHERE book_ID='$book_ID'");
							foreach($_POST['category'] as $theloai)
							{
								$sql="INSERT INTO book_cate VALUE('$book_ID','$theloai')";
								$query=mysqli_query($conn,$sql);
							}
							echo "<span style='color: #F0601C'>Thông tin cập nhật thành công !</span>";
						}
						else echo"<span style='color: #F0601C'>Bạn phải nhập đầy đủ các thông tin yêu cầu</span>";
					}
					//load dữ diệu của sách					
					$query=mysqli_query($conn,"SELECT * FROM books WHERE book_ID='$book_ID'");
					$row=mysqli_fetch_assoc($query);	
					$query1=mysqli_query($conn,"SELECT cate_ID FROM book_cate WHERE book_ID='$book_ID'");
					while($row1=mysqli_fetch_assoc($query1))
					{
						$item[]=$row1['cate_ID'];
					}
				?>
					<form id="upload-new-book" action="edit_book.php?book_ID=<?php echo $book_ID;?>" method="post">
						<fieldset id="field-box">
						<ul>
							<li>
						<h4 class="orange">Thông tin sách</h4>
						</li>
							<li class="info">
								<div class = "book"> 
									<label for="book name">Tên sách </label> </br>
									<input type="text" name="title" value="<?php echo $row['title'];?>" title="Tên sách" style="width: 350px;" class="form-text" maxlength="50" >
								</div>
								<div class = "image "> 
									<label for="image">File ảnh bìa </label> </br>
									<input type="text" name="image" value="<?php echo $row['image'];?>" title="Ảnh bìa" class="form-text" maxlength="50">
								</div>								
							</li>
							<li class="info">
								<div class="author"> 
									<label for="author-name">Tên tác giả </label> </br>
									<div class = "author-box" >
										<input type="text" name="author" value="<?php echo $row['author'];?>" title="Tên tác giả" style="width: 350px;"class="form-text" maxlength="30">
									</div>
								</div>
								<div class="input-price"> 
									<label for="price">Giá tiền</label> </br>
									<div class = "price-box" >
										<input type="text" name="price" value="<?php echo $row['price'];?>" title="Giá tiền" class="form-text" maxlength="10"> .000 &nbsp;₫
									</div>
								</div>
								<div class="pages"> 
									<label for="pages">Số trang </label> </br>
									<div class = "page-box" > 
										<input type="text" name="number_page" value="<?php echo $row['number_page'];?>" title="Số trang" class="form-text" maxlength="5">
									</div>
								</div>
								<div class = "cover">
									<label for="cover"></label> </br>
									<div class="left"><input type="radio" name="cover" value="0" <?php if($row['cover']==0) echo"checked";?>>Bìa mềm</div>
									<div class="right"><input type="radio" name="cover" value="1"<?php if($row['cover']==1) echo"checked";?>>Bìa cứng</div>
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
										<td><input type="checkbox" <?php if(in_array (1, $item)) echo"checked";?> name="category[]" value="1"> Sách Tiếng Anh</td>
										<td><input type="checkbox" <?php if(in_array (5, $item)) echo"checked";?> name="category[]" value="5"> Sách Kỹ Năng Sống - Nghệ Thuật Sống</td> 
										<td><input type="checkbox" <?php if(in_array (4, $item)) echo"checked";?> name="category[]" value="4"> Sách Chuyên Ngành</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" <?php if(in_array (3, $item)) echo"checked";?> name="category[]" value="3"> Sách Kinh Tế</td>
										<td><input type="checkbox" <?php if(in_array (6, $item)) echo"checked";?> name="category[]" value="6"> Sách Giáo Khoa - Tham Khảo</td> 
										<td><input type="checkbox" <?php if(in_array (9, $item)) echo"checked";?> name="category[]" value="9"> Sách Truyện Thiếu Nhi</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" <?php if(in_array (7, $item)) echo"checked";?> name="category[]" value="7"> Sách Học Ngoại Ngữ - Từ Điển</td>
										<td><input type="checkbox" <?php if(in_array (2, $item)) echo"checked";?> name="category[]" value="2"> Sách  Văn Học - Tiểu Thuyết</td> 
										<td><input type="checkbox" <?php if(in_array (8, $item)) echo"checked";?> name="category[]" value="8"> Sách Cho Tuổi Mới Lớn</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" <?php if(in_array (10, $item)) echo"checked";?> name="category[]" value="10"> Sách Thường Thức - Đời Sống</td>
										<td><input type="checkbox" <?php if(in_array (11, $item)) echo"checked";?> name="category[]" value="11"> Truyện Tranh - Manga - Comic</td> 
										<td><input type="checkbox" <?php if(in_array (12, $item)) echo"checked";?> name="category[]" value="12"> Sách Văn Hóa - Nghệ Thuật - Du Lịch</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" <?php if(in_array (13, $item)) echo"checked";?> name="category[]" value="13"> Sách Nuôi Dạy Con</td>
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
									<textarea name="description" title="Miêu tả" maxlength="1000"><?php echo $row['description'];?></textarea>
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
									<input type="text" name="sale_off" value="<?php echo $row['sale_off'];?>" title="Khuyến mãi" class="form-text" maxlength="10"> %
								</div>
								<div class="store"> 
									<label for="store">Tồn kho</label> </br>
									<input type="text" name="store" value="<?php echo $row['store'];?>" title="Tồn kho" class="form-text" maxlength="10"> 
								</div>
							</li>	
							<li class="info">
								<div class="author"> 
									<label for="company">Công ty phát hành</label> </br>
									<div class = "author-box" >
										<input type="text" name="company"value="<?php echo $row['company'];?>" title="Công ty phát hành" class="form-text" maxlength="30">
									</div>
								</div>
								<div class="author"> 
									<label for="publishing_house">Nhà xuất bản</label> </br>
									<div class = "author-box" >
										<input type="text"  name="publishing_house" value="<?php echo $row['publishing_house'];?>" title="Nhà xuất bản" class="form-text" maxlength="30"> 
									</div>
								</div>
								<div class="dates"> 
									<label for="dates">Ngày phát hành <i>(Y-m-d)</i> </label> </br>
									<div class = "page-box" > 
										<input type="text" name="publish_date" value="<?php echo $row['publish_date'];?>" title="Số trang" class="form-text" maxlength="30">
									</div>
								</div>
							</li>
							
								
						</ul>
						</fieldset>
						<input type="submit" name="submit" value="Lưu thay đổi" class="signin-button">
					</form>
					<form action="del_book.php?book_ID=<?php echo $book_ID;?>" method="post">
						<input type="submit" name="xoa" value="Xóa sách này" class="signin-button">
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