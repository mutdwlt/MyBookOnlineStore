<?php
	session_start();
	//Kiểm tra có submit giỏ hàng hay ko
		if(isset($_POST['cap_nhat']))
			{
			 foreach($_POST['qty'] as $key=>$value)
			 {
			  if( ($value == 0) and (is_numeric($value)))
			  {
			   unset ($_SESSION['cart'][$key]);
			  }
			  elseif(($value > 0) and (is_numeric($value)))
			  {
			   $_SESSION['cart'][$key]=$value;
			  }
			 }
			 header("location:cus_cart.php");
			}
	//end kiểm tra
	if(!$_SESSION['name']) header('location:login.php');
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
	mysqli_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Giỏ hàng của tôi</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/cus_account.css"/>
		<link rel="stylesheet" type="text/css" href="css/cus_cart.css"/>
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
					<h3>Tài khoản của tôi</h3>
					<div class="all-left">
						<a href="cus_account.php" title="User-name">
						<img src="images/login_icon.png" alt="User-name" width="45" height="45">
						</a>
						<a href="cus_account.php">
							<span class="u-name"><?php echo $name;?></span></a>
					</div>
				</div>
				<ul>
					<li><a href="cus_account.php">Thông tin chung tài khoản</a></li>
					<li><a href="account_edit.php">Sửa thông tin tài khoản</a></li>
					<li class="on"><a href="cus_cart.php">Giỏ hàng</a></li>
					<li><a href="order_history.php">Đơn hàng của tôi</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1 class="b-cart__title">Giỏ hàng của tôi
				<span class="b-cart__qty">
					<?php
					$ok=1;
					 if(isset($_SESSION['cart']))
					 {
					  foreach($_SESSION['cart'] as $k=>$v)
					  {
					   if(isset($v))
					   {
					   $ok=2;
					   }
					  }
					 }
					 if ($ok != 2)
					  {
					  echo '(Bạn chưa có sản phẩm nào trong giỏ hàng)';
					 } else {
					  $items = $_SESSION['cart'];
					  echo '(Đang có '.count($items).' sản phẩm)';
					 }
					?>
				</span>
				</h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, <?php echo $name;?> !</strong><br>
				Bạn có thể xem ngắn gọn về các giao dịch đã thực hiện và 
				cập nhật thông tin tài khoản. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<div class="b-cart">
					<div class="b-cart__content">
						<div class="b-cart__content-box">
						
							<div class="b-cart__block-title clearfix">
								<span class="b-cart__block-item">Sản phẩm</span>
								<span class="b-cart__block-price"> Giá</span>
								<span class="b-cart__block-qty">  Số lượng</span>
								<span class="b-cart__block-price"> Giảm</span>
								<span class="b-cart__block-total-price"> Tổng</span>
							</div>
							<form id="update-cartnew" action="cus_cart.php" method="post">
								<ul class="b-cart__item-list">
								
								<?php
								$ok=1;
								$total=0;
								if(isset($_SESSION['cart']))
								{
								 foreach($_SESSION['cart'] as $k => $v)
								 {
								  if($v)
								  {
								   $ok=2;
								  }
								 }
								}
								if($ok == 2)
								{
									$i=0;
									foreach($_SESSION['cart'] as $key => $value)
									{
									if($_SESSION['cart'][$key])
									 $item[$i]=$key;
									 $i++;
									}
									$str=implode(",",$item);
									$connect=mysqli_connect("localhost","root","","bookstore") or die("Can not connect database");
									mysqli_set_charset($connect,"utf8");
									$sql2="select * from books where book_ID in ($str)";
									$query2=mysqli_query($connect,$sql2);
									if($query2==false)
										{
										die(mysqli_error($connect));
										}									
									while($row=mysqli_fetch_assoc($query2))
									{
									?>
										<li id="" class="b-cart__item">
											<a href="book_info.php?book_ID=<?php echo $row['book_ID'];?>" class="b-cart__item-img">
											<img src="images/<?php echo $row['image'];?>" alt="<?php echo $row['title'];?>">
											</a>
											<div class="b-cart__item-box">
												<div class="b-cart__item-detail">
												<a href="book_info.php?book_ID=<?php echo $row['book_ID'];?>"><?php echo $row['title'];$today=date("Y-m-d");if(strtotime($row['publish_date'])>strtotime($today)) echo"- <span style='color: #F0601C'>Đặt trước</span>";?></a>
												</div>
												<div class="b-cart__item-price">
												<span class="b-cart__item-price-value">
													<span class="price"><?php echo $row['price'];?>.000₫</span>                
												</span>
												</div>
												<div class="b-cart__item-qty">
												<?php
												echo "<input id='input_7698389' type='text' name='qty[$row[book_ID]]' maxlength='2' class='b-cart__qty-input' value='{$_SESSION['cart'][$row['book_ID']]}' data-item-id='' data-old-qty='1'>";
												?>
													<a class="b-cart__item-qty-update" href="delcart.php?item=<?php echo $row['book_ID'];?>" >Bỏ sản phẩm</a>
												</div>
												<div class="b-cart__item-price_discount">
													<span class="b-cart__item-price-value">
													<span class="price"><?php $gia_ban=(int)($row['price']*(100-$row['sale_off'])/100); echo ($row['price']-$gia_ban)*$_SESSION['cart'][$row['book_ID']];?>.000₫</span>
													</span>
												</div>
												<div class="b-cart__item-price-total">
													<span class="b-cart__item-price-value">
													<span class="price"><?php echo $gia_ban*$_SESSION['cart'][$row['book_ID']];?>.000₫</span>
													</span>
												</div>
												<ul class="b-cart__attribute">
												<div class="clearfix brand-box-cart">
													<li class="b-cart__attribute-item"> 
														<span class="b-cart__attribute-name"><?php if($row['cover']==0) echo "Bìa mềm"; else echo "Bìa cứng";?> - Tác giả: 
															<a target="_blank">
																<b><?php echo $row['author'];?></b>
															</a>
														</span>
													</li>
												</div>
												<div id="item_error_7698389" class="b-cart__item-error" style="display: none;"></div>
												</ul>
											</div>
										</li>
									<?php
									$total+=$gia_ban*$_SESSION['cart'][$row['book_ID']];
									}
									mysqli_close($connect);
								}
								else
								{
									echo" Bạn không có quyển sách nào trong giỏ hàng";
								}
								?>																								
								</ul>
								<div class="b-cart__update">
									<input class="b-cart__update-btt btt_normal" id="b-cart__update-all" type="submit" name="cap_nhat" value="Cập nhật giỏ hàng">
								</div>
							</form>
							<div class="b-cart__summary clearfix">
								<div class="b-cart__benefit clearfix">
									<div class="b-cart__continue">
										<a class="b-cart__continue-link" href="index.php" title="Chọn thêm sản phẩm khác" alt="Chọn thêm sản phẩm khác">
											<i class="fa fa-caret-right tk-i-cart-continue"></i>Chọn thêm sản phẩm khác
										</a>
									</div>
								</div>
												
								<div class="b-cart__total-price">										
									<ul class="b-cart__total-price-list">										
										<!--<li class="b-cart__total-price-item b-cart__total-price_ship"><span class="b-cart__total-price-name">Phí vận chuyển</span><span class="b-cart__total-price-value">(Miễn phí)</span></li>-->
									<li class="b-cart__total-price-item b-cart__total-price_final">
										<span class="b-cart__total-price-name">THÀNH TIỀN</span>
										<span class="b-cart__total-price-value">
											<?php echo $total;?>.000₫        </span>
										<span class="b-cart__VAT">
											Đã bao gồm VAT
										</span>
											</li> 
									</ul>
								<div class="b-cart__checkout">
								<form action="order.php" method="POST">
									<input type="hidden" name="total" value="<?php echo $total;?>">
									<input class="b-cart__checkout-btt btn__add-to-cart mybutton" type="submit" name="dat_hang" value="ĐẶT HÀNG">
								</form>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="button-set">
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