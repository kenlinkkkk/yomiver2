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
<div class="container-fluid" style="background: #2a2a2a">
    <div class="container colcategory" style="margin-top:30px">
        <div class="col-sm-12">
<!--            <div class="icon-tet-1">-->
<!--                <img src="--><?//= base_url(); ?><!--upload/caudoi-right2.png">-->
<!--            </div>-->
<!--            <div class="icon-tet-2">-->
<!--                <img src="--><?//= base_url(); ?><!--upload/caudoi-left.png">-->
<!--            </div>-->
<!--            <script>-->
<!--                $(document).ready(function () {-->
<!--                    var icon1= $('.icon-tet-1');-->
<!--                    var icon2= $('.icon-tet-2');-->
<!--                    var icon3= $('.icon-tet');-->
<!--                    var icon4= $('.icon-tet2');-->
<!--                    var iconimg=$('.icon-tet-1 img');-->
<!--                    var iconimg2= $('.icon-tet-2 img');-->
<!--                    var iconimg3=$('.icon-tet img');-->
<!--                    var iconimg4= $('.icon-tet2 img');-->
<!--                    icon3.hide();-->
<!--                    icon4.hide();-->
<!--                    icon1.css({"position": "absolute", "z-index": "100","top": "-30px","right":"-220px"});-->
<!--                    if($(window).width()>= 1382)-->
<!--                    {-->
<!--                        icon2.css({"position": "absolute", "z-index": "100","top": "-30px","left":"-230px"});-->
<!--                    }-->
<!--                    else-->
<!--                    {-->
<!--                        icon2.css({"position": "absolute", "z-index": "100","top": "-30px","left":"-87px"});-->
<!--                    }-->
<!---->
<!--                    function width_media(){-->
<!--                        if($(this).width() <= 1381 && $(this).width() >= 500)-->
<!--                        {-->
<!--                            iconimg.css("width","60%");-->
<!--                            iconimg2.css("width","60%");-->
<!--                            iconimg3.css("width","60%");-->
<!--                            iconimg4.css("width","60%");-->
<!--                            icon1.css({"position": "absolute", "z-index": "100","top": "-30px","right":"-190px"});-->
<!--                            icon2.css({"position": "absolute", "z-index": "100","top": "-30px","left":"-87px"});-->
<!--                            icon4.show().css({"position": "absolute", "z-index": "100","top": "28px","left":"-87px"});-->
<!---->
<!--                        }-->
<!--                        else-->
<!--                        {-->
<!--                            icon4.show().css({"position": "absolute", "z-index": "100","top": "28px","left":"-175px"});-->
<!--                        }-->
<!--                    }-->
<!---->
<!---->
<!--                    $(this).scroll(function () {-->
<!--                        var x = pageYOffset;-->
<!--                        if(x>400)-->
<!--                        {-->
<!--                            icon1.hide();-->
<!--                            icon2.hide();-->
<!--                            icon3.show().css({"position": "absolute", "z-index": "100","top": "28px","right":"-165px"});-->
<!--                            width_media();-->
<!--                        }-->
<!--                        else-->
<!--                        {-->
<!--                            icon1.show();-->
<!--                            icon2.show();-->
<!--                            icon3.hide();-->
<!--                            icon4.hide();-->
<!--                        }-->
<!--                    });-->
<!--                    if($(this).scrollTop()>400)-->
<!--                    {-->
<!--                        icon1.hide();-->
<!--                        icon2.hide();-->
<!--                        icon3.show().css({"position": "absolute", "z-index": "100","top": "28px","right":"-165px"});-->
<!--                        width_media();-->
<!---->
<!--                    }-->
<!---->
<!---->
<!--                });-->
<!--            </script>-->
            <div class="row" style="padding:5px;padding-left: 0px;    height: 50px;">
                <div class="col-xs-6 col-md-2" style="padding-left: 0px;">
                    <p class="tieude2"><?= $name; ?></p>
                    <!--                        <div class="col-5" style="font-weight: bold;color: black;margin-right: 2px;">Radio</div>-->
                    <!--                        <div class="col-5 coltennhac1"> show</div> </a>-->

                </div>
            </div>
        </div>
        <div class="col-sm-12 nopadding">
            <?php foreach ($data_all_article->result() as $row) { ?>
                <div class="col-md-3 col-xs-6 " style="padding-left: 0px">
                    <div class="boxvideo2">
                        <div style="width: 28px;z-index:10;position: absolute;top:-2px">
                            <img src="<?= base_url(); ?>images/hot.png" width="100%">
                        </div>
                        <a class="videoout2" href="<?= base_url() . 'anh/' . $row->article_url; ?>"><img
                                    src="<?= $row->images; ?>"
                                    title="<?= $row->title; ?>" alt="<?= $row->title; ?>">

                        </a>
                    </div>
                    <div class="mota1">
                        <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a
                                    href="<?= base_url() . 'anh/' . $row->article_url; ?>"><font
                                        color="white"><?= $row->title; ?></font> </a></p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 nopadding" style="font-size: 12px;">
                        <p style="line-height: 8px;color:orange; float: left"><span class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                            &nbsp;&nbsp;
                            <span
                                    class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                        </p>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="text-align: center;">
                    <?= $this->pagination->create_links(); ?>                                                      
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>