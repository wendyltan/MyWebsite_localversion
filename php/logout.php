<?php
session_start();
if(empty($_SESSION['user_info'])){ 
	echo "You have enter the website by other way!Please log in";
    header("refresh:3;url=../index.html");
}
else{
    unset($_SESSION['user_info']);
    if(!empty($_COOKIE['username']) || empty($_COOKIE['password'])){

    	define("username","username");
    	define("password","password");
        
        echo "log out successfully!"."<br>"."good bye,".$_COOKIE['username'];
        setcookie("username", null, time()-3600*24*365);
        setcookie("password", null, time()-3600*24*365);
        echo "<br>"."redirecting...";
        header("refresh:3;url=../index.html");
  	}
}

