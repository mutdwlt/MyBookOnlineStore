<?php
	session_start();
	if(isset($_GET['cate_ID']))
		{
			$cate_ID=$_GET['cate_ID'];
		}
	else header('location:index.php');
	$conn=mysqli_connect("localhost","root","","bookstore");
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	mysqli_set_charset($conn,"utf8");
	$sql="SELECT cate_name FROM category WHERE cate_ID='$cate_ID'";
	$query=mysqli_query($conn,$sql);
	if($query==false)
		{die(mysqli_error($conn));
		}
	$row=(mysqli_fetch_assoc($query));
	$cate_name=$row['cate_name'];
	mysqli_close($conn);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $cate_name;?></title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/content.css"/>
        <link rel="stylesheet" type="text/css" href="css/left_content.css"/>
        <link rel="stylesheet" type="text/css" href="css/middle_content.css"/>
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
            <form action="search_result.php" method="post">
            	<div class="search_div"><input type="text" name="search" class="search"/></div>
            	<input name="submit" type="submit" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="index.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
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
            	<span><a href="index.php">Trang chủ</a> /<strong>Mua sách trực tuyến Giảm Giá Hơn 20% - Nhà Sách HEDSPI</strong>
            </div>
            <!----- START left_content ------->
            <div class="left_content">
            	<div class="title_box1">DANH MỤC SÁCH</div>
                <div class="left_menu1">
                    <ul class="left_menu_content1">
						<li <?php if($cate_ID==1) echo "class ='on'";?>><a href="category.php?cate_ID=1">Sách Tiếng Anh</a></li>
                        <li <?php if($cate_ID==2) echo "class ='on'";?>><a href="category.php?cate_ID=2">Sách Văn Học - Tiểu Thuyết</a></li>
                        <li <?php if($cate_ID==3) echo "class ='on'";?>><a href="category.php?cate_ID=3">Sách Kinh Tế</a></li>
                        <li <?php if($cate_ID==4) echo "class ='on'";?>><a href="category.php?cate_ID=4">Sách Chuyên Ngành</a></li>
						<li <?php if($cate_ID==5) echo "class ='on'";?>><a href="category.php?cate_ID=5">Sách Kỹ Năng Sống - Nghệ Thuật Sống</a></li>
                        <li <?php if($cate_ID==6) echo "class ='on'";?>><a href="category.php?cate_ID=6">Sách Giáo Khoa - Tham Khảo</a></li>
                        <li <?php if($cate_ID==7) echo "class ='on'";?>><a href="category.php?cate_ID=7">Sách Học Ngoại Ngữ - Từ Điển</a></li>
                        <li <?php if($cate_ID==8) echo "class ='on'";?>><a href="category.php?cate_ID=8">Sách Cho Tuổi Mới Lớn</a></li>
                        <li <?php if($cate_ID==9) echo "class ='on'";?>><a href="category.php?cate_ID=9">Sách Truyện Thiếu Nhi</a></li>
						<li <?php if($cate_ID==10) echo "class ='on'";?>><a href="category.php?cate_ID=10">Sách Thường Thức - Đời Sống</a></li>
						<li <?php if($cate_ID==11) echo "class ='on'";?>><a href="category.php?cate_ID=11">Truyện Tranh, Manga, Comic</a></li>
						<li <?php if($cate_ID==12) echo "class ='on'";?>><a href="category.php?cate_ID=12">Sách Văn Hóa - Nghệ Thuật - Du Lịch</a></li>
                        <li <?php if($cate_ID==13) echo "class ='on'";?> style="border: none;"><a href="category.php?cate_ID=13">Sách Nuôi Dạy Con</a></li>
                    </ul>
                </div>             
                <div class="title_box2">MUA THEO</div>
                <div class="left_menu2">
                    <ul class="left_menu_content2">
						<li class="gia">Giá</li>
                        <li><a href="">0 ₫ - 100.000 ₫ </a></li>
                        <li><a href="">100.000 ₫ - 200.000 ₫ </a></li>
                        <li><a href="">200.000 ₫ - 300.000 ₫ </a></li>
                        <li><a href="">300.000 ₫ - 400.000 ₫ </a></li>
                        <li><a href="">400.000 ₫ - 500.000 ₫ </a></li>
                        <li><a href="">500.000 ₫ - 600.000 ₫ </a></li>
                        <li><a href="">600.000 ₫ - 700.000 ₫ </a></li>
                        <li><a href="">700.000 ₫ - 800.000 ₫ </a></li>
                        <li style="border: none;"><a href="">800.000 ₫ - 1.000.000 ₫ </a></li>
                    </ul>
                </div>
            </div>
            <!------- END left_content ------->
            
            <!------- START Middle_content ------->
          <div class="middle_content">
          		<!----------SÁCH-------------->
            	<div class="title" id="no_border">
                	<p class="font_title"><?php echo $cate_name;?></p>
			  	</div>
				<div class="divider xam">
					<ul class="float_right">
						<li class="margin_top_15"><span>Xếp theo</span></li>
						<li>
							<select id="mySelect" onchange="myFunction" class="sap_xep xam margin_top_10">
								<option value="NgàyXB">Ngày xuất bản</option>
								<option value="Z-A">Tên:Z-A</option>
								<option value="A-Z">Tên:A-Z</option>
								<option value="giacao">Giá:cao-thấp</option>
								<option value="giathap">Giá:thấp-cao</option>
								<option value="salecao">Mức giảm giá:cao-thấp</option>
								<option value="salethap">Mức giảm giá:thấp-cao</option>
							</select>
						</li>
					</ul>
				</div>
				<?php
					$conn=mysqli_connect("localhost","root","","bookstore");
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					mysqli_set_charset($conn,"utf8");
					$sql="SELECT books.book_ID,books.title,books.author,books.image,books.price,books.sale_off FROM books,book_cate WHERE book_cate.cate_ID='$cate_ID' AND books.book_ID=book_cate.book_ID ORDER BY publish_date DESC LIMIT 0,20";
					$query=mysqli_query($conn,$sql);
					if($query==false)
					{die(mysqli_error($conn));
					}
					mysqli_close($conn);
				?>
                <div class="list_book1">
					<?php
					$check=0;
					while ($data = mysqli_fetch_assoc($query) )
					{					
						$img=$data['image'];
						$title=$data['title'];
						$ID=$data['book_ID'];
						$author=$data['author'];
						$price=$data['price'];
						$sale_off=$data['sale_off'];
						?>
							<div class="book">
								<div class="book_icon"><a href="book_info.php?book_ID=<?php echo $ID;?>"><img src="images/<?php echo $img; ?>" width="130" height="182" /></a></div>
								<div class="book_title"><a href="book_info.php?book_ID=<?php echo $ID;?>"><?php echo $title;?></a></div>
								<div class="book_note"><?php echo $author; ?></div>
								<div class="book_cost"><?php $gia_ban=(int)($price*(100-$sale_off)/100); echo $gia_ban;?>.000₫</div>
								<div class="book_note">-<?php echo $sale_off;?>%</div>
							</div>
						<?php
						$check++;
						if(($check % 5)==0)
							{
								?><div class="clr"></div><?php
							}
					}				
					?>	
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
