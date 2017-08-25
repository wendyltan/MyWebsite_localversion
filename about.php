<?php 
if(!isset($_SESSION)) 
  { 
    session_start(); 
  } 
?>
<?php

if(!empty($_SESSION['specialnumber'])&&!isset($_COOKIE['username'])){
  $isView = true;
  //$_SESSION['specialnumber'] = "";
}
    
else if(empty($_SESSION['user_info']['username'])) {
  header("refresh:3;url=index.html");
  echo '非法操作，请先登录...<br>三秒后自动跳转';
}
else
    $isView = true;

?>

<?php if($isView){?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>about page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"  href="css/blog.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <a name="top"></a>
    <div class="blog-masthead">
        <div class="container">
          <nav class="blog-nav">
            <a class="blog-nav-item" href="blog.php">博客主页</a>
            <a class="blog-nav-item" href="study.php">最近学习</a>
            <a class="blog-nav-item" href="recommand.php">动漫推介</a>
            <a class="blog-nav-item active" href="#">关于网站</a>
             <a class="blog-nav-item" >
             <?php  
              if(!empty($_SESSION['user_info']['username'])){
                echo "欢迎 ,".$_SESSION['user_info']['username'];?> 
                </a><a class="blog-nav-item"  href="php/logout.php">登出</a> <?php
              }
              else{
                echo "欢迎 ,游客";?>
                </a><a class="blog-nav-item"  href="index.html">登陆</a> <?php
              } 
              ?>  
          </nav>
        </div>
    </div>
    <hr>

    <div class="container">

        <h1 class="blog-title">关于本网站</h1>
        <p class="blog-description"><strong>此网站建立于2017/5/17供作者摸鱼自省用。。。</strong></p>
        <hr>
        <div class="row">
            <div class="col-sm-5 about-main">
                <p class="blog-main">并无什么特别之处</p>
            </div>
        </div>
        
        <div class="row" style="display:flex">

          <!-- 自我介绍 -->
          <div class="col-sm-12 ">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title" style="color:white">个人简介</h3>
                </div>
                <div class="panel-body">
                <div class="col-sm-2">
                  <img src="img/me.jpg" alt="this is me" style="width: 100px;height: 100px">
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li>Name:wendyltanpcy</li>
                        <li>Phone:18211524179</li>
                        <li>Address:JNU dorm3</li>
                        <li>Date of Birth:96/</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                  <well>
                      此网站只是心血来潮自行制作，没有什么技术含量。
                      只是以前玩bootstrap的时候没弄出什么，就弄了一个这个东西来解解馋。
                      果然前端难起来也不简单啊hhh。
                      有什么bug再告诉我吧~顺带一提我只是github萌新<br>
                      <strong>Contact me: youlinai233@gmail.com<br>b站：柚璃奈奈子</strong>
                  </well>
                </div>
                </div>


                <div class="panel-footer">author:wendy <a href="https://github.com/wendyltan">Mygithub</a></div>
              </div>
            </div>
            </div>

            <div class="row" style="display:flex">
            <!-- 最近推荐 -->
            <div class="col-sm-12 ">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title" style="color:white">最近推荐</h3>
                </div>
                <div class="panel-body">
          
                  <div class="col-sm-12">
                       <div class="list-group">
                      <a href="http://bbs.qter.org/forum.php?mod=viewthread&tid=193" class="list-group-item">
                        <h4 class="list-group-item-heading">Qt快速入门</h4>
                        <p class="list-group-item-text"> 该系列教程是基于QtCreator开发环境的Qt入门级教程。自2009年10月至今的两年多时间里，该系列教程逐渐完善，已经包含了Qt基础、2D绘图、数据库和XML、网络编程、Qt Quick等最基本和最常用的知识点。从该系列教程中衍生出的Qt专题教程和Qt系列开源软件，分别对特定应用领域进行了综合的讲解和应用。现在，该系列教程的访问量已经超过百万，基于该系列教程的《Qt Creator快速入门》和《Qt及Qt Quick开发实战精解》两本书籍已经出版。</p>
                      </a>
                       <a href="https://deerchao.net/tutorials/regex/regex.htm#greedyandlazy" class="list-group-item">
                        <h4 class="list-group-item-heading">正则表达式30分钟入门</h4>
                        <p class="list-group-item-text">30分钟内让你明白正则表达式是什么，并对它有一些基本的了解，让你可以在自己的程序或网页里使用它。</p>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="panel-footer">author:wendy</div>
              </div>
            </div>
            </div>  


    </div>



    <footer class="blog-footer">
      <p>Copyright © 2017 wendyltanpcy's own website. All Rights Reserved</p>
      <p>
        <a href="#top">Back to top</a>
      </p>
    </footer>

   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php } ?>