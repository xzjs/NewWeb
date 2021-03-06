<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>国际农联网</title>

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
                <li class="<?php echo ($class1); ?>"><a href="/newweb/index.php">首页 <span class="sr-only">(current)</span></a></li>
                <li class="<?php echo ($class2); ?>"><a href="<?php echo U('Purchase/index');?>">商品采购</a></li>
                <li class="<?php echo ($class3); ?>"><a href="<?php echo U('Support/index');?>">商品供应</a></li>
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
                           aria-expanded="false"><?php echo session('user')['name'];?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">我的订单</a></li>
                            <li><a href="/newweb/index.php/Home/Index/mysupport">我的供应</a></li>
                            <li><a href="/newweb/index.php/Home/Index/company">我的公司</a></li>
                            <li><a href="<?php echo U('User/logout');?>">注销</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li><a href="<?php echo U('User/login');?>">登录</a></li>
                    <li><a href="<?php echo U('User/register');?>">注册</a></li><?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    
</div>
</body>
</html>