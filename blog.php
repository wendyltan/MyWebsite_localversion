<?php //输入密码后访问本页内容
$password = "1312";//这里是密码 
$p = "";if(isset($_COOKIE["isview"]) and $_COOKIE["isview"] == $password){ 
$isview = true;}else{ 
if(isset($_POST["pwd"])){ 
if($_POST["pwd"] == $password){ 
setcookie("isview",$_POST["pwd"],time()+3600*3);$isview = true;}else{$p = (empty($_POST["pwd"])) ? "需要密码才能查看，请输入密码。" : "<div style=\"color:#555;\">密码不正确，请重新输入。</div>";} 
}else{$isview = false;$p = "请输入密码查看，获取密码可联系我。";}}?>
<?php if($isview){?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>blog page</title>

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
    <?php session_start();?>
    <a name="top"></a>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">博客主页</a>
          <a class="blog-nav-item" href="study.php">最近学习</a>
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

    <div class="container">

    <div class="blog-header">
      <h1 class="blog-title">Wendy's Blog</h1>
      <p class="lead blog-description">这是我的个人博客</p>
    </div>
      
  
  

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">第一条博客</h2>
            <p class="blog-post-meta">2017/5/17 <a name="first">wendy</a></p>

            <p class="lead">偶尔见到了免费主机便注册了一个域名，想开始着手尝试以前没有完成的网站博客（暂时静态）
            </p>
            <hr>

            <h3>关于公务员：</h3>
            <p>今天稍微上网查了下有关的公务员职位，大都是科员的啥的，又另外看了下别的，感觉还不是很了解呢，决定下次再好好详细了解，但大致知道考试流程是先<strong>笔试，体检，然后面试</strong>的</p>
            <p>在这里贴上国考职位表：<a href="http://gwyzhiwei.eol.cn/">国考职位表及查询</a></p>
            <hr>

            <h3>关于前端学习：</h3>
            <p>既然决定重新拾起，就要先从头梳理下要学习的东西：</p>
            <ul>
                <li>必备的前端知识比如css，html5</li>
                <li>bootstrap的细致用法</li>
                <li>结合php让网站更加好</li>
                <li>后期陆续增加必要的功能。。？</li>
            </ul>
            <hr>

            <h3><em>To do:</em></h3>
            <ol>
                <li>learn bootstrap</li>
                <li>learn php</li>
                <li>查知乎关于建站需要的知识储备</li>
            </ol>
            
          
          </div><!-- /.blog-post -->

           <div class="blog-post">
            <h2 class="blog-post-title">今天是个好日子</h2>
            <p class="blog-post-meta">2017/5/20 <a name="second">wendy</a></p>

            <p class="lead">她答应了我，很开心很开心。她的手很暖和
            </p>
            <hr>

            <h3>关于bootstrap：</h3>
            <p>总算找回了一点当年的感觉，，动漫推介那一页简直了，比以前好看多了。网易云课堂还是蛮有用的嘛
            笑</p>

            <hr>

            <h3>关于python爬虫：</h3>
            <p>乱的一笔，网上各种教程真的是太眼花缭乱了，但是根据棉芯推荐的和我想的，接下来可以看看：</p>
            <ul>
                <li><a href="http://blog.fishc.com/">鱼c的python爬虫教程</a></li>
            </ul>
            <hr>

            <h3>关于mfc：</h3>
            <p>虽然今天也没写新的类，不过就那样啦，，修改了课程作业到总算是完工的地步惹</p>
            <blockquote style="background-color: #282e33">附上链接：<a href="https://github.com/wendyltan/MyMFCprogram/tree/master/project1%20Editor%20and%20painter">传送</a></blockquote>

            
          
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">我的天这该死的路径隐藏和用户检验问题</h2>
            <p class="blog-post-meta">2017/5/30 <a name="third">wendy</a></p>

            <p class="lead">回家吃粽子是很开心啦？但是妈的<strong>口腔溃疡</strong>网站还一堆bug
            </p>
            <hr>

            <h3>狗php</h3>
            <p>完全忘记怎么弄了呜呜呜</p>

            <hr>

            <h3>关于这个网站：</h3>
            <p>还没有设计好关于页面的ui，登录验证页面也不知道怎么样，偷懒不想用数据库验证登录只想弄个验证码</p>
            
            <hr>

            <h3>py爬虫</h3>
            <p>又变成半桶水<del>弃坑</del>了。。</p>

            <span class="btn btn-default"><em>ps:估计最近会弃坑项目一段时间。。准备期末复习了</em></span>

            
          
          </div><!-- /.blog-post -->



           <div class="blog-post">
            <h2 class="blog-post-title">任风吹，任雨飘</h2>
            <p class="blog-post-meta">2017/7/19 <a name="fourth">wendy</a></p>

            <p class="lead">有的时候，出场顺序不同便决定你是个主角还是个死跑龙套
            </p>
            <hr>
          

            <h3>。。。</h3>
            <p>红红今天突然提起分手的事，我很意外。虽然知道我俩性格虽然算是互补，爱好并不多的事实，可是没想到还是发生了</p>
            <br>
            <p>说是前男友的原因么，我能理解。除了理解，我还能干什么呢。喜欢一个人就要尊重他的决定，希望她真正的幸福，那才是我觉得的真爱。</p>
            <br>
            <p>但是，还是好伤心。很久没哭了。心很累，知道不是自己的错，也知道自己没什么不对，但是自己怎么就这么没用，留不住一个喜欢的人</p>
            <br>
            <p>一个人，要照顾好自己</p>
            <p class="lead">我依然爱你</p>
            <button class="btn-sm btn-primary">60天的恋情</button><br>
            <button class="btn-sm btn-primary">很高兴曾经有你</button>
            
            <hr>

            


            
          
          </div><!-- /.blog-post -->



        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>关于</h4>
            <p>This is a website which is build casually by <em>wendy</em> as a studying project,which may be keep existing or not,depending on the lazy author</p>
          </div>
          <div class="sidebar-module">
            <h4>历史博客</h4>
            <ol class="list-unstyled">
              <li><a href="#first">2017/5/17</a></li>
              <li><a href="#second">2017/5/20</a></li>
              <li><a href="#third">2017/5/30</a></li>
              <li><a href="#fourth">2017/7/19</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>联系我</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/wendyltan">GitHub</a></li>
              <li>
              	<a href="https://www.facebook.com/people/%E5%90%B4%E6%96%87%E8%BF%AA/100011066403419">Facebook</a>
              </li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

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
<?php }else{?>
<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>加密页</title> 
<style type="text/css">body{background:none;}.passport{border:2px solid white;background-color:#555;width:400px;height:100px;position:absolute;left:49.9%;top:49.9%;margin-left:-200px;margin-top:-55px;font-size:14px;text-align:center;line-height:30px;color:white;}</style>
</head><body>
<div class="passport"><div style="padding-top:20px;"> 
<form action="" method="post" style="margin:0px;">输入查看密码 
<input type="password" name="pwd"  /> <input type="submit" value="查看" /> 
</form> 
<?php echo $p."<a href='youlinai233@gmail.com'>here</a>";?> 
</div></div> 
</body></html> 
<?php }?> 