<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		$remember = $_POST['remember'];

		if($user == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			$db = new PDO('mysql:host=localhost;dbname=vt;charset=utf8mb4', 'root', '');
			$db->query("set names 'gbk'");
			$sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
			$result = $db->query($sql);
			$num = $result->rowCount();
			if($num)
			{
				$row = $result->fetch(PDO::FETCH_ASSOC);	//将数据以索引方式储存在数组中
				echo "hello! ".$row["username"]."<br>";
				header("refresh:3;url=../about.php");
				echo '正在加载，请稍等...<br>三秒后自动跳转';
				session_start();

				define('username', 'username');
				define('password', 'password');
				define('remember','remember');

				$newrow = array("username" => $user,"password"=>$psw);
				if(!isset($_SESSION['user_info']))
					$_SESSION['user_info'] = $newrow;
				if(!empty($remember)){ //如果用户选择了，记录登录状态就把用户名和加了密的密码放到cookie里面
					setcookie("username", $user, time()+3600*24*365);
					setcookie("password", $psw, time()+3600*24*365);
				}
			}
			else
			{
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
			
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

	



//$username = trim($_POST['username']);
//$password = md5(trim($_POST['password']));


?>