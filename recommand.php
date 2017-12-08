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
    <title>recommand page</title>

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
            <a class="blog-nav-item" href="study.php">最近学习</a>
            <a class="blog-nav-item active" href="#">动漫推介</a>
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

    <div class="alert alert-warning text-center" role="alert">此推荐仅根据网站所有者喜好选择</div>



    <div class="container">
      <div class="row" style="padding: 30px ;background-color: #f5f5dc;">
        
        <div class="col-sm-3 recommand-image">
          <div class="img-responsive">
            <img src="img/埃罗芒阿老师.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-8 col-sm-push-1 recommand-text">
          <h1 class="recommand-title">-埃罗芒阿老师-</h1>
          <p class="text-info"><bold>声优：</bold>松岡禎丞 、藤田茜 、高橋未奈美 、大西沙織 、木戸衣吹 、石川由依</p>
          <hr>
          <p class="text-info"><bold>简介：</bold>
          高中生兼小说作家的“和泉正宗”（笔名：和泉征宗）有个家里蹲的妹妹“和泉纱雾”。一年前才成为家人的她，却完全不走出居室，并也用力踩踏地板，要我帮她准备食物。为了这段称不上“兄妹”的关系，正宗得想个办法让她自己走出居室才行，因为两人已是目前仅存能相依为命的“家人”……至于正宗的搭挡插画家“情色漫画老师”，是个能够画出非常棒煽情图的可靠伙伴。虽然双方并没见过面，但我一直很感谢他！只是在某一天，正宗突然发现到一个冲击事实，那就是“情色漫画老师”其实就是纱雾！？</p>
          <hr>
          <span class="glyphicon glyphicon-log-in" ><a href="http://bangumi.bilibili.com/anime/5997">   传送门</a></span>
          
        </div>
        
      </div>      

    </div>

    <hr style="width:970px">

    <div class="container">
      <div class="row" style="padding: 30px ;background-color: #f5f5dc;">
        
        <div class="col-sm-3 recommand-image">
          <div class="img-responsive">
            <img src="img/自由之翼.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-8 col-sm-push-1 recommand-text">
          <h1 class="recommand-title">-自由之翼-</h1>
          <p class="text-info"><bold>声优：</bold> 梶裕贵 、石川由依 、井上麻里奈 、谷山纪章 、嶋村侑 、小林优 、下野纮 、逢坂良太 、细谷佳正 、桥诘知久 、藤田咲 、三上枝织 、神谷浩史 、小野大辅 、</p>
          <hr>
          <p class="text-info"><bold>简介：</bold>自从人类的和平被超大型巨人打破的那天起，艾伦·耶格尔便每天持续着没有尽头的战斗...。 因为眼睁睁看着母亲被巨人撕裂，艾伦发誓要将世间的巨人一只不留地杀灭。 但是，在严酷的战斗中，艾伦自身也会变成巨人的姿态——。 为了人类的自由，艾伦施展着巨人的力量，并和女人型的巨人发生了冲突。 巨人间的战斗中艾伦最终得以胜出。 巨人不断地造访，下一轮的战斗已经宣告开始。 对于接连而来的巨人，人类将如何去面对！？</p>
          <hr>
          <span class="glyphicon glyphicon-log-in" ><a href="http://bangumi.bilibili.com/anime/5970">   传送门</a></span>
        </div>
        
      </div>      

    </div>

    <hr style="width:970px">

    <div class="container">
      <div class="row" style="padding: 30px ;background-color: #f5f5dc;">
        
        <div class="col-sm-3 recommand-image">
          <div class="img-responsive">
            <img src="img/小魔女学园.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-8 col-sm-push-1 recommand-text">
          <h1 class="recommand-title">-小魔女学园-</h1>
          <p class="text-info"><bold>声优：</bold> 潘めぐみ 、村瀬迪与 、折笠富美子 、日笠陽子 、日高のり子 、志田有彩 、村川梨衣 、上田麗奈</p>
          <hr>
          <p class="text-info"><bold>简介：</bold>自从幼年目睹夏依妮·莎莉温的魔法表演后，梦想成为魔女的亚可，进入了与莎莉温相同的传统魔女育成名门校“新月学园”。 新的城镇，新的学校生活，以及新遇到的朋友。魔女学校中的扫帚飞行课程以及充满魔法气息的不可思议的授课等等，在这些只有魔女学校中才有的课程当中，亚可与洛蒂、苏西等人引发了大骚动！ 将新月学园卷入其中，亚可成为魔女的第一步就此开始——</p>
          <hr>
          <span class="glyphicon glyphicon-log-in" ><a href="http://bangumi.bilibili.com/anime/5788">   传送门</a></span>
        </div>
        
      </div>      

    </div>

    <hr style="width:970px">


    <div class="container">
      <div class="row" style="padding: 30px ;background-color: #f5f5dc;">
        
        <div class="col-sm-3 recommand-image">
          <div class="img-responsive">
            <img src="img/笑面推销员.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-8 col-sm-push-1 recommand-text">
          <h1 class="recommand-title">-笑面推销员-</h1>
          <p class="text-info"><bold>声优：</bold> 玄田哲章</p>
          <hr>
          <p class="text-info"><bold>简介：</bold>本次的TV动画版保存了原作的风格，并以单个故事1话完结的形式，合成现代版「笑面推销员」。在这个充满压力的社会有着各种烦恼的嘉宾角色会在各话登场，也将有豪华的声优阵容。藤子(A)表示「我年纪已经老了很多，但丧黑却越来越容光焕发。他这次又将如何表现!?让我们拭目以待!」</p>
          <hr>
          <span class="glyphicon glyphicon-log-in" ><a href="http://bangumi.bilibili.com/anime/5951">   传送门</a></span>
        </div>
        
      </div>      

    </div>

    <hr style="width:970px">

    <div class="container">
      <div class="row" style="padding: 30px ;background-color: #f5f5dc;">
        
        <div class="col-sm-3 recommand-image">
          <div class="img-responsive">
            <img src="img/樱花任务.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-8 col-sm-push-1 recommand-text">
          <h1 class="recommand-title">-樱花任务-</h1>
          <p class="text-info"><bold>声优：</bold> 七瀬彩夏 、上田麗奈 、安済知佳 、田中ちえ美 、小松未可子 、斧アツシ 、濱野大輝 、下野紘 、小西克幸</p>
          <hr>
          <p class="text-info"><bold>简介：</bold>木春由乃是个从乡下前往东京，即将短大毕业的普通的二十岁女生。 “在东京一切皆有可能，既然这样自己也一定能成为特别的什么人吧”，怀着如此梦想的她接受了30多家公司的面试，但仍然没能得到内定。 银行的余额仅剩920日元。再这样下去的话，就要回到乡下当个普通的大妈了……就在如此纠结着的某一天，她收到了来自以前曾工作过的派遣事务所的委托：“作为地域小镇振兴的一环，希望你能来当国王”。 虽然不是很懂，但她怀着轻松的心情前往委托地点间野山市。 曾经在日本轰动一时，但随着泡沫崩溃而几乎完全失去往昔繁荣的迷你独立国。 间野山市现在仍然持续经营着这样的迷你独立国，是一个已经荒废到令人无比遗憾的观光地。 如此这般，由乃“并不普通”的工作生活便开始了。</p>
          <hr>
          <span class="glyphicon glyphicon-log-in" ><a href="http://bangumi.bilibili.com/anime/5992">   传送门</a></span>
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