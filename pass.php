<html>
<head>
<title>pass</title>
</head>
<body>
<?php
	session_start();
	if($_SESSION['num'] != 4)
	{
		echo "<script> alert('請不要直接輸入網址');location.href='http://localhost:8080/form1.html';</script>";
	}
	else if($_POST["Name"]=="php" && $_POST["Password"]=="mysql")
	{
		$_SESSION['num'] = 3;
		header("Location: http://localhost:8080/success.php");
	}
	else
	{
		$_SESSION['num'] = 2;
		header("Location: http://localhost:8080/failed.php");
	}
?>
</body>
</html>