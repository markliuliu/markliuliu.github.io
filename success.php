<html>
<head>
<title>success</title>
</head>
<body>
<?php
	session_start();
	if($_SESSION['num'] != 3 || $_SESSION['num'] == 4)
	{
		echo "<script> alert('請不要直接輸入網址');location.href='http://localhost/form1.php';</script>";
	}
?>
登入成功
<?php
	session_destroy();
?>
<br>
<input type="button" value="回登入頁面" onclick="location.href='http://localhost/form1.php'">
</body>
</html>