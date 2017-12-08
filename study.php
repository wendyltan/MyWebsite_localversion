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
    <title>study page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"  href="css/blog.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- wendyltanpcy.xyz Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?94400b20bb803cd7e40939fc674e6103";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
  <body>
   <a name="top"></a>
    <div class="blog-masthead">
        <div class="container">
          <nav class="blog-nav">
            <a class="blog-nav-item" href="blog.php">博客主页</a>
            <a class="blog-nav-item active" href="#">最近学习</a>
            <a class="blog-nav-item" href="recommand.php">动漫推介</a>
            <a class="blog-nav-item" href="about.php">关于网站</a>
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

     <form action="http://www.baidu.com/baidu" target="_blank">
       <div class="input-group">
          <span class="input-group-btn"><input class="btn btn-default" type="submit" value="百度一下">
          </span>
          <input name=tn type=hidden = baidu> 
          <input type="text" name="word" class="form-control" value_maxlen="255" placeholder="search for...">
        </div><!-- /input-group -->
     </form>
              

  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" >
        <div class="item active" style="height:400px">
          <img class="first-slide" src="img/slide1.jpg" alt="First slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>多一度热爱</h1>
              <p class="lead">Imagination is more important than knowledge. Knowledge
                is limited. Imagination encircles the world.</p>
            </div>
          </div>
        </div>
        <div class="item" style="height:400px">
          <img class="third-slide" src="img/slide3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>对明天充满希望</h1>
              <p class="lead">Let your hopes not your hurts shape your future.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

  

  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:white">
          基于MFC的上位机界面开发<span class="badge">Strongly advice</span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        经过了很久的开发。啊大概从大二下开始弄了吧，最近差不多弄好了。总的来说还是学到了很多mfc的知识和一些数据库的东西
        还是获益匪浅的。无论项目最后怎么样我都一点也不后悔。这里附上<a href="https://github.com/wendyltan/railway_clean">传送门</a>用别人的控件类是真的很方便。我觉得自己手写一个控件是很愚蠢的，太浪费时间。这里推荐这个<em>GridCtrl</em>和
        <em>TeeChart</em>两个很方便的曲线图表绘制控件类
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:white">
          基于Java的Android开发<span class="badge">Latest stuff</span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       发现了很多有意思的东西。在实际去做一个项目的时候，能发现很多问题，比如控件长按或者拖动的响应，安卓7.0和6.0对权限控制的
       不同，看到代码有个叫做<code>FileProvider</code>以及<code>PermissionGen</code>处理拍照权限，以及使用<code>LitePal</code>对数据进行存储，个人认为比sql语句操作简单的多（果然orm最棒了）引入了许多外部的类，还在琢磨中。。github进度更新缓慢
       ，有灵感的时候会加一些东西吧。
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:white">
          基于bootstrap的网页开发<span class="badge">10</span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        就是现在这个网站。今后将慢慢完善加入更多功能。
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