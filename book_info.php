<?php
	session_start();
	$ID=$_GET['book_ID'];
	if(!$ID) header('location:index.php');
	$conn=mysqli_connect("localhost","root","","bookstore");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysqli_set_charset($conn,"utf8");
	$sql="SELECT * FROM books WHERE book_ID='$ID' LIMIT 1";
	$query=mysqli_query($conn,$sql);
	if($query==false)
	die(mysqli_error($conn));
	mysqli_close($conn);
	$data = mysqli_fetch_assoc($query);
	$img=$data['image'];
	$title=$data['title'];
	$author=$data['author'];
	$price=$data['price'];
	$cover=$data['cover'];
	$publish_date=$data['publish_date'];
	$sale_off=$data['sale_off'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title;?></title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/content.css"/>
        <link rel="stylesheet" type="text/css" href="css/book_info.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
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
           	<div class="login_icon"><img src="images/login_icon.png" width="45" height="41" align="middle" /></div>
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
    <!----- START CONTENT --------->
	<div class="content">
    	<p><a href="index.php">Trang chủ</a>/<strong>Mua sách trực tuyến Giảm Giá Hơn 20% - Nhà Sách HEDSPI</strong></p>
    	<div class="info">
            <div class="bia_sach">
            	<img src="images/<?php echo $img;?>" alt="bia" width="235px"/>
            </div>
            <div class="gia_sach">
            	<h2><?php echo $title; ?></h2>
                <p>Tác giả : <span style="color:#00aaf1;"><?php echo $author;?></span></p>
                <p style="font-style:italic"><?php if($cover==0) echo "Bìa mềm"; else echo "Bìa cứng";?></p>
				
                <p><span style="color:#090;font-weight:bold;">Ngày phát hành:</span> 
				<?php
				$today=date("Y-m-d");				
					if(strtotime($publish_date)>strtotime($today)) echo" Dự kiến ".$publish_date;
					else echo $publish_date;
				?>
				</p>
				<p>Giá bìa: <strike> <?php echo $price;?>.000 ₫</strike></p>
                <p>Tại HEDSPI: <span style="color:#090; font-weight:bold; font-size:18px;"><?php $gia_ban=(int)($price*(100-$sale_off)/100); echo $gia_ban;?>.000 ₫</span> <span>(Đã có VAT)</span></p>
				<p>Tiết kiệm: <strong><?php echo $price-$gia_ban;?>.000 ₫</strong></p>
            </div>			
            <div class="dat_hang">		
            	<form action="addcart.php">
					<input type="hidden" name="item" value="<?php echo $data['book_ID']; ?>">
					<input type="image" src="images/<?php if(strtotime($publish_date)>strtotime($today)) echo"pre-order.png"; else echo "order.png"; ?>">
                </form>
            </div>
        </div>
		<div class="clear-fix"></div>
		<div class="chi_tiet">
			<div class="book_info">
				<ul class="book_info_menu">
					<li class=" border_right"><a class="font_21px" href="">Giới Thiệu Sách</a></li>
					<li class="normal_color"><a class="font_21px" href="#thong_tin_chi_tiet">Thông Tin Chi Tiết</a></li>
				</ul>
				<div class="clear-fix"></div>
				<hr class="bottom_20px"/>
				<div>
					<p style="margin-bottom:20px"><span class="font_21px orange"><?php echo $title;?></span></p>
					<p> <?php echo $data['description'];?> </p>
				</div>
			</div>
			<p id="thong_tin_chi_tiet" class="font_21px gray" style="padding-bottom:5px">Thông Tin Chi Tiết</p>
			<hr class="bottom_20px"/>
			<div class="table">
				<ul class="left_table">
					<li class="le">Nhà xuất bản</li>
					<li>Công ty phát hành</li>
					<li class="le">Số trang</li>
					<li>Ngày xuất bản</li>
					<li class="le border_bottom">Danh mục</li>
				</ul>
				<?php
				//Tìm loại sách
				$conn=mysqli_connect("localhost","root","","bookstore");
				mysqli_set_charset($conn,"utf8");
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
				$sql="SELECT category.cate_name FROM category,book_cate WHERE book_cate.book_ID='$ID' AND book_cate.cate_ID=category.cate_ID";
				$query=mysqli_query($conn,$sql);
				if($query==false)
				die(mysqli_error($conn));
				?>
				<ul class="right_table">
					<li class="le"><?php echo $data['company']; ?></li>
					<li><?php echo $data['publishing_house'];?></li>
					<li class="le"><?php echo $data['number_page'];?></li>
					<li><?php echo $data['publish_date']; ?></li>
					<li class="le border_bottom"><?php 
						while ($mucsach = mysqli_fetch_assoc($query) )
						{
							echo $mucsach['cate_name'].", ";
						}
						mysqli_close($conn);
					?></li>
				</ul>
			</div>
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
