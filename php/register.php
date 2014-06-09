<!doctype html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="../img/logo_title.ico">
<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> <![endif]-->
<title>Register for credIT.</title>
</head>

<body id="home">
<div class="container"> 
  
  <!--top header-->
  <div class="btn-toolbar">
    <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">请选择语言<span class="caret" /></a>
      <ul class="dropdown-menu">
        <li><a href="index.php" id="zh">中文</a></li>
        <li><a href="../en/index.php" id="en">English</a></li>
      </ul>
    </div>
    <div class="pull-right"><a class="btn" data-toggle="modal" data-target="#login"> 登陆 </a> </div>
  </div>
  
  <!--header-->
  <div>
    <h1 class="page-header col-md-12"> <img src="../img/logo.png"> 信用网络<small> 信用卡信息平台 </small></h1>
  </div>
  <div class="row"> 
    <div class="col-md-6">
      <div class="row clearfix">
        <ul class="nav nav-tabs nav-justified" id="tabs">
          <li  class="active"> <a href="#personal" data-toggle="tab"> 个人用户注册 </a></li>
          <li> <a href="#corporation" data-toggle="tab"> 银行用户注册 </a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active fade in" action="personal_register.php" method="post" id="personal">
          <form action="personal_register.php" method="post">
            <div class="page-header">
              <div class="input-group"> <span class="input-group-addon"> 请输入用户姓名 </span>
                <input type="text" class="form-control" name="p_name" placeholder="Username">
              </div>
              <br />
              <div class="input-group"> <span class="input-group-addon"> 请输入常用邮箱 </span>
                <input type="text" class="form-control" name="p_email" placeholder="Email address">
              </div>
              <br />
              <div class="input-group"> <span class="input-group-addon"> 请输入登陆密码 </span>
                <input type="text" class="form-control" name="p_password" placeholder="Password">
              </div>
              <br />
              <div class="input-group"> <span class="input-group-addon"> 请再次输入密码 </span>
                <input type="text" class="form-control" name="p_password_2" placeholder="Password again">
              </div>
              <br />
            </div>
            <div class="col-md-12"> <br />
              <input class="btn btn-primary col-md-5 pull-left" type="submit" name="forget" value="忘记密码？" /> 
              <input class="btn btn-primary col-md-5 pull-right" type="submit" name="p_register" value="注册" /> 
            </div>
           </form>
          </div>
          <div class="tab-pane fade" id="corporation">
            <div class="page-header">
              <div class="input-group"> <span class="input-group-addon"> 请输入银行名称 </span>
                <input type="text" class="form-control" placeholder="Bank name">
              </div>
              <br />
              <div class="input-group"> <span class="input-group-addon"> 请输入官方邮箱 </span>
                <input type="text" class="form-control" placeholder="Official email address">
              </div>
              <br />
              <div class="input-group"> <span class="input-group-addon"> 请输入登陆密码 </span>
                <input type="text" class="form-control" placeholder="Password">
              </div>
              <br />
              <div class="input-group"> <span class="input-group-addon"> 请再次输入密码 </span>
                <input type="text" class="form-control" placeholder="Password again">
              </div>
              <br />
            </div>
            <div class="col-md-12"> <br />
              <span class="btn btn-primary col-md-5 pull-left"> 忘记密码？ </span> <span class="btn btn-primary col-md-5 pull-right"> 注册 </span> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6"> <br />
      <br />
      <br />
      <div class="col-md-6"> <img src="../img/logo_bg.png"> </div>
    </div>
  </div>
</div>
<!--other sites-->
<div class="container">
  <div class="col-md-12">
    <h4 class="page-header"><small> 友情链接 </small></h4>
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
        <button type="button" class="btn btn-primary"> 注册 </button>
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