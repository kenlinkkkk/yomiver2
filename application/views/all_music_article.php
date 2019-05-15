<div class="container-fluid mobile-nav-hidden" style="padding-top: 119px !important; background-image:url(<?= $category_images; ?>); ">
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

<div class="container-fluid" style="background: #f2f2f2">
    <div class="container colcategory" style="margin-top:30px">
        <div class="col-sm-12 mobile-nav" style="margin-top: 87px;">
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
                    <p class="tieude2" style="color: #989898"><?= $name; ?></p>
                    <!--                        <div class="col-5" style="font-weight: bold;color: black;margin-right: 2px;">Radio</div>-->
                    <!--                        <div class="col-5 coltennhac1"> show</div> </a>-->

                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <?php foreach ($data_article_giai_tri_1->result() as $row1) { ?>
        	<div class="xem panel panel-default ">
                <div class="col-sm-12" align="center">
                
                    <h1 class="" style="color: white;font-weight: bold"><a href="<?= base_url() . 'nhac/' . $row1->article_url; ?>" style="color: #989898"><?= $row1->title; ?></a>
                    </h1>
                    <p style="color: orange; font-size: 10px; margin-top: -5px;">
                        <span class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row1->views; ?>
                        <span class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row1->created_at)); ?>                                   
                    </p>
                    <p style="color: orange; font-size: 20px; margin-top: -5px;">           
                        <span class="glyphicon glyphicon-thumbs-up"></span><?= ' '.$row1->likes; ?>
                    </p>                
            </div>
                <div class="panel-body" align="center">
                    <audio controls style="width: 100%">
                    	
                      	<source src="<?= $row1->music ?>" type="audio/mpeg">
                      	<?php } ?>
                    Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
        <div class="col-sm-12 nopadding">
            <ul class="nav nav-tabs">
                <li class="active" style="width:50%"><a data-toggle="tab" href="#home">NHẠC ĐỀ XUẤT</a></li>
                <li style="width:50%"><a data-toggle="tab" href="#menu1">NHẠC MỚI NHẤT</a></li>
            </ul>

            <div class="tab-content" style="background: #1c2529">
                <div id="home" class="tab-pane fade in active">
                	<?php foreach ($data_all_article->result() as $row) { ?>
		                <div class="row" >
                            <div class="col-sm-12" style="margin-top: 3px;">
                                <div class="col-sm-3 coldx">
                                    <a href="<?= base_url() . 'nhac/' . $row->article_url; ?>"><img src="<?= $row->images; ?>" width="100%" style="max-height: 85px" title="<?= $row->title; ?>"></a>
                                </div>
                                <div class="col-sm-9" style="padding-top: 2px;">
                                    <p class="line-clamp module" style="font-size: 12px;color: white;font-weight: bold"><a href="<?= base_url() . 'nhac/' . $row->article_url; ?>"><?= $row->title; ?></a>
                                    </p>
                                    <p style="color: orange; font-size: 10px; margin-top: -5px;">
                                    	<span class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        <span class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>                                   
                                    </p>
                                    <p style="color: orange; font-size: 20px; margin-top: -5px;">           
                                        <span class="glyphicon glyphicon-thumbs-up"></span><?= ' '.$row->likes; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
		            <?php } ?>
		              
                </div>


                <div id="menu1" class="tab-pane fade">
                    <?php foreach ($data_all_article->result() as $row) { ?>
		                <div class="row" >
                            <div class="col-sm-12 " style="margin-top: 3px;">
                                <div class="col-sm-3 coldx">
                                    <a href="<?= base_url() . 'nhac/' . $row->article_url; ?>"><img src="<?= $row->images; ?>" width="100%" style="max-height: 85px" title="<?= $row->title; ?>"></a>
                                </div>
                                <div class="col-sm-9" style="padding-top: 2px;">
                                    <p class="line-clamp module" style="font-size: 12px;color: white;font-weight: bold"><a href="<?= base_url() . 'nhac/' . $row->article_url; ?>"><?= $row->title; ?></a>
                                    </p>
                                    <p style="color: orange; font-size: 10px; margin-top: -5px;">
                                    	<span class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                        <span class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>                                   
                                    </p>
                                    <p style="color: orange; font-size: 20px; margin-top: -5px;">           
                                        <span class="glyphicon glyphicon-thumbs-up"></span><?= ' '.$row->likes; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
		            <?php } ?>
                </div>
            </div>
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