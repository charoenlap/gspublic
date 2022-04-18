<div id="ct-js-wrapper" class="ct-pageWrapper">
    <div id="slick-main" data-arrows="false" data-dots="false" data-height="70%" data-draggable="false" data-fade="true" class="ct-slick ct-js-slick ct-slick--main ct-u-background--accent">
        <!-- <div data-background="uploads/bg3.jpg" class="ct-header item"></div> -->
        <?php foreach($banners as $val){ ?>
        <div data-light class="ct-header item ct-u-background--gray-lighter" style="    background-image: url(assets/images/demo-content/header-bg.jpg);
    background-position: center;
    background-size: cover;">
            <div class="inner">
                <div class="container">
                    <div class="row ct-product">
                        <div class="col-sm-8 hidden-xs">
                            <img src="uploads/content/<?php echo $val['cover']; ?>" alt="" class="ct-product__img">
                        </div>
                        <div class="col-sm-4 ct-u-padding-top-40">
                            <h3 class="ct-u-margin-bottom-20"><span><?php echo $val['title']; ?></span></h3>
                            <div style="color:#fff;"><?php echo mb_strimwidth(strip_tags($val['detail']), 0, 100, "..."); ?></div>
                            <div class="ct-separator ct-u-padding-both-0 ct-u-margin-bottom-30"></div>
                            <a style="color:#fff;" href="<?php echo route('home/blogDetail&id='.$val['id']); ?>" class="btn btn-accent-o ">ดูรายละเอียด
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="container ct-u-background--accent">
        <div data-arrows="true" data-items-md="4" data-items-sm="3" data-items-xs="2" data-asNavFor="#slick-main" data-focusOnSelect="true" class="ct-slick ct-js-slick ct-slick--thumbs">
            <?php foreach($banners as $val){ ?>
            <div class="item">
                <div class="inner">
                    <img src="uploads/content/<?php echo $val['cover']; ?>" alt=""><span><?php echo $val['title']; ?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
    <section id="coming-next" data-background="assets/images/demo-content/bg-1.jpg" data-parallax="35" class="ct-u-padding-both-40 ct-u-background--black ct-u-mask">
        <div class="container">
            <h2 class="ct-section-header">โปรแกรมถัดไป</h2>
            <?php 
                $event = $event; 
                $date=date_create($event['date_start']); 
                $date2=date_create();
                $diff=date_diff($date,$date2);
            ?>
            <div class="row ct-u-padding-bottom-60">
                <div class="col-md-6">
                    <div class="ct-event-box media">
                        <div class="media-left">
                            <div class="ct-event-box__day"><?php echo date_format($date,"d");?></div>
                            <div class="ct-event-box__month"><?php echo date_format($date,"M");?></div>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $event['title'];?> </h3> 
                            <h3><span><?php echo $event['location'];?></span></h3>
                            <?php echo mb_strimwidth(strip_tags($event['detail']), 0, 100, "..."); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-right text-center-md text-center-sm text-center-xs">
                    <div class="ct-u-padding-top-40 hidden-lg"></div>
                    <div  class="ct-countdown">
                        <h6>นับถอยหลัง</h6>
                        <div><span class=""><?php echo $diff->format("%d"); ?></span>
                            <div class="ct-countdown__text">วัน</div>
                        </div>
                        <div><span class=""><?php echo $diff->format("%H"); ?></span>
                            <div class="ct-countdown__text">ชั่วโมง</div>
                        </div>
                        <div><span class=""><?php echo $diff->format("%m"); ?></span>
                            <div class="ct-countdown__text">นาที</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ct-action-link__wrapper">
                <a href="<?php echo route('home/pageDetail&id='.$event['id']); ?>" class="ct-action-link">
                    <span class="ct-action-link__text-left">คลิกที่นี่</span>
                    <span class="ct-action-link__icon"><i class="fa fa-angle-double-down"></i></span>
                    <span class="ct-action-link__text-right">ดูรายละเอียดเพิ่มเติม</span>
                </a>
            </div>
        </div>
    </section>
    <div id="continue" class="ct-u-scratches--both">
        <div class="container">
            <h2 class="ct-section-header">gosport.world<span> ครบเครื่องเรื่องกีฬา</span></h2>
            <div class="ct-action-link__wrapper"><a href="#" data-scroll="#coming-next" class="ct-action-link"><span class="ct-action-link__text-left">สมัครสมาชิก</span><span class="ct-action-link__icon"><i class="fa fa-angle-double-down"></i></span><span class="ct-action-link__text-right">ดูถ่ายทอดสด</span></a>
            </div>
        </div>
    </div>
    <section id="why-choose" data-background="assets/images/demo-content/bg-12.jpg" class="ct-u-background--black ct-u-scratches--top ct-u-scratches--dark">
        <div class="container">
            <h2 class="ct-section-header"><span> สนับสนุน</span> โดย</h2>
            <div class="row text-center-md">
                <div class="col-md-12 ct-u-padding-both-40">
                    <img src="uploads/poster.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="blog-section" class="ct-u-scratches--top ct-u-padding-top-100">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-9 col-sm-7">
                    <h3 class="ct-section-title">ข่าวสาร</h3>
                </div>
                <div class="col-lg-3 col-sm-5">
                    <div class="ct-slider-nav"><a href="#" class="ct-slider-nav__link">ดูทั้งหมด</a>
                        <div class="ct-slider-nav__buttons"></div>
                    </div>
                </div>
                <div class="col-xs-12 hidden-xs ct-u-padding-bottom-60"></div>
            </div>
            <div class="row ct-u-padding-top-40">
                <div data-items-lg="3" data-items-sm="2" class="ct-slick ct-js-slick ct-slick--arrows-custom">
                    <?php foreach($blogs as $val){ ?>
                    <article class="ct-blog-post">
                        <div class="ct-blog-post__body media">
                            <div class="media-left">
                                <?php $date=date_create($val['date_create']); ?>
                                <div class="ct-blog-post__day"><?php echo date_format($date,"d");?></div>
                                <div class="ct-blog-post__month"><?php echo date_format($date,"M");?></div>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="<?php echo route('home/blogDetail&id='.$val['id']); ?>" class="title">
                                        <?php echo $val['title']; ?>
                                    </a>
                                    <small>โดย<a href="#">ผู้ดูแลระบบ </a></small>
                                </h3>
                                <p><?php echo $val['detail']; ?></p>
                            </div>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="ct-u-padding-bottom-100 hidden-xs"></div>
    </section>
    <!-- Footer-->
    
</div>