<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng ký tài khoản</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/content.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
        <link rel="stylesheet" type="text/css" href="css/login_content.css"/>
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
            <div class="login_text"><a href="login.php">Đăng nhập</a> | <a href="registered.php">Đăng ký</a></div>
            <div class="hotline"><img src="images/phone_icon.jpg" width="15" height="15" /><span class="hotline_text">Hotline:</span> <span class="phone_number">1900-6035</span><span style="font-size:12px">(8-21h kể cả T7,CN)</span></div>
        </div>
    </div>
    <br />
	<hr />
    <!--------- END HEADER ------------------>
    <div class="main">
    	<!----- START CONTENT --------->
        <div class="start">
            <span><a href="index.php">Trang chủ</a> / <a href="registered.php">Đăng ký</a></span> / <strong>Mua sách trực tuyến Giảm Giá Hơn 20% - Nhà Sách HEDSPI</strong>
        </div>
      	<div class="login_title"><h2>Đăng ký tài khoản mới</h2></div>
		<?php
			 if(isset($_POST['adduser']))
			 {
			$username =$_POST["username"];
			$password =$_POST["password"];
			$repassword =$_POST["re_password"];
			$name=$_POST["name"];
			$email=$_POST["email"];
			$address=$_POST["address"];
			$phone=$_POST["phone"];
			$i=$_POST["gioi_tinh"];
			if($i=="Nam") $sex=1;
			else $sex=0;
			$year=$_POST["year"];
			$month=$_POST["month"];
			$day=$_POST["day"];
			if($username&&$password&&$repassword&&$name&&$email&&$address&&$phone&&$day&&$month&&$year)
			{
				if($password!=$repassword)
				{ echo "Mật khẩu không khớp nhau";}
				else
				{
					if(strlen($username)>30||strlen($username)<6)
					{ echo "Tên Đăng Nhập phải chứa từ 6 đến 30 kí tự";}
					else
					{
						if(strlen($password)>30||strlen($password)<6)
						{ echo "Mật Khẩu phải chứa từ 6 đến 10 kí tự";}
						else
						{
							$conn=mysqli_connect("localhost","root","","bookstore");
							if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							mysqli_set_charset($conn,"utf8");
							$namecheck=mysqli_query($conn,"select * from customers where username='$username'");
							$count=mysqli_num_rows($namecheck);
							if($count != 0 )
							{
								echo "Tên đăng nhập đã được sử dụng<br/>";
							}
							else
							   {
								$l=0;
								$ngaytao=date("Y-m-d");
								$birth=date("$year-$month-$day");
								$query2=mysqli_query($conn,"INSERT INTO customers(cus_ID,cus_name,sex,phone,email,address,birth,username,password,role,date) VALUES('','$name','$sex','$phone','$email','$address','$birth','$username','$password','$l','$ngaytao')");
								if($query2) {
								echo "Bạn đã đăng ký thành công!"?> <a href="login.php">Click here</a><?php echo " để chuyển đến trang đăng nhập";
								die();
								}
								mysqli_close($conn);
							   }
							
						}
					}
				}
			}
			else 
			{
				echo "Bạn phải điền hết các nội dung được yêu cầu";
			}
			}
		?>
		<div class="login_content">
		<form action="registered.php" method="POST">
       		<fieldset class="info1">
                <legend class="info_titlebox">Thông tin cá nhân</legend>
                <div class="sex">
                    <div class="position"><span>Giới tính</span></div>
                    <select class="select_sex" name="gioi_tinh">
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </div>
                <div class="name">
                    <div class="position"><span>Họ và tên</span></div>
                    <input class="form_name" type="text" name="name" />
                </div>
                <div class="clr"></div>
                <div class="birth">
                    <div class="position"><span>Ngày sinh</span></div>
                    <div class="date"><input class="form_date" type="text" name="day" />
                        <div class="font_date">Ngày</div>
                    </div>
                    <div class="date"><input class="form_date" type="text" name="month"/>
                        <div class="font_date">Tháng</div>
                    </div>
                    <div class="date"><input class="form_date" type="text" name="year"/>
                        <div class="font_date">Năm</div>
                    </div>
                </div>
				<div class="clr"></div>
				<div class="email">
                    <div class="position"><span>Địa chỉ</span></div>
                    <input class="form_name" type="text" name="address" />
                </div>
				<div class="email">
                    <div class="position"><span>Số điện thoại</span></div>
                    <input class="form_name" type="text" name="phone" />
                </div>
       		</fieldset>
        	<fieldset class="info1">
                <legend class="info_titlebox2">Thông tin đăng nhập</legend>
                <div class="email">
                    <div class="position"><span>Địa chỉ Email</span></div>
                    <input class="form_name" type="text" name="email" />
                </div>
				<div class="username">
                    <div class="position"><span>Tên đăng nhập</span></div>
                    <input class="form_name" type="text" name="username" />
                </div>
                <div class="password">
                    <div class="position"><span>Mật khẩu</span></div>
					<input class="form_name" type="password" name="password" />
                </div>
                <div class="re_password">
                    <div class="position"><span>Xác nhận mật khẩu</span></div>
                    <input class="form_name" type="password" name="re_password" />
                </div>
        	</fieldset>
			<input name="adduser" type="submit" class="button1" value="Tạo tài khoản mới"/>
		</form>
        </div>
	  <!------ END CONTENT ---------->
	</div>
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
