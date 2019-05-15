<style>
    .owl-theme .owl-nav {
        position: relative;
        bottom: 135px;
    }
</style>

<? if (!empty($idu = $this->session->userdata('log_id'))) {
    $idu = $this->session->userdata('log_id');
} ?>
<div class="container-fluid padding-slide-mobile" style="background: #2a2a2a">
    <div class="container" style="margin-top:30px">
        <div class="row" style="margin-top: -25px;">
            <div class="col-sm-12 nopadding">
                <div class="row nopadding">
                    <div class="col-md-12 nopadding ">
                        <p class="" style="padding: 10px 10px 0px 0px;color: #fff;font-weight: bold;margin-bottom: 0px">
                            <font
                                    size="5"><strong><?= subTitle($title, 20); ?></strong></font></p>
                    </div>

                    <div class="col-md-12 colluotxem">
                        <div style="
              background: rgba(0, 0, 0, 0.28);
    width: 160px;
    padding: 7px 10px 24px 10px;
">
                            <div style="float: left;font-size: 12px;color: #cccccc"><span
                                        class="glyphicon glyphicon-eye-open" style="margin-right: 10px;"></span>Lượt
                                xem:
                            </div>

                            <div style="float: left;margin-left: 13px;color: orange;color: #FF9800;
    font-size: 12px;"> <?= $views; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 nopadding">
                <div class="col-sm-8 nopadding">
                    <div class="xem panel panel-default ">
                        <div class="panel-body" align="center">
                            <img src="<?= $images; ?>" width="100%">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row tdfb" style="; border-radius: 5px;">
                            <div style="">

                                <!-- <button type="button" class="btn btn-primary btn-xs btn-danger"><i class="fa fa-gift"
                                                                                                   style="font-size:12px;color:#fff"></i>
                                    Tặng quà
                                </button> -->

                                <div class="fb-like" data-layout="button"
                                     data-href="<?= base_url() . 'anh/' . $link; ?>"
                                     data-action="like" data-size="large" data-show-faces="true"
                                     data-share="true"></div>
                                <?php if ($this->session->userdata("phone")) { ?>
                                    <!--?php if (1 == 1) { ?-->
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                                            data-target="#Shareclipsms"><i class="fa fa-gift"
                                                                           style="font-size:12px;color:#fff"></i>Tặng
                                        quà
                                    </button>

                                    <!-- Modal1 -->
                                    <div id="Shareclipsms" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <form id="formshareclipsms" method="get"
                                                  action="http://xemlien.vn/asset/shareclipsms.php" target="votar">
                                                <input type="text" style="display: none;" name="link"
                                                       value="<?php echo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;
                                                        </button>
                                                        <h4 class="modal-title">Gửi tặng clip</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="msisdnb">Nhập số điện thoại gửi tặng:</label>
                                                        <input type="text" id="msisdnb" name="msisdnb"
                                                               required="required"
                                                               minlength="10" maxlength="11">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success"
                                                                onclick="submitshare()">
                                                            Gửi
                                                        </button>
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Hủy
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <iframe name="votar" style="display:none;"></iframe>
                                        </div>
                                    </div>
                                    <!-- Modal2 -->
                                    <div id="modalthongbao" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;
                                                    </button>
                                                    <h4 class="modal-title">Gửi tặng clip</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tiếp nhận yêu cầu thành công</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">
                                                        Đóng
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                <?php } ?>
                                <script type="text/javascript">
                                    function submitshare() {
                                        $('#formshareclipsms').submit();
                                        $('#msisdnb').val("");
                                        $('#msisdna').val("");
                                        $('#Shareclipsms').modal('hide');
                                        $('#modalthongbao').modal('show');
                                    }
                                </script>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12" style="margin-top: 5px;padding-left: 0px">
                                <p class="" style="float: left;color: orange"><font
                                            size="2"><?= 'Đăng bởi: ' . $username; ?></font></p>
                                <p class="" style="float: right; padding-right: 10px;color: #ddd"><font
                                            size="2"><?= time2ago(strtotime($created_at)); ?></font></p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="binhluan2">
                                    <div class="row">
                                        <div class="col-xs-12 panel panel-default nopadding"
                                             style="background: #1c1c1c;border-color:#1c1c1c">
                                            <div class="panel-body">
                                                <div>
                                                    <input type="hidden" name="id_art" id="id_art"
                                                           value="<?= $id_art; ?>">
                                                    <input type="hidden" name="idu" id="idu" value="<?= $idu; ?>">
                                                    <div class="col-xs-12"
                                                         style="border-top: 1px solid #3c3c3c;border-bottom: 1px solid #3c3c3c;padding: 20px 10px 10px 10px;margin-bottom: 10px ">
                                                    </div>
                                                    <div class="col-xs-8 col-md-10 nopadding">
                                                <textarea class="form-control" id="comment" name="comment"
                                                          style="height: 50px;background: none;
    height: 60px;
    margin-left: 10px; color: white"
                                                          placeholder="Mời bạn nhập bình luận" required></textarea>
                                                    </div>
                                                    <div class="col-xs-4 col-md-2" style="float: right;">
                                                        <button class="btn btn-success">Bình luận</button>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <br/>
                                                    <span id="indicator"></span>

                                                </div>

                                                <script type="text/javascript">
                                                    $("button").click(function () {
                                                            var comment = $("textarea[name='comment']").val();
                                                            var idu = $("input[name='idu']").val();
                                                            var id_art = $("input[name='id_art']").val();

                                                            if (idu.length == '0') {
                                                                $("textarea[name='comment']").val('');
                                                                $('#indicator').html('Vui lòng đăng nhập để bình luận!').css('color', 'red');

                                                            } else {
                                                                $.ajax({
                                                                    url: '<?= site_url($this->uri->level(0) . '/add_cmt'); ?>',
                                                                    type: 'POST',
                                                                    data: {comment: comment, idu: idu, id_art: id_art},
                                                                    error: function () {
                                                                        $('#indicator').html('Có lỗi xảy ra, vui lòng thử lại!').css('color', 'red');
                                                                    },
                                                                    success: function (data) {
                                                                        // $("tbody").append("<tr><td>"+title+"</td><td>"+description+"</td></tr>");
                                                                        $("textarea[name='comment']").val('');
                                                                        $('#indicator').html('Thành công! Bình luận của bạn sẽ được kiểm duyệt!').css('color', 'green');
                                                                    }
                                                                });
                                                            }
                                                        }
                                                    );
                                                </script>

                                                <div class="clearfix"></div>
                                                <? foreach ($data_list_comment->result() as $row) { ?>
                                                    <div style="padding-top: 5px;">
                                                        <div class="col-md-1 col-xs-2 nopadding">
                                                            <img src="<?= $row->avatar; ?>" width="50px" height="50px">
                                                        </div>
                                                        <div class="col-md-11 col-xs-10" style="line-height: 10px;">
                                                            <p><font color="#1e90ff">
                                                                    <b><?= $row->username; ?></b>
                                                                </font></p>
                                                            <p><?= $row->comment; ?></p>
                                                            <p><i><font size="2">
                                                                        <?= time2ago(strtotime($row->cmt_date)); ?>
                                                                    </font> </i></p>
                                                        </div>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 colqc ">
                    <div class="qc">
                        <img src="<?= base_url(); ?>images/qc.png">
                    </div>
                    <div class="videolienquan">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-12">
                                <p style="
                                padding: 10px 10px 28px 10px;font-weight: bold;color: #ccc;font-size: 15px; background-color: #9e9e9e4d; height: 30px;">
                                    ẢNH LIÊN QUAN
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 nopadding" style="background:#1c1c1c">
                            <? foreach ($data_list_article_cate->result() as $row) { ?>
                                <div class="row col-md-12 col-xs-12 nopadding" style="margin-top: 10px;">

                                    <div class="col-md-6 col-xs-6 nopadding">
                                        <div class="videolq"><p><a
                                                        href="<?= base_url() . 'anh/' . $row->article_url; ?>"><img
                                                            src="<?= $row->images; ?>"></a></p></div>
                                    </div>
                                    <div class="col-md-6 col-xs-6 nopadding">
                                        <div class="tenlq" style="padding-left: 10px;">
                                            <p class="chu5"><a
                                                        href="<?= base_url() . 'anh/' . $row->article_url; ?>"><font
                                                            color="white"
                                                            size="3"><?= subTitle($row->title, 8); ?></font>
                                                </a></p>

                                            <p class="chu6"><? echo 'Đăng bởi: ';
                                                if (empty($row->art_username)) echo $row->username;
                                                echo $row->art_username;
                                                '</b>'; ?></p>
                                            <p class="chu6"
                                               style="color:#FF9800"><span
                                                        class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                                &nbsp;<span
                                                        class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 nopadding">
                <div class="col-xs-12 colreponse nopadding">
                    <div class="col-sm-12 colreponse nopadding">
                        <div class="col-sm-3 col-xs-9 nopadding">
                            <p class="tieude">ẢNH ĐỀ XUẤT</p>
                        </div>
                        <div class="col-sm-9 col-xs-3">
                            <div style="
    float: right;
    color: #cccccc;
    font-weight: bold;
    margin-top: 20px;
    font-size: 13px;
    width: 100px;
    padding: 3px;
    padding-left: 6px;
    padding-right: 7px;
    margin-right: 0px;

">
                                Xem tất cả <i class="glyphicon glyphicon-forward"
                                              style="font-size10px;float: right;color: #fff;padding-top: 3px"></i>
                            </div>
                        </div>

                    </div>
                    <!-- het test-->
                    <div class="col-sm-12 col-xs-12 nopadding">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($data_images_recommend->result() as $row) { ?>
                                <div class="item">
                                    <a href="<?= base_url() . 'anh/' . $row->article_url; ?>" class="thumbnail"> <img
                                                src="<?= $row->images; ?>"
                                                alt="<?= $row->title; ?>"></a>
                                    <div class="mota1">
                                        <p class="mota2 line-clamp module" style="color: white;"><a href="<?= base_url() . 'anh/' . $row->article_url; ?>"><font
                                                        color="white"><?= $row->title; ?></font> </a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                        <p style="line-height: 8px;color:orange"><span
                                                    class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                            &nbsp;<span
                                                    class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="clearfix"></div><br/>

                    <div class="col-sm-12 col-xs-12 nopadding" style="padding-top: 20px">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($data_images_recommend1->result() as $row) { ?>
                                <div class="item">
                                    <a href="<?= base_url() . 'anh/' . $row->article_url; ?>" class="thumbnail"> <img
                                                src="<?= $row->images; ?>"
                                                alt="<?= $row->title; ?>"></a>
                                    <div class="mota1">
                                        <p class="mota2 line-clamp module" style="color: white;"><a href="<?= base_url() . 'anh/' . $row->article_url; ?>"><font
                                                        color=""><?= $row->title; ?></font> </a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                        <p style="line-height: 8px;color:orange"><span
                                                    class="glyphicon glyphicon-eye-open"></span><?= ' ' . $row->views; ?>
                                            &nbsp;<span
                                                    class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>