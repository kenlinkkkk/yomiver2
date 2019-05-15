<?
date_default_timezone_set("Asia/Bangkok");
?>
<div class="clip-banner swiper-container swiper-container-horizontal padding-slide-mobile">
    <div class="swiper-wrapper" style="transform: translate3d(-10792px, 0px, 0px); transition-duration: 0ms;">

        <?
        $i = 0;
        foreach ($data_all_slide->result() as $row) { ?>
            <div class="swiper-slide swiper-slide-duplicate <? if ($i == 2) {
                echo 'swiper-slide-duplicate-prev';
            } else if ($i == 3) {
                echo 'swiper-slide-duplicate-active';
            } else if ($i == 4) {
                echo 'swiper-slide-duplicate-next';
            } ?>" data-swiper-slide-index="<?= $i; ?>">
                <div class="clip-banner-c">
                    <div class="img ratio16x9">
                        <a href="<?= $row->url; ?>" title="<?= $row->name; ?>"
                           target="_self" class="btn clip-btn-2 ga_event">
                            <img class="img-responsive height-mobile" src="<?= $row->image; ?>"
                                 alt="<?= $row->name; ?>">
                        </a>
                    </div>

                    <div class="shadow"></div>

                    <div class="info">
                        <h4><a href="<?= $row->url; ?>"><?= $row->name; ?></a> </h4>

                        <div class="desc ddd is-truncated" style="word-wrap: break-word;">
                            <?= $row->summary; ?>
                        </div>

                        <div class="action-button">
                            <a href="<?= $row->url; ?>" title="<?= $row->name; ?>"
                               target="_self" class="btn clip-btn-2 ga_event" style="margin-right: 15px;">
                                <i class="clip-icon-play-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <? $i++;
        } ?>


        <?
        $i = 0;
        foreach ($data_all_slide->result() as $row) { ?>
            <div class="swiper-slide <? if ($i == 2) {
                echo 'swiper-slide-prev';
            } else if ($i == 3) {
                echo 'swiper-slide-active';
            } else if ($i == 4) {
                echo 'swiper-slide-next';
            } ?>" data-swiper-slide-index="<?= $i; ?>">
                <div class="clip-banner-c">
                    <div class="img ratio16x9">
                        <a href="<?= $row->url; ?>" title="<?= $row->name; ?>"
                           target="_self" class="btn clip-btn-2 ga_event">
                            <img class="img-responsive height-mobile" src="<?= $row->image; ?>"
                                 alt="<?= $row->name; ?>">
                        </a>
                    </div>

                    <div class="shadow"></div>

                    <div class="info">
                        <h4><a href="<?= $row->url; ?>"><?= $row->name; ?></a> </h4>

                        <div class="desc ddd is-truncated" style="word-wrap: break-word;">
                            <?= $row->summary; ?>
                        </div>

                        <div class="action-button">
                            <a href="<?= $row->url; ?>" title="<?= $row->name; ?>"
                               target="_self" class="btn clip-btn-2 ga_event" style="margin-right: 15px;">
                                <i class="clip-icon-play-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <? $i++;
        } ?>
        <?
        $i = 0;
        foreach ($data_all_slide->result() as $row) { ?>
            <div class="swiper-slide swiper-slide-duplicate <? if ($i == 2) {
                echo 'swiper-slide-duplicate-prev';
            } else if ($i == 3) {
                echo 'swiper-slide-duplicate-active';
            } else if ($i == 4) {
                echo 'swiper-slide-duplicate-next';
            } ?>" data-swiper-slide-index="<?= $i; ?>">
                <div class="clip-banner-c">
                    <div class="img ratio16x9">
                        <a href="<?= $row->url; ?>" title="<?= $row->name; ?>"
                           target="_self" class="btn clip-btn-2 ga_event">
                            <img class="img-responsive" src="<?= $row->image; ?>"
                                 alt="<?= $row->name; ?>">
                        </a>
                    </div>

                    <div class="shadow"></div>

                    <div class="info">
                        <h4><a href="<?= $row->url; ?>"><?= $row->name; ?></a> </h4>

                        <div class="desc ddd is-truncated" style="word-wrap: break-word;">
                            <?= $row->summary; ?>
                        </div>

                        <div class="action-button">
                            <a href="<?= $row->url; ?>" title="<?= $row->name; ?>"
                               target="_self" class="btn clip-btn-2 ga_event" style="margin-right: 15px;">
                                <i class="clip-icon-play-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <? $i++;
        } ?>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<div class="container-fluid" style="background:#2a2a2a">
    <div class="container" style="margin-top:30px;position:relative">
<!--        <div class="icon-tet-1">-->
<!--            <img src="--><?//= base_url(); ?><!--upload/caudoi-right2.png">-->
<!--        </div>-->
<!--        <div class="icon-tet-2">-->
<!--            <img src="--><?//= base_url(); ?><!--upload/caudoi-left.png">-->
<!--        </div>-->
<!--        <script>-->
<!--            $(document).ready(function () {-->
<!--                var icon1= $('.icon-tet-1');-->
<!--                var icon2= $('.icon-tet-2');-->
<!--                var icon3= $('.icon-tet');-->
<!--                var icon4= $('.icon-tet2');-->
<!--                var iconimg=$('.icon-tet-1 img');-->
<!--                var iconimg2= $('.icon-tet-2 img');-->
<!--                var iconimg3=$('.icon-tet img');-->
<!--                var iconimg4= $('.icon-tet2 img');-->
<!--                icon3.hide();-->
<!--                icon4.hide();-->
<!--                icon1.css({"position": "absolute", "z-index": "100","top": "-30px","right":"-190px"});-->
<!--                if($(window).width()>= 1382)-->
<!--                {-->
<!--                    icon2.css({"position": "absolute", "z-index": "100","top": "-30px","left":"-160px"});-->
<!--                }-->
<!--                else-->
<!--                {-->
<!--                    icon2.css({"position": "absolute", "z-index": "100","top": "-30px","left":"-87px"});-->
<!--                }-->
<!---->
<!--                function width_media(){-->
<!--                    if($(this).width() <= 1381 && $(this).width() >= 500)-->
<!--                    {-->
<!--                        iconimg.css("width","60%");-->
<!--                        iconimg2.css("width","60%");-->
<!--                        iconimg3.css("width","60%");-->
<!--                        iconimg4.css("width","60%");-->
<!--                        icon1.css({"position": "absolute", "z-index": "100","top": "-30px","right":"-190px"});-->
<!--                        icon2.css({"position": "absolute", "z-index": "100","top": "-30px","left":"-87px"});-->
<!--                        icon4.show().css({"position": "absolute", "z-index": "100","top": "28px","left":"-87px"});-->
<!---->
<!--                    }-->
<!--                    else-->
<!--                    {-->
<!--                        icon4.show().css({"position": "absolute", "z-index": "100","top": "28px","left":"-160px"});-->
<!--                    }-->
<!--                }-->
<!---->
<!---->
<!--                $(this).scroll(function () {-->
<!--                    var x = pageYOffset;-->
<!--                    if(x>400)-->
<!--                    {-->
<!--                        icon1.hide();-->
<!--                        icon2.hide();-->
<!--                        icon3.show().css({"position": "absolute", "z-index": "100","top": "28px","right":"-190px"});-->
<!--                        width_media();-->
<!--                    }-->
<!--                    else-->
<!--                    {-->
<!--                        icon1.show();-->
<!--                        icon2.show();-->
<!--                        icon3.hide();-->
<!--                        icon4.hide();-->
<!--                    }-->
<!--                });-->
<!--                if($(this).scrollTop()>400)-->
<!--                {-->
<!--                    icon1.hide();-->
<!--                    icon2.hide();-->
<!--                    icon3.show().css({"position": "absolute", "z-index": "100","top": "28px","right":"-190px"});-->
<!--                    width_media();-->
<!---->
<!--                }-->
<!---->
<!---->
<!--            });-->
<!--        </script>-->
        <div class="row" style="margin-top: -25px;">

            <!-- Giải trí -->
            

            <!--  Thích -->
            <div class="col-xs-12 colreponse">
                <div class="col-sm-12 colreponse">
                    <div class="col-sm-3 col-xs-9 nopadding">
                        <p class="tieude"><a href="<?= base_url(); ?>#" style="color: white;">Có thể bạn thích</a></p>
                    </div>

                </div>
                <!-- het test-->
                <div class="col-sm-12 col-xs-12 nocol" style="padding-bottom: 16px; border-bottom: 1px solid white;">
                    <div class="owl-carousel owl-theme">
                        <? foreach ($data_video_like->result() as $row) { ?>
                            <div class="item">
                                <a href="<?= base_url() . 'video/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a
                                                href="<?= base_url() . 'video/' . $row->article_url; ?>"><font
                                                    color="white"><?= $row->title; ?></font> </a></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><span
                                                class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

            <!--  Thịnh hành-->
            <div class="col-xs-12 colreponse">
                <div class="col-sm-12 colreponse">
                    <div class="col-sm-3 col-xs-9 nopadding">
                        <p class="tieude"><a href="<?= base_url(); ?>video/thinh-hanh" style="color: white">THỊNH HÀNH</a></p>
                    </div>
                    <div class="col-sm-9 col-xs-3">
                        <div class="more" style="
    float: right;
    color: white;
    font-weight: bold;
    margin-top: 20px;
    font-size: 13px;
    width: 100px;
    padding: 3px;
    padding-left: 6px;
    padding-right: 7px;
    margin-right: 0px;

">
                            <a href="<?= base_url() . 'video/thinh-hanh'; ?>" style="color: white">Xem tất cả</a>

                        </div>
                    </div>

                </div>
                <!-- het test-->
                

                <div class="col-sm-12 col-xs-12 nocol" style="padding-bottom: 16px; border-bottom: 1px solid white;">
                    <div class="owl-carousel owl-theme">
                        <? foreach ($data_video_recommend_home->result() as $row) { ?>
                            <div class="item">
                                <a href="<?= base_url() . 'video/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a
                                                href="<?= base_url() . 'video/' . $row->article_url; ?>"><font
                                                    color="white" style="color: white;"><?= $row->title; ?></font> </a></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><span
                                                class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>



            </div>

            <!--  Video mới-->
            <div class="col-xs-12 colreponse">
                <div class="col-sm-12 colreponse">
                    <div class="col-sm-3 col-xs-9 nopadding">
                        <p class="tieude"><a href="<?= base_url(); ?>video/video-moi" style="color: white">Video Mới</a></p>
                    </div>
                    <div class="col-sm-9 col-xs-3">
                        <div class="more" style="
    float: right;
    color: white;
    font-weight: bold;
    margin-top: 20px;
    font-size: 13px;
    width: 100px;
    padding: 3px;
    padding-left: 6px;
    padding-right: 7px;
    margin-right: 0px;

">
                            <a href="<?= base_url() . 'video/video-moi'; ?>" style="color: white">Xem tất cả</a>

                        </div>
                    </div>

                </div>
                <!-- het test-->
                <div class="col-sm-12 col-xs-12 nocol" style="padding-bottom: 16px; border-bottom: 1px solid white;">
                    <div class="owl-carousel owl-theme">
                        <? foreach ($data_video_new->result() as $row) { ?>
                            <div class="item">
                                <a href="<?= base_url() . 'video/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a
                                                href="<?= base_url() . 'video/' . $row->article_url; ?>"><font
                                                    color="white"><?= $row->title; ?></font> </a></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><span
                                                class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
                <!--                <div class="col-sm-12 col-xs-12 nocol" style="padding-bottom: 10px;">-->
                <!--                    <div class="owl-carousel owl-theme">-->
                <!--                        --><?// foreach ($data_article_nguoi_dep2->result() as $row) { ?>
                <!--                            <div class="item">-->
                <!--                                <a href="--><?//= base_url() . 'video/' . $row->article_url; ?><!--" class="thumbnail"> <img-->
                <!--                                            src="--><?//= $row->images; ?><!--"-->
                <!--                                            alt="--><?//= $row->title; ?><!--"></a>-->
                <!--                                <div class="mota1">-->
                <!--                                    <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a-->
                <!--                                                href="--><?//= base_url() . 'video/' . $row->article_url; ?><!--"><font-->
                <!--                                                    color="white">--><?//= $row->title; ?><!--</font> </a></p>-->
                <!--                                </div>-->
                <!--                                <div class="clearfix"></div>-->
                <!--                                <div class="col-xs-12 nopadding" style="font-size: 12px;">-->
                <!--                                    <p style="line-height: 8px;color:orange; float: left"><span-->
                <!--                                                class="glyphicon glyphicon-eye-open"></span>--><?//= ' ' . $row->views; ?>
                <!--                                        &nbsp;&nbsp;-->
                <!--                                        <span-->
                <!--                                                class="glyphicon glyphicon-time"></span>--><?//= ' ' . time2ago(strtotime($row->created_at)); ?>
                <!--                                    </p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        --><?// } ?>
                <!--                    </div>-->
                <!--                </div>-->
                <!---->
                <!--                <div class="col-sm-12 col-xs-12 nocol">-->
                <!--                    <div class="owl-carousel owl-theme">-->
                <!--                        --><?// foreach ($data_article_nguoi_dep3->result() as $row) { ?>
                <!--                            <div class="item">-->
                <!--                                <a href="--><?//= base_url() . 'video/' . $row->article_url; ?><!--" class="thumbnail"> <img-->
                <!--                                            src="--><?//= $row->images; ?><!--"-->
                <!--                                            alt="--><?//= $row->title; ?><!--"></a>-->
                <!--                                <div class="mota1">-->
                <!--                                    <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a-->
                <!--                                                href="--><?//= base_url() . 'video/' . $row->article_url; ?><!--"><font-->
                <!--                                                    color="white">--><?//= $row->title; ?><!--</font> </a></p>-->
                <!--                                </div>-->
                <!--                                <div class="clearfix"></div>-->
                <!--                                <div class="col-xs-12 nopadding" style="font-size: 12px;">-->
                <!--                                    <p style="line-height: 8px;color:orange; float: left"><span-->
                <!--                                                class="glyphicon glyphicon-eye-open"></span>--><?//= ' ' . $row->views; ?>
                <!--                                        &nbsp;&nbsp;-->
                <!--                                        <span-->
                <!--                                                class="glyphicon glyphicon-time"></span>--><?//= ' ' . time2ago(strtotime($row->created_at)); ?>
                <!--                                    </p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        --><?// } ?>
                <!--                    </div>-->
                <!--                </div>-->
            </div>

            <!-- Ảnh -->
            <div class="col-xs-12 colreponse ">
                <div class="col-sm-12 colreponse">
                    <div class="col-sm-3 col-xs-9 nopadding">
                        <p class="tieude"><a href="<?= base_url(); ?>anh/anh-doc" style="color: white">Ảnh</a></p>
                    </div>
                    <div class="col-sm-9 col-xs-3">
                        <div class="more" style="
    float: right;
    color: white;
    font-weight: bold;
    margin-top: 20px;
    font-size: 13px;
    width: 100px;
    padding: 3px;
    padding-left: 6px;
    padding-right: 7px;
    margin-right: 0px;

">
                            <a href="<?= base_url() . 'anh/anh-doc'; ?>" style="color: white">Xem tất cả</a>

                        </div>
                    </div>

                </div>
                <!-- het test-->
                <div class="col-sm-12 col-xs-12 nocol colc" >
                    <div class="owl-carousel owl-theme">
                        <? foreach ($data_article_anh_doc->result() as $row) { ?>
                            <div class="item">
                                <a href="<?= base_url() . 'anh/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a
                                                href="<?= base_url() . 'anh/' . $row->article_url; ?>"><font
                                                    color="white"><?= $row->title; ?></font> </a></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><span
                                                class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                        <? } ?>

                    </div>
                </div>

            </div>    
            <!-- test-->
            <div class="clearfix"></div>
            <br/>
        </div>
    </div>
</div>
<div class="container-fluid" style="background:#433F3C">
    <div class="container" style="padding: 0px;">
        <!-- Tin tức -->
            <div class="col-md-12 colreponse ">
                <div class="col-sm-12 colreponse ">
                    <div class="col-sm-3 col-xs-9 nopadding">
                        <p class="tieude"><a href="<?= base_url(); ?>video/tin-tuc" style="color: white;">Tin Tức</a></p>
                    </div>
                    <div class="col-sm-9 col-xs-3 ">
                        <div style="
    float: right;
    color: white;
    font-weight: bold;
    margin-top: 20px;
    font-size: 13px;
    width: 100px;
    padding: 3px;
    padding-left: 6px;
    padding-right: 7px;
    margin-right: 0px;
    border: 1px solid white;
    border-radius: 13px;
    text-align: center;
">
                            <a href="<?= base_url() . 'video/tin-tuc'; ?>" style="color: white;">Xem tất cả</a>

                        </div>
                    </div>

                </div>
                <div class="com-md-12 col-xs-12 colreponse">
                    <div class="bao_videohot row-eq-height">

                        <div class="col-sm-6 colreponse nopadding " style="padding-right:0px">
                            <? foreach ($data_article_giai_tri_1->result() as $row) { ?>
                                <div class="boxvideo1 gt2">

                                    <a class="videoout" href="<?= base_url() . 'video/' . $row->article_url; ?>">
                                        <img src="<?= $row->images; ?>"
                                             title="<?= $row->title; ?>" alt="<?= $row->title; ?>">

                                    </a>
                                </div>
                                <div class="mota3">
                                    <p class="mota2 line-clamp module"
                                       style="color: white;margin-right: 20px;"><a
                                                href="<?= base_url() . 'video/' . $row->article_url; ?>" style="color: white;"><?= $row->title; ?></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange"><span
                                                class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            <? } ?>
                        </div>
                        <div class="col-sm-6 colreponse" style="padding-right:0px">
                            <?
                            foreach ($data_article_giai_tri_6->result() as $row) { ?>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="boxvideo1 gt">
                                        <a class="videoout"
                                           href="<?= base_url() . 'video/' . $row->article_url; ?>"><img
                                                    src="<?= $row->images; ?>"
                                                    title="<?= $row->title; ?>" alt="<?= $row->title; ?>">
                                        </a>
                                    </div>
                                    <div class="mota3">
                                        <p class="mota2 line-clamp module"
                                           style="color: white;    margin-right: 20px;"><a
                                                    href="<?= base_url() . 'video/' . $row->article_url; ?>" style="color: white"><?= $row->title; ?></a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                        <p style="line-height: 8px;color:orange; float: left"><span
                                                    class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                            &nbsp;&nbsp;
                                            <span
                                                    class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                        </p>
                                    </div>
                                </div>
                                <?
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>