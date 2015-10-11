<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/newweb/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/newweb/Public/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="http://fonts.useso.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="/newweb/Public/css/hosting.css" rel="stylesheet" media="all">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/newweb/Public/js/bootstrap.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/newweb/index.php/Home/Index">国际农联网</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/newweb/index.php/Home/Index">首页 <span class="sr-only">(current)</span></a></li>
                <li><a href="/newweb/index.php/Home/Index/buy">商品采购</a></li>
                <li><a href="/newweb/index.php/Home/Index/support">商品供应</a></li>
                <li><a href="#">今日行情</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['user'])): ?><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?php echo ($_SESSION['user']["email"]); ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">我的订单</a></li>
                            <li><a href="/newweb/index.php/Home/Index/mysupport">我的供应</a></li>
                            <li><a href="/newweb/index.php/Home/Index/company">我的公司</a></li>
                            <li><a href="#">注销</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li><a href="/newweb/index.php/Home/Index/login">登录</a></li>
                    <li><a href="/newweb/index.php/Home/Index/register">注册</a></li><?php endif; ?>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <style type="text/css">
    body {
        font-family: 'microsoft yahei', Arial, sans-serif;
        color: #898989;
    }

    .shape {
        border-style: solid;
        border-width: 0 80px 80px 0;
        float: right;
        height: 0px;
        width: 0px;
        -ms-transform: rotate(360deg); /* IE 9 */
        -o-transform: rotate(360deg); /* Opera 10.5 */
        -webkit-transform: rotate(360deg); /* Safari and Chrome */
        transform: rotate(360deg);
    }

    .speical {
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        margin: 15px 0;
        overflow: hidden;
    }

    .speical:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: rotate scale(1.1);
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .shape {
        border-color: rgba(255, 255, 255, 0) #669933 rgba(255, 255, 255, 0) rgba(255, 255, 255, 0);
    }

    .speical-default {
        border: 1px solid #3399CC;
    }

    .speical-radius {
        border-radius: 5px;
    }

    .shape-text {
        color: #fff;
        font-size: 14px;
        position: relative;
        right: -45px;
        top: 2px;
        white-space: nowrap;
        -ms-transform: rotate(45deg); /* IE 9 */
        -o-transform: rotate(45deg); /* Opera 10.5 */
        -webkit-transform: rotate(45deg); /* Safari and Chrome */
        transform: rotate(45deg);
    }

    .text-special-default {
        color: #3399CC;
    }

    .speical-content {
        padding: 0 20px 10px;
    }
</style>
<div class="panel panel-success">
    <div class="panel-heading">商品采购</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#">
                    <div class="speical speical-default speical-radius">
                        <div class="shape">
                            <div class="shape-text">
                                促销
                            </div>
                        </div>
                        <div class="speical-content">
                            <h3 class="text-special-default">
                                苹果
                            </h3>

                            <p>
                                <img class="img-responsive img-rounded"
                                     src="/newweb/Public/img/pg.jpg" alt="MI">
                            </p>

                            <p>
                                超大64G ~ 仅售1880元
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>