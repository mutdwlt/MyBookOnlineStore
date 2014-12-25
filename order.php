<?php
session_start();
if(!$_SESSION['name']) header('location:login.php');
if(isset($_POST['dat_hang']))
	{
	 echo "1";
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
				header('location:order_fail.php');
			} 
		else{
			$conn=mysqli_connect("localhost","root","","bookstore");
			mysqli_set_charset($conn,"utf8");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$i=0;
			foreach($_SESSION['cart'] as $key => $value)
				{
				if($_SESSION['cart'][$key])
					$item[$i]=$key;
					$i++;
				}
			$str=implode(",",$item);
			$sql="select book_ID,price,sale_off from books where book_ID in ($str)";
			$query=mysqli_query($conn,$sql);
			$username=$_SESSION['name'];
			$sql4="select cus_ID from customers where username='".$username."' limit 1";
			$query4=mysqli_query($conn,$sql4);
			$row=mysqli_fetch_assoc($query4);
			$cus_ID=$row['cus_ID'];
			$date=date("Y-m-d");
			$tongtien=$_POST['total'];
			$query3=mysqli_query($conn,"INSERT INTO orders(order_ID,cus_ID,date,total) VALUE('','$cus_ID','$date','$tongtien')");
			$order_ID=mysqli_insert_id($conn);
			while($row=mysqli_fetch_assoc($query))
			{
				$book_ID=$row['book_ID'];
				$quantity=$_SESSION['cart'][$book_ID];
				$price=$_SESSION['cart'][$row['book_ID']]*($row['price']*(100-$row['sale_off'])/100);
				$query2=mysqli_query($conn,"INSERT INTO orderlines(orderline_ID,order_ID,quantity,book_ID,price) VALUE('','$order_ID','$quantity','$book_ID','$price')");			
			}
			mysqli_close($conn);
			header('location:order_success.php');
		}				
	}
?>