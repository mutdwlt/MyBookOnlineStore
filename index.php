<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mua sách trực tuyến</title>
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
				<div class="title_box2">SÁCH BÁN CHẠY</div>
				<div class="left_menu2">
					<ul class="left_menu_content2">
					<?php
						$conn=mysqli_connect("localhost","root","","bookstore");
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						mysqli_set_charset($conn,"utf8");
						$sql="SELECT books.book_ID,books.title,books.image,books.author,books.cover,books.price,books.sale_off,sum(orderlines.quantity) FROM books,orderlines WHERE orderlines.book_ID=books.book_ID GROUP BY title ORDER BY sum(orderlines.quantity) DESC LIMIT 0,5";
						$query=mysqli_query($conn,$sql);
						echo $sql;
						if($query==false)
						{die(mysqli_error($conn));
						}
						mysqli_close($conn);
						while ($data = mysqli_fetch_assoc($query) )
						{
						?>
							<li>
								<div class="book">                            	
									<div class="book_icon"><a href="book_info.php?book_ID=<?php echo $data['book_ID'];?>"><img src="images/<?php echo $data['image'];?>" width="70" height="98" /></a></div>
									<div class="book_title"><a href="book_info.php?book_ID=<?php echo $data['book_ID'];?>"><?php echo $data['title'];?></a></div>
									<div class="book_note"><?php echo $data['author'];?></div>
									<div class="book_note"><?php if($data['cover']==0) echo"Bìa mềm"; else echo"Bìa cứng";?></div>
									<div class="book_sale">-<?php echo $data['sale_off'];?>%</div>
									<div class="book_cost"><?php echo $data['price'];?>.000 ₫</div>
								</div>
							</li>
						<?php
						}
					?>                                                                 
                    </ul>
                </div>
            </div>
            <!------- END left_content ------->
            
            <!------- START Middle_content ------->
          <div class="middle_content">
          		<!----------SÁCH MỚI-------------->
            	<div class="title">
                	<a href="newbook.php">Sách Mới</a><span><a href="newbook.php">Xem tất cả</a></span>
			  	</div>				
                <div class="list_book">
					<?php
					$conn=mysqli_connect("localhost","root","","bookstore");
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					mysqli_set_charset($conn,"utf8");
					$sql="SELECT * FROM books WHERE DATEDIFF(publish_date,CURDATE())<0 ORDER BY publish_date DESC LIMIT 0,5";
					echo $sql;
					$query=mysqli_query($conn,$sql);
					if($query==false)
					{die(mysqli_error($conn));
					}
					mysqli_close($conn);
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
								<div class="book_note"><strike><?php echo $price;?>.000₫</strike></div>
							</div>
						<?php
					}				
					?>	
                </div>
                <!----------SẮP CÓ-------------->
                <div class="title"><a href="soonbook.php">Sắp Có</a><span><a href="soonbook.php">Xem tất cả</a></span></div>
                <div class="list_book">
					<?php
					$conn=mysqli_connect("localhost","root","","bookstore");
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					mysqli_set_charset($conn,"utf8");
					$sql="SELECT * FROM books WHERE DATEDIFF(publish_date,CURDATE())>0 ORDER BY publish_date LIMIT 0,5";
					echo $sql;
					$query=mysqli_query($conn,$sql);
					if($query==false)
					{die(mysqli_error($conn));
					}
					mysqli_close($conn);
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
								<div class="book_note"><strike><?php echo $price;?>.000₫</strike></div>
							</div>
						<?php
					}				
					?>	
                </div>
                <!----------SÁCH GIẢM GIÁ-------------->
				<div class="title"><a href="saleoffbook.php">Sách giảm giá</a><span><a href="saleoffbook.php">Xem tất cả</a></span></div>
                <div class="list_book">
					<?php
					$conn=mysqli_connect("localhost","root","","bookstore");
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					mysqli_set_charset($conn,"utf8");
					$sql="SELECT * FROM books ORDER BY sale_off DESC LIMIT 0,5";
					echo $sql;
					$query=mysqli_query($conn,$sql);
					if($query==false)
					{die(mysqli_error($conn));
					}
					mysqli_close($conn);
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
					}				
					?>	
                </div>
                <!----------Thể Loại-------------->
                <div class="title"><a href="#">Thể Loại</a></div>
                <div class="list_categories">
                	<div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=2"><img src="images/Homepage/van-hoc.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=2">VĂN HỌC</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=3"><img src="images/Homepage/kinh-te.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=3">KINH TẾ</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=8"><img src="images/Homepage/teen.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=8">TEEN</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=9"><img src="images/Homepage/thieu-nhi.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=9">THIẾU NHI</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=7"><img src="images/Homepage/ngoai-ngu.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=7">NGOẠI NGỮ - TỪ ĐIỂN</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=10"><img src="images/Homepage/doi-song.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=10">THƯỜNG THỨC - ĐỜI SỐNG</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=5"><img src="images/Homepage/song-dep.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=5">KỸ NĂNG - SỐNG ĐẸP</a></div>
                    </div>
                    <div class="categories">
                    	<div class="cate_icon"><a href="category.php?cate_ID=4"><img src="images/Homepage/chuyen-nganh.png" width="140" height="196" /></a></div>
                        <div class="category"><a href="category.php?cate_ID=4">SÁCH CHUYÊN NGÀNH</a></div>
                    </div>
                </div>
                 <!----------TÁC GIẢ TIÊU BIỂU-------------->
                 <div class="title"><a href="#">Tác Giả Tiêu Biểu : Lâm Minh Chánh</a></div>
                <div class="list_book">
                	<div class="author_pic"><img src="images/Homepage/Lâm-Minh-Chánh.jpg" width="176" height="247" /></div>
                    <div class="info">Doanh nhân – Tác giả Lâm Minh Chánh có 24 năm trải nghiệm: 18 năm làm quản lý cấp cao cho các tập đoàn Kodad, AIA, Prudential, Chứng khoán DVSC, và 6 năm làm doanh nhân, nhà đầu tư. Ông là người đồng sáng lập sàn giao dịch Vàng Thế Giới, chuỗi Trung tâm Toán tư duy Hoa Kỳ Mathnasium, Công ty Kiến trúc và xây dựng Nhà Vui. Hiện ông đang đầu tư lãnh vực giáo dục, thương mại điện tử.
                            
                            <br /><br />Ông là một giảng viên về quản trị, tài chính và là cộng tác viên cho các báo kinh tế. Cuốn sách “Tăng tốc đến thành công - Tập 1” là tác phẩm đầu tay của bộ sách 4 cuốn, mỗi cuốn tóm tắt 25 cuốn sách kinh doanh hàng đầu của thế giới.
                    </div>
            	</div>
                <div class="title1">Mua Sách Online Tại Hedspi.vn</div>
                <div class="title1_info">
                	Với khẩu hiệu Niềm Vui Mua Sắm Hedspi.vn hiện là​ ​website ​thương mại điện tử​ đa ngành dẫn đầu về dịch vụ <strong>mua sách trực tuyến</strong> (đặt sách online, giao hàng tận nơi)​. Khi mua sách qua mạng khách hàng nhận được những lợi ích của dịch vụ bán sách online của <strong>nhà sách trên mạng Hedspi</strong>:
                    <br /><br /><span> ✓ </span>Tiết kiệm: khách hàng được mua sách online giá rẻ hơn 20% trở lên (áp dụng với 90% sách tại Hedspi.vn)</span>
                    <br />✓ Tìm kiếm: dễ dàng tìm kiếm sách mới, truyện mới và tham khảo đánh giá sách từ các độc giả khác.
                    <br />✓ Giao hàng tận nơi: khi mua sách online ở TP.HCM Hà Nội và tất cả các tỉnh trên toàn quốc.
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
