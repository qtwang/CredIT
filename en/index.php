<!doctype html>
<html lang="en">
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
    <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Language <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="index.php" id="zh">中文</a></li>
        <li><a href="../en/index.php" id="en">English</a></li>
      </ul>
    </div>
    <div class="pull-right"><a class="btn" data-toggle="modal" data-target="#login"> Login </a> <a href="../php/register.php" class="btn"> Register </a> </div>
  </div>
  
  <!--header-->
  <div class="row clearfix">
    <h1 class="page-header col-md-8"> <img src="../img/logo.png"> CredIT<small> All about your credit card. </small></h1>
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
      <li class="active"><a href="#homepage" data-toggle="tab"> Welcome! </a></li>
      <li><a href="#credit" data-toggle="tab"> Credit card </a></li>
      <li><a href="#sale"  data-toggle="tab"> On sale </a></li>
      <li><a href="http://www.bankofchina.com/pbservice/" target="_blank"> Persional financial </a></li>
      <li><a href="http://www.bankofchina.com/cbservice/" target="_blank"> Corporational financial </a></li>
      <li><a href="http://www.bankofchina.com/fimarkets/" target="_blank"> Financial market </a></li>
      <li><a href="#us"  data-toggle="tab"> About us </a></li>
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
                <h6> Summer </h6>
              </div>
            </div>
            <div class="item"> <img src="../img/homepage_slide_2.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> Return </h6>
              </div>
            </div>
            <div class="item"> <img src="../img/homepage_slide_3.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> Present </h6>
              </div>
            </div>
            <div class="item"> <img src="../img/homepage_slide_4.jpg" alt="978*288">
              <div class="carousel-caption">
                <h6> Border </h6>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
      </div>
      
      <!--credit card-->
      <div class="tab-pane fade" id="credit">
        <h3> Underbuilding... </h3>
      </div>
      <div class="tab-pane fade" id="sale">
        <h3> Underbuilding... </h3>
      </div>
      <div class="tab-pane fade" id="us"> <br />
        <h3> The project of Introduction to Database. </h3>
      </div>
    </div>
  </div>
</div>

<!--other sites-->
<div class="container">
  <div>
    <h4 class="page-header"><small> Linkers </small> </h4>
    <p> <a href="http://bbs.51credit.com/" name="51card" class="btn"> <small> 51Card </small> </a> <a href="http://data.bank.hexun.com/card/yhxx/xinxi.aspx" name="hexun" class="btn"> <small> Hexun </small> </a> <a href="http://fudan.edu.cn/" name="fudan" class="btn"> <small> Fudan University </small> </a> </p>
    <p class="pull-right" >Copyright reserved by Neo Wong.</p>
  </div>
</div>

<!--login dialog-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"> Login </h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="exampleInputEmail1"> Username </label>
            <input type="email" class="form-control" id="login_email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"> Password </label>
            <input type="password" class="form-control" id="login_password" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">
        <a href="register.php"> Register </a>
        </button>
        <button type="button" class="btn btn-primary"> Login </button>
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