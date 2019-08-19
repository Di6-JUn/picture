<?php
$secername = "172.16.70.26";
$username ="root";
$password = "";
$dbname ="cc";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	//设置PDO错误为异常
	
//	$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERMODE_EXCEPTION);
//	echo "Connected successfuly.";
}
catch (PDOException $e)
	{
		echo $e ->getMessage();
	}

?>
