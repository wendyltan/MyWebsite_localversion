<?php $authorizeNum = "32221126"?>
<?php
if ($_POST["name"]==$authorizeNum) {

	session_start();
	$_SESSION['specialnumber'] = $authorizeNum;
	header("refresh:3;url=../about.php");
	echo '正在加载，请稍等...<br>三秒后自动跳转';
	//确保重定向后，后续代码不会被执行 
	exit;	
}
?>
<?php
if ($_POST["name"]!=$authorizeNum){
	header("refresh:3;url=../index.html");
	echo '许可码错误，<br>三秒后自动跳转回登录页面';
	//确保重定向后，后续代码不会被执行 
	exit;	  
}
?>
