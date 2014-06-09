<!doctype html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="../img/logo_title.ico">
<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> <![endif]-->
<title>Welcome to credIT!</title>
</head>

<body id="home">
<div class="container"> 
  
  <!--top header-->
  <div class="btn-toolbar">
    <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">请选择语言<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="index.php" id="zh">中文</a></li>
        <li><a href="../en/index.php" id="en">English</a></li>
      </ul>
    </div>
    <div class="pull-right"><a class="btn" data-toggle="modal" data-target="#login"> 登陆 </a> <a href="../php/register.php" class="btn"> 注册 </a> </div>
  </div>
  
  <!--header-->
  <div class="row clearfix">
    <h1 class="page-header col-md-8"> <img src="../img/logo.png"> 信用网络<small> 信用卡信息平台 </small></h1>
    <div class="row">
      <div class="col-sm-4"> <br />
        <br />
        <br />
        <br />
        <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-btn">
          <button class="btn btn-primary" type="button">Search</button>
          </span> </div>
      </div>
    </div>
  </div>
  <div class="tabbable"> </div>
  <div class="container"> 
    <!--tab title-->
    <ul class="nav nav-tabs nav-justified" id="tabs">
      <li class="active"><a href="#homepage" data-toggle="tab"> 欢迎 </a></li>
      <li><a href="#credit" data-toggle="tab"> 信用卡 </a></li>
      <li><a href="#sale"  data-toggle="tab"> 优惠信息 </a></li>
      <li><a href="http://www.bankofchina.com/pbservice/" target="_blank"> 个人金融 </a></li>
      <li><a href="http://www.bankofchina.com/cbservice/" target="_blank"> 公司金融 </a></li>
      <li><a href="http://www.bankofchina.com/fimarkets/" target="_blank"> 金融市场 </a></li>
      <li><a href="#us"  data-toggle="tab"> 关于我们 </a></li>
    </ul>
    <div class="tab-content"> 
      
      <!--homepage slide-->
      <div class="tab-pane active fade in" id="homepage"> <br />
        <br />
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active"> <img src="../img/homepage_slide_1.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> 夏兴万物竟生长 </h6>
              </div>
            </div>
            <div class="item"> <img src="../img/homepage_slide_2.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> 中行信用卡返现 </h6>
              </div>
            </div>
            <div class="item"> <img src="../img/homepage_slide_3.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> 中行网银赢好礼 </h6>
              </div>
            </div>
            <div class="item"> <img src="../img/homepage_slide_4.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> 中行跨境业务 </h6>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
      </div>
      
      <!--credit card-->
      <div class="tab-pane fade" id="credit">
        <div class="row">
          <div class="col-md-4">
            <h4 class="page-header"> <img src="../img/bocm_logo.gif"> 交通银行信用卡 </a> <br />
              <small> 服务网点多 申请量大 </small> </h4>
            <p> <a href="http://creditcard.bankcomm.com/content/pccc/index.html"> <img src="../img/bocm_hsbc.jpg"> </a> </p>
          </div>
          <div class="col-md-4">
            <h4 class="page-header"> <img src="../img/citic_logo.gif"> 中信银行信用卡 <br />
              <small> 发卡快 </small> </h4>
            <p> <a href="http://cards.ecitic.com/"> <img src="../img/citic_txw.jpg"> </a> </p>
          </div>
          <div class="col-md-4">
            <h4 class="page-header"> <img src="../img/cmb_logo.gif"> 招商银行信用卡 <br />
              <small> 新客户申请 轻松预约 上门办卡 </small> </h4>
            <p> <a href="http://ccclub.cmbchina.com/ccclubnew/"> <img src="../img/cmb_young.jpg"> </a> </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4 class="page-header"> <img src="../img/ceb_logo.gif"> 光大银行信用卡 </a> <br />
              <small> 10元缤纷优惠 欢乐无限 </small> </h4>
            <p> <a href="http://xyk.cebbank.com/"> <img src="../img/ceb.jpg"> </a> </p>
          </div>
          <div class="col-md-4">
            <h4 class="page-header"> <img src="../img/aboc_logo.gif"> 农业银行信用卡 <br />
              <small> 办卡轻松便捷 优惠活动多 </small> </h4>
            <p> <a href="http://www.95599.cn/cn/CreditCard/"> <img src="../img/aboc.jpg"> </a> </p>
          </div>
          <div class="col-md-4">
            <h4 class="page-header"> <img src="../img/cib_logo.gif"> 兴业银行信用卡 <br />
              <small> 可申卡城市最多 最便捷 </small> </h4>
            <p> <a href="http://creditcard.cib.com.cn/index.html"> <img src="../img/cib_hs.jpg"> </a> </p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="sale">
        <div class="row clearfix">
          <div class=""> </div>
        </div>
      </div>
      <div class="tab-pane fade" id="us"> <br />
        <h3> This is a project of Introduction to Database. </h3>
      </div>
    </div>
  </div>
</div>

<!--other sites-->
<div class="container">
  <div>
    <h4 class="page-header"><small> 友情链接 </small> </h4>
    <p> <a href="http://bbs.51credit.com/" name="51card" class="btn"> <small> 我要信用卡论坛 </small> </a> <a href="http://data.bank.hexun.com/card/yhxx/xinxi.aspx" name="hexun" class="btn"> <small> 和讯信用卡频道 </small> </a> <a href="http://fudan.edu.cn/" name="fudan" class="btn"> <small> 复旦大学 </small> </a> </p>
    <p class="pull-right" >Copyright reserved by Neo Wong.</p>
  </div>
</div>

<!--login dialog-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"> 用户登陆 </h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="exampleInputEmail1"> 用户名 </label>
            <input type="email" class="form-control" id="login_email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"> 密码 </label>
            <input type="password" class="form-control" id="login_password" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">
        <a href="register.php"> 注册新用户 </a>
        </button>
        <button type="button" class="btn btn-primary"> 登陆 </button>
      </div>
    </div>
  </div>
</div>
<script src="../js/jquery-2.1.1.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script> 
  $('#tabs a').click(function (e) {     
  e.preventDefault()    
  $(this).tab('show')   
}) 
  $('.carousel').carousel()
</script>
</body>
</html>