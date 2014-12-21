<?php
session_start();
 echo "Bạn đã đặt hàng thành công !";
 unset($_SESSION['cart']);
?>
<head>
<meta http-equiv="refresh" content="2; url=index.php" />
</head>
