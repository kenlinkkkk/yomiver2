<div class="container-fluid mobile-nav-hidden" style="padding-top: 119px !important; background-image:url(<?= $category_images; ?>);">
    <div class="container" style="padding: 0px;">
        <div class="col-sm-12" style="padding-left: 50px;padding-right: 50px;">
            <div class="row">
                <div class="col-sm-12">
                    <h2 style="text-transform: uppercase; color: white; margin-top: 8%; margin-bottom: 8%;"><?= $name; ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?
    $segment2 = $this->uri->segment(2);
    if ($segment2 == 'tin-tuc') {
?>
<div class="container-fluid mobile-nav-hidden" style="background:#433F3C">
    <div class="container" style="padding: 0px;">
        <!-- Tin tức -->
            <div class="col-md-12 colreponse ">
                <div class="col-sm-12 colreponse ">
                    <div class="col-sm-3 col-xs-9 nopadding">
                        <p class="tieude"><a href="<?= base_url(); ?>video/tin-tuc" style="color: #f2f2f2;"><?= $name; ?></a></p>
                    </div>
                    <div class="col-sm-9 col-xs-3 ">
                        
                    </div>

                </div>
                <div class="com-md-12 col-xs-12 colreponse ">
                    <div class="bao_videohot ">

                        <div class="col-sm-5 colreponse nopadding " style="padding-right:0px">
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
                        <div class="col-sm-7 colreponse" style="padding-right:0px">
                            <?
                            foreach ($data_article_giai_tri_6->result() as $row) { ?>
                                <div class="col-sm-6 col-xs-6" style="padding-right: 15px; padding-left: 15px">
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
<?  
    }
?>

<div class="container-fluid" style="background: #2a2a2a">
    <div class="container colcategory" style="margin-top:106px">
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
            <div class="row mobile-nav" style="padding:5px;padding-left: 0px; height: 50px;">
                <div class="col-xs-12 col-md-12" style="padding-left: 0px;">
                    <h4 class="tieude2" style="color: white"><?= $name; ?></h4>
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
                        <a class="videoout2" href="<?= base_url() . 'video/' . $row->article_url; ?>"><img
                                    src="<?= $row->images; ?>"
                                    title="<?= $row->title; ?>" alt="<?= $row->title; ?>">

                        </a>
                    </div>

                    <div class="mota1">
                        <p class="mota2 line-clamp module" style="color: white; margin-right: 20px;"><a
                                    href="<?= base_url() . 'video/' . $row->article_url; ?>"><font
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