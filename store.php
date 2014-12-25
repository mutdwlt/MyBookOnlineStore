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
        <title>Quản lý kho sách</title>
		<link rel="stylesheet" href="css/upload_book.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/top_header.css">
		<link rel="stylesheet" href="css/cus_account.css">
		<link rel="stylesheet" href="css/ad_order_history.css">
		<link rel="stylesheet" href="css/store.css">
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
				<h1>Kho hàng</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, admin!</strong><br>
				Từ trang kho hàng này có thể quản lý và sửa chữa thông tin các cuốn sách trên website . 
				Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<div class="main-3">
					<form id ="search-book" action="store.php" method= "post">
						<ul class="search">
							<li class="head">
								<h4>Tìm kiếm</h4>
							</li>
							<li >
								<div class="search-book">
									<div class="b-id">
										<span><b>Book ID</b></span>
										<input type="text" name="book_ID" id="book-id" placeholder="BookID" title="Id" style="width: 80px;" class="form-text" maxlength="7" >
										
									</div>									
									<div class="b-name">
										<b>Tên sách</b>
										<input type="text" name="title" id="b-name" placeholder="Tên sách" title="Tên sách" style="width: 150px;" class="form-text" maxlength="50" >
									</div>
									<div class="b-search--button">
										<button type="submit" name="submit"> Tìm </button>
									</div>
									<div class="clear"></div>
									<div class="tim_theo">
									Xếp theo:
									<input type="radio" name="xep" value="0" checked>ID
									<input type="radio" name="xep" value="1">Ngày xuất bản
									<input type="radio" name="xep" value="2">Bán chạy nhất
									<input type="radio" name="xep" value="3">Còn nhiều nhất
									<input type="radio" name="xep" value="4">Mới thêm vào
									</div>
								</div>
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
								<th style="width:7%;">Sale&nbsp;</th>
								<th style="width:10%;">Giá tiền</th>
								<th style="width:15%;">Ngày xuất bản</th>
								<th style="width:10%;">Đã bán</th>
								<th style="width:10%;">Tồn kho</th>
								<th style="width:7%;">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if(isset($_POST['submit']))
						{
							if(isset($_POST['book_ID']))
								{
									if($_POST['book_ID'])
									{
									$book_ID=$_POST['book_ID'];
									$strid="book_ID='$book_ID'";
									}
									else $strid="1";
								}
							if(isset($_POST['title']))
								{
									if($_POST['title'])
									{
									$title=$_POST['title'];
									$strtitle="AND title LIKE '%$title%'";
									}
									else $strtitle="AND 1";
								}
							if($_POST['xep']==0) $strorder="book_ID";
							elseif($_POST['xep']==1) $strorder="publish_date DESC";
							elseif($_POST['xep']==3) $strorder="store DESC";
							elseif($_POST['xep']==4) $strorder="book_ID DESC";
						}
						if(isset($_POST['submit'])&&($_POST['xep']!=2))
							{
								$sql="SELECT * FROM books WHERE $strid $strtitle ORDER BY $strorder";
							}
						elseif(isset($_POST['submit'])&&($_POST['xep']==2))
							{
								$sql="SELECT books.book_ID,books.title,books.author,books.price,books.store,books.publish_date,books.sale_off,sum(orderlines.quantity) as sum FROM books,orderlines WHERE books.book_ID=orderlines.book_ID AND $strid $strtitle GROUP BY books.book_ID ORDER BY sum DESC";
							}
						else $sql="SELECT * FROM books";
							$query=mysqli_query($conn,$sql);
							if(mysqli_num_rows($query)==0) echo "<font color='red'>Không tìm thấy dữ liệu</font>";
							while($row=mysqli_fetch_assoc($query))
							{
								$idsach=$row['book_ID'];
								$queryx=mysqli_query($conn,"SELECT sum(quantity) as tong FROM orderlines WHERE book_ID='$idsach'");
								$rowx=mysqli_fetch_assoc($queryx);
								if($rowx['tong'])
									$daban=$rowx['tong'];
								else $daban=0;
							?>
								<tr class="first last odd">
									<td><?php echo $row['book_ID'];?></td>
									<td><a href="book_info.php?book_ID=<?php echo $row['book_ID'];?>" title="Xem chi tiết sách"><span class="b-name"><?php echo $row['title'];?></span> </a></td>
									<td><span class="b-sales-off"><em><?php echo $row['sale_off'];?></em>&nbsp;%</span></td>
									<td><span class="price"><?php echo $row['price'];?>.000₫</span>&nbsp;</td>
									<td><span class="price"><?php echo $row['publish_date'];?></span>&nbsp;</td>
									<td><span class="price"><?php echo $daban;?> quyển</span>&nbsp;</td>
									<td>
										<em><?php echo $row['store'];?></em>&nbsp;quyển&nbsp;
									</td>
									<td class="last">
										<a href="edit_book.php?book_ID=<?php echo $row['book_ID'];?>">Sửa</a>
									</td>
								</tr>
							<?php
							}
						?>
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