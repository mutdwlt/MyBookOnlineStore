<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/top_header.css">
<link rel="stylesheet" href="css/cus-account.css">
<link rel="stylesheet" href="css/cus-cart.css">

<script src="script.js"></script>
<title>Giỏ hàng của tôi</title>
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
					<h3>Tài khoản của tôi</h3>
					<div class="all-left">
						<a href="#" title="User-name">
						<img src="images/login_icon.png" alt="User-name" width="45" height="45">
						</a>
						<a href="#" title="đặng linh">
							<span class="u-name">đặng linh	</span>		</a>
					</div>
				</div>
				<ul>
					<li><a href="cus-account.php">Thông tin chung tài khoản</a></li>
					<li><a href="account-edit.php">Sửa thông tin tài khoản</a></li>
					<li><a href="#">Sổ địa chỉ (Address book)</a></li>
					<li class="on"><a href="#">Giỏ hàng</a></li>
					<li><a href="order-history.php">Đơn hàng của tôi</a></li>
					<li><a href="#">Hỏi đáp</a></li>
				</ul>
			</div>
			<div class="col-main">
				<div class="main-1">
				<h1 class="b-cart__title">Giỏ hàng của tôi <span class="b-cart__qty">(Đang có 2 sản phẩm)</span></h1>
				</div>
				<div class="main-2">
				<p><strong>Xin chào, user!</strong><br>
				Bạn có thể xem ngắn gọn về các giao dịch đã thực hiện và 
				cập nhật thông tin tài khoản. Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</p>
				</div>
				<div class="b-cart">
				<div class="b-cart__content">
				<div class="b-cart__content-box">
				
					<div class="b-cart__block-title clearfix">
						<span class="b-cart__block-item">Sản phẩm</span>
						<span class="b-cart__block-price">Giá</span>
						<span class="b-cart__block-qty">Số lượng</span>
						<span class="b-cart__block-price">Giảm</span>
						<span class="b-cart__block-total-price">Tổng</span>
					</div>
					<form id="update-cartnew" method="post" onsubmit="return false;">
						<ul class="b-cart__item-list">
						
							<li id="" class="b-cart__item">
								<a href="" target="_blank" class="b-cart__item-img">
									<img src="images/nhat-ky-meo-ngoc.jpg" alt="Nhật Ký Mèo Mốc" title="Nhật Ký Mèo Mốc">
								</a>
								<div class="b-cart__item-box">
									<div class="b-cart__item-detail">
										<a href="#" target="_blank" title="Nhật Ký Mèo Mốc">
											Nhật Ký Mèo Mốc	                
										</a>
									</div>
									<div class="b-cart__item-price">
										<span class="b-cart__item-price-value">
											<span class="price">50.000&nbsp;₫</span>                
										</span>
									</div>
									<div class="b-cart__item-qty">
										<input id="input_7698389" type="text" name="" title="Số lượng" maxlength="2" class="b-cart__qty-input" value="1" data-item-id="" data-old-qty="1">
											<a class="b-cart__item-qty-update" title="Bỏ sản phẩm" >Bỏ sản phẩm</a>
									</div>
									<div class="b-cart__item-price_discount">
										<span class="b-cart__item-price-value">
											<span class="price">0&nbsp;₫</span>                </span>
									</div>

									<div class="b-cart__item-price-total">
										<span class="b-cart__item-price-value">
											<span class="price">50.000&nbsp;₫</span>                </span>
									</div>

												
									<ul class="b-cart__attribute">
										<div class="clearfix brand-box-cart">
											<li class="b-cart__attribute-item"> 
												<span class="b-cart__attribute-name">Bìa Mềm - Tác giả: 
													<a target="_blank" href="#">
														<b>Mèo mốc</b>
													</a>
												</span>
											</li>
										</div>
										<div id="item_error_7698389" class="b-cart__item-error" style="display: none;"></div>
									</ul>
								</div>
							</li>
							<li id="" class="b-cart__item">
								<a href="#" target="_blank" class="b-cart__item-img">
									<img src="images/5-centimet-tren-giay.jpg" alt="5 Centimet Trên Giây" title="5 Centimet Trên Giây">
								</a>
								<div class="b-cart__item-box">
									<div class="b-cart__item-detail">
										<a href="#" target="_blank" title="5 Centimet Trên Giây">
												5 Centimet Trên Giây - <span style="color: #F0601C">Đặt trước</span> </a>
									</div>
									<div class="b-cart__item-price">
										<span class="b-cart__item-price-value">
											<span class="price">35.000&nbsp;₫</span>                
										</span>
									</div>
									<div class="b-cart__item-qty">
										<input id="input_7698389" type="text" name="" title="Số lượng" maxlength="2" class="b-cart__qty-input" value="1" data-item-id="" data-old-qty="1">
											<a class="b-cart__item-qty-update" title="Bỏ sản phẩm" >Bỏ sản phẩm</a>
									</div>
									<div class="b-cart__item-price_discount">
										<span class="b-cart__item-price-value">
											<span class="price">0&nbsp;₫</span>                </span>
									</div>

									<div class="b-cart__item-price-total">
										<span class="b-cart__item-price-value">
											<span class="price">35.000&nbsp;₫</span>                </span>
									</div>

												
									<ul class="b-cart__attribute">
										<div class="clearfix brand-box-cart">
											<li class="b-cart__attribute-item"> 
												<span class="b-cart__attribute-name">Bìa Mềm - Tác giả: 
													<a target="_blank" href="#">
														<b>Shinkai Makoto</b>
													</a>
												</span>
											</li>
															
										</div>
		
										<li class="b-cart__attribute-item">
											<p class="item-msg notice b-cart__attribute-name" style="width:365px;padding: 0px 0px 0px 0px">
												Đặt trước, dự kiến sản phẩm có mặt tại Tiki từ ngày 20/12/2014                                                    </p>
										</li>
										<div id="item_error_7698389" class="b-cart__item-error" style="display: none;"></div>
									</ul>
								</div>
							</li>
						</ul>
						<div class="b-cart__update">
							<button class="b-cart__update-btt btt_normal" id="b-cart__update-all">Cập Nhật Giỏ Hàng</button>
						</div>
					</form>
					<div class="b-cart__summary clearfix">
						<div class="b-cart__benefit clearfix">
							
							<div class="b-cart__sale clearfix">
								<div class="b-cart__xu">
									<div class="rewards-box-spend-minicart b-cart__sale clearfix">
										<h2 class="b-cart__xu-title">Giảm giá với Tiki Xu</h2>
										<div class="box-content">
											<span class="points_slider_msg">
											Bạn không thể sử dụng Tiki Xu hoặc không đủ số Tiki Xu cần thiết để sử dụng trong giỏ hàng này.
											</span>
										</div>
									</div>
								</div>
															
								<div class="b-cart__coupon">
									<h2 class="b-cart__coupon-title">Mã giảm giá / Quà tặng</h2>

									<!--<span class="b-cart__coupon-guide">Nhập mã giảm giá của bạn</span>-->
									<form id="discount-coupon-form" action="/checkout/cart/couponPostNew" method="post" onsubmit="return false;">
										<div class="b-cart__coupon-box">
											<input type="hidden" name="remove" id="remove-coupone" value="0">
											<input type="text" id="coupon_code" class="b-cart__coupon-input" name="coupon_code" value="" placeholder="Nhập vào nếu có">	
											<button type="button" class="b-cart__coupon-btt btt_normal" onclick="submitCoupon(this, false);">Áp dụng</button>
										</div>
									</form>
													
								</div> 
							</div>
							<div class="b-cart__continue">
								<a class="b-cart__continue-link" href="#" onclick="" title="Chọn thêm sản phẩm khác" alt="Chọn thêm sản phẩm khác">
									<i class="fa fa-caret-right tk-i-cart-continue"></i>Chọn thêm sản phẩm khác
								</a>
							</div>
						</div>
										
						<div class="b-cart__total-price">
										
							<ul class="b-cart__total-price-list">
								<li class="b-cart__total-price-item b-cart__total-price_sub">
									<span class="b-cart__total-price-name">Tổng chưa giảm</span>
									<span class="b-cart__total-price-value">
										82.000&nbsp;₫        </span>
								</li>
									
								<li class="b-cart__total-price-item vb-cart__total-price_coupon">
								<span class="b-cart__total-price-name">Phí đóng gói và giao hàng</span>
										<span class="b-cart__total-price-value" style="color: red;">
									Chưa có
								</span>
									</li>
								<!--<li class="b-cart__total-price-item b-cart__total-price_ship"><span class="b-cart__total-price-name">Phí vận chuyển</span><span class="b-cart__total-price-value">(Miễn phí)</span></li>-->
							<li class="b-cart__total-price-item b-cart__total-price_final">
								<span class="b-cart__total-price-name">THÀNH TIỀN</span>
								<span class="b-cart__total-price-value">
									82.000&nbsp;₫        </span>
								<span class="b-cart__VAT">
									Đã bao gồm VAT
								</span>
									</li> 
						</ul>
						<div class="b-cart__checkout"><button class="b-cart__checkout-btt btn__add-to-cart btnAddToCart mybutton" title="ĐẶT HÀNG">ĐẶT HÀNG
								
								</button></div>
						</div>
					</div>
				</div>
				</div>
				</div>
				
				<div class="button-set">
				<a href="https://tiki.vn/sales/order/view/order_id/233957/" class="left">« Trở lại</a>
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