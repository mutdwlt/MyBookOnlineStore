<head>
<meta http-equiv="refresh" content="2; url=store.php" />
</head>
Xóa sách thành công
<?php
$book_ID=$_GET['book_ID'];
$conn=mysqli_connect("localhost","root","","bookstore");
mysqli_set_charset($conn,"utf8");
$query=mysqli_query($conn,"DELETE FROM orderlines WHERE book_ID=$book_ID");
$query=mysqli_query($conn,"DELETE FROM book_cate WHERE book_ID=$book_ID");
$query=mysqli_query($conn,"DELETE FROM books WHERE book_ID=$book_ID");
?>