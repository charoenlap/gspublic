<!DOCTYPE html>
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html><![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html><![endif]-->
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon.png">
    <title>gosport.world</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css?time=<?php echo time();?>">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src="assets/js/es5-shim.min.js"></script><![endif]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <style>
        div,p,a,li,span,h1,h2,h3,h4,h5,h6 {
            font-family: 'Kanit', sans-serif !important ;
        }
    </style>
</head>

<body data-spy="scroll" class="cssAnimate page-white">
    <nav class="ct-menu">
        <div class="navbar navbar-fixed text-center navbar-inverse " style="    background: #fff !important;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="<?php echo route('home'); ?>" class="navbar-brand">
                        <img src="uploads/gosportlogo.png" alt="" style="height:43px;" class="logo-default">
                        <img src="uploads/gosportlogo.png" alt="" style="height:43px;" class="logo-inverse">
                    </a>
                </div>
                <ul class="ct-socials list-inline list-unstyled pull-left">
                    <li class="ct-socials__item--facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="ct-socials__item--twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="ct-socials__item--instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="ct-menu-icons pull-right">
                    <li class="ct-search-toggle"><a href="#" class="ct-icon"><i class="fa fa-search"></i></a>
                    </li>
                    <li class="ct-mobile-toggle"><a href="#" class="ct-icon"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="<?php echo route('home');?>">หน้าหลัก</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo route('home/calendar');?>">ตรางเวลา</a>
                    </li>
                    <li role="presentation" class="dropdown nav-item"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">บทความ & ข่าวสาร<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo route('home/blog'); ?>">ข่าวสาร</a>
                            </li>
                            <li><a href="<?php echo route('home/terms'); ?>">ข้อตกลงการใช้บริการ</a>
                            </li>
                            <li><a href="<?php echo route('home/privacy'); ?>">นโยบายความเป็นส่วนตัว</a>
                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown nav-item"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">มวย<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach($muay as $val){ ?>
                                <li><a href="<?php echo route('home/page&id='.$val['id']);?>"><?php echo $val['title'];?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown nav-item"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">ไก่ชน<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach($kai as $val){ ?>
                                <li><a href="<?php echo route('home/page&id='.$val['id']);?>"><?php echo $val['title'];?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown nav-item"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">แพคเกจ<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach($package as $val){ ?>
                                <li><a href="<?php echo route('home/package&id_package='.$val['id']);?>"><?php echo $val['title'];?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                    <li class="nav-item"><a href="<?php echo route('home/contact'); ?>">ติดต่อเรา</a>
                    </li>
                    <li role="presentation" class="dropdown nav-item"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">สมาชิก <?php echo $username; ?><span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <?php if($username){ ?>
                            <li><a href="<?php echo route('member/historyPayment');?>">ประวัติการชำระเงิน</a>
                            </li>
                            <li><a href="<?php echo route('member/historyView');?>">ประวัติการดู</a>
                            </li>
                            <li><a href="<?php echo route('member/logout');?>">ออกจากระบบ</a>
                            </li>
                            <?php }else{?>
                            <li><a href="<?php echo route('member/register'); ?>">สมัครสมาชิก</a>
                            </li>
                            <li><a href="<?php echo route('member/login'); ?>">เข้าสู่ระบบ</a>
                            </li>
                            <!-- <li><a href="<?php echo route('member/forgot'); ?>">ลืมรหัสผ่าน</a>
                            </li> -->
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="ct-navbar-mobile">
        <img src="uploads/gosportlogo.png" alt="Gosport" style="height:50px;">
        <ul class="list-inline pull-right">
            <li class="ct-search-toggle"><a href="#" class="ct-icon"><i class="fa fa-search"></i></a>
            </li>
            <li class="ct-mobile-toggle"><a href="#" class="ct-icon"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
            </li>
        </ul>
    </div>
    <div id="nav-search">
        <div class="inner">
            <form class="ct-search form-group">
                <input id="nav-search-input" placeholder="ค้นหา..." required="required" name="field[]" class="form-control" />
                <label for="nav-search-input" class="sr-only">ค้นหา...</label>
                <button type="submit"><i class="fa fa-search"></i>
                </button>
            </form>
            <button id="nav-search-close"><i class="fa fa-close"></i>
            </button>
        </div>
    </div>