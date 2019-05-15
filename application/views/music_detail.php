<? date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<style>
    .owl-theme .owl-nav [class*=owl-] {
        background: rgba(0, 0, 0, .7);
    }

    .owl-theme .owl-nav {
        position: relative;
        bottom: 135px;
    }

    .owl-prev {
        position: absolute;
        left: -5px;
        opacity: .8;
    }

    .owl-next {
        position: absolute;
        right: -5px;
        opacity: .8;
    }

    /*.owl-theme .owl-dots .owl-dot.active span {*/
    /*background: #e09422;*/
    /*width: 30px;*/
    /*transition: all 0.5s;*/
    /*}*/

    /*.owl-theme .owl-dots .owl-dot span {*/
    /*!*background: #e09422;*!*/

    /*}*/
    .owl-theme .owl-dots .owl-dot {
        display: none;
    }


</style>


<style type="text/css">.song-albumbg {
        width: 225;
        float: left !important;
        z-index: 10012 !important;
        position: absolute;
        margin: -3px 0 0 -3px;
        top: 4px;
        left: 5px;
        transform: scale(0.85);
    }

    .album-bg {
        position: relative;
        border-radius: 100%;
        overflow: hidden;
        width: 225px;
        height: 225px;
    }

    .album-bg img {
        height: 100%;
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
    }

    #rotate-bg {
        -webkit-animation: rotate-bg 15s infinite;
        -moz-animation: rotate-bg 15s infinite;
        -ms-animation: rotate-bg 15s infinite;
        animation: rotate-bg 15s infinite;
        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        -ms-animation-timing-function: linear;
        animation-timing-function: linear;
    }

    #rotate-bg.paused {
        animation-play-state: paused;
        -webkit-animation-play-state: paused;
    }

    @keyframes rotate-bg {
        100% {
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<div class="container-fluid" style="background: #f0f0f0; padding-top:15px">
    <div class="container">
        <div class="row">
            <div class="col-12 nopadding">
                <h2 class="tenbh" style="font-size: 20px;color: #0083de;"><?= $title; ?></h2>
            </div>
            <div class="col-12" style="margin-top: -10px;">
                <div class="row" style="background: #cccccc5e; padding: 5px 5px 23px 5px;width: 210px;height: 30px">
                    <p style="float: left;font-size: 12px;color: #0083de;margin-left: 5px;font-weight: bold"><i
                                class="far fa-eye" style="font-size: 12px;margin-right: 5px"></i><?= $views; ?> - <i
                                class="far fa-clock"
                                style="margin-right: 5px"></i><?= time2ago(strtotime($created_at)); ?>
                    </p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <? if ($id_cate == '17' || $id_cate == '7') { ?>
                        <video width="100%" controls class="video-mobile" autoplay>
                            <source src="<?= $content; ?>" type="video/mp4" style="max-height: 350px">
                            Your browser does not support HTML5 video.
                        </video>
                    <? } else if ($id_cate == '18' || $id_cate == '13' || $id_cate == '9' || $id_cate == '10' || $id_cate == '11' || $id_cate == '12' || $id_cate == '19' || $id_cate == '20' || $id_cate == '21' || $id_cate == '22' || $id_cate == '24' || $id_cate == '26' || $id_cate == '27' || $id_cate == '28') { ?>
                        <div class="col-sm-12"
                             style="background: url(<?= base_url(); ?>images/background-music.jpg); height: 90px;">

                            <div class="row">

                                <div class="col-sm-4">
                                    <img id="rotate-bg"
                                         style="border-radius: 50%; z-index: 99999; width: 90px; height: 90px; padding: 15px;"
                                         src="<?= $images; ?>"
                                         width="100%">
                                </div>

                            </div>
                        </div>
                        <audio controls style="width: 100%" autoplay="autoplay">
                            <source src="<?= $content; ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    <? } ?>
                </div>
                <div class="row" style="margin-top: 5px; background: #dddddd;height: 30px;padding: 7px 2px 30px 10px;">

                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=179372306333775&autoLogAppEvents=1';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <p style="color:#0083de;float: left;font-size: 13px;margin-right: 10px;font-weight:bold;text-align: center;margin-top: 5px">
                        Thích bài này?</p>
                    <div style="float: left;font-size: 5px" class="fb-like"
                         data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"
                         data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                </div>
                <div class=" row">
                    <div class="col-12">
                        <div class="row " style="padding:5px;padding-left: 0px;    height: 50px;">
                            <div class="col-md-12" style="padding-left: 0px;">
                                <a href="#" class="tit_balon chutd tdradio row">

                                    <ul>
                                        <li style="font-weight: bold;color: black">
                                            Bài viết
                                        </li>
                                        <li class=" coltennhac1">
                                            cùng chuyên mục
                                        </li>
                                    </ul>
                                </a>
                                <!--                        <div class="col-5" style="font-weight: bold;color: black;margin-right: 2px;">Radio</div>-->
                                <!--                        <div class="col-5 coltennhac1"> show</div> </a>-->

                            </div>

                        </div>
                        <div class="row ">

                            <div class="owl-carousel owl-theme">
                                <?php foreach ($data_chuyen_muc->result() as $row) { ?>
                                    <div class="item" style="color: black">
                                        <div class="boxvideo6">
                                            <a class="videoout6" href="<?= $row->article_url; ?>">
                                                <img src="<?= $row->images; ?>">
                                                <div class="titlebox_videotop" style="height: 50px;">
                                                    <p class="tieude1"><a href="<?= $row->article_url; ?>"
                                                                          style="color: white"><?= subTitle($row->title, 6); ?></a>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row qcct">
                    <img src="<?= base_url(); ?>images/icall.png" width="100%">
                </div>

                <div class="row"
                     style="background: #0083de;color: white;font-weight: bold;text-transform: uppercase;padding: 10px">
                    Bài viết liên quan
                </div>




                <?php foreach ($data_lien_quan->result() as $row) { ?>
                    <div class="row" style="margin-top: 5px">
                        <div class="col-6" style="padding-left: 0px;">
                            <a href="<?= $row->article_url; ?>"><img src="<?= $row->images; ?>" width="100%"
                                                                     style="max-height: 120px"></a>
                        </div>
                        <div class="col-6" style="padding-left: 0px">
                            <p style="color:black;font-size: 14px;font-weight: bold"><a
                                        href="<?= $row->article_url; ?>"><?= $row->title; ?></a>
                            </p>
                            <p style="color: #0083de;font-size: 11px;margin-top: -17px;"><i class="fa fa-headphones"
                                                                                            aria-hidden="true"
                                                                                            style="padding-right: 3px"></i><?= $row->views; ?>
                                &nbsp;&nbsp;
                                <i class="far fa-clock"
                                   aria-hidden="true"></i> <?= ' ' . time2ago(strtotime($created_at)); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>