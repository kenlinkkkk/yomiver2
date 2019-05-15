<div class="container" style="margin-top:30px">
    <div class="col-sm-12">
        <div class="ct">
            <p class="ct1"><a href="<?= base_url(); ?>"><font color="#1e90ff"> Trang chủ</font></a></p>
            <p class="ct1"> ></p>
            <p class="ct1"><a href="<?= $cate_url; ?>"><font color="#1e90ff"> <?= $cate_name; ?></font> </a></p>
            <p class="ct1"> ></p>
            <p class="ct1"><a href="<?= $url; ?>"><font color="#1e90ff"> <?= $name; ?></font></a></p>
        </div>
    </div>
    <div class="col-sm-12" style="margin-top: 30px;">

        <div class="row" style="margin-top: -25px">
            <? foreach ($data_all_article->result() as $row) { ?>
                <div class="col-sm-3 col-xs-6 loaianh">
                    <div class="anh1">
                        <div class="thumbnail">
                            <a href="<?= base_url() . $link . '/' . $row->article_url; ?>"><img src="<?= $row->images; ?>"></a>
                        </div>
                    </div>
                    <div class="mota3">
                        <p style="color: blue;font-weight: bold"><a href="<?= base_url() . $link . '/' . $row->article_url; ?>"><font color="#1e90ff"><?= subTitle($row->title, 11); ?></font> </a></p>

                    </div>
<div class="col-sm-12">
 <p class="tentacgia" style="margin-left: -16px;color:black;color:#333333ed;"><? if (empty($row->art_username)) echo $row->username; echo $row->art_username; ?></p>

                    <div id="tacgia" 
                         style="margin-top: -1px;margin-left: -17px;color:black;color: #333333ed;">
                       
                        <div class="row tacgia2">

                            <div class="col-sm-6"><p style="padding-left: 5px;"><?= $row->views . ' lượt xem'; ?></p>
                            </div>
                            <div class="col-sm-6"><p
                                        style="float: right;"><?= time2ago(strtotime($row->created_at)); ?></p>
                            </div>
                        </div>
                    </div>
</div>
                </div>
            <? } ?>
        </div>
    </div>
</div>