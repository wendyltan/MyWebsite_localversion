 <?php
 //检查用户是否登录
session_start(); 
if(empty($_SESSION['user_info'])){ //检查一下session是不是为空
    if(empty($_COOKIE['username']) || empty($_COOKIE['password'])){ //如果session为空，并且用户没有选择记录登录状
    echo "Please log in first!";
    header("refresh:3;url=../index.html");
    //转到登录页面，记录请求的url，登录;后跳转过去，用户体验好。
    }else{ //用户选择了记住登录状态
    $user = array("username"=>$_COOKIE['username'],"password"=>$_COOKIE['password']); //去取用户的个人资料
    if(empty($user)){ //用户名密码不对没到取到信息，转到登录页面
    echo "Please log in first!";
    header("refresh:3;url=../index.html");
    }else{
    $_SESSION['user_info'] = $user; //用户名和密码对了，把用户的个人资料放到session里面
    }
  }
}
else
{
  echo "you have login.";
  header("refresh:3;url=../about.php");
}