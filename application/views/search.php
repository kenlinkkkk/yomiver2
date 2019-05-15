<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 15/11/2018
 * Time: 10:15 SA
 */

?>

<div class="container padding-slide-mobile" style="margin-top:30px">
    <div class="row" style="margin-top: -25px;">
        <div class="col-sm-12 nopadding">
            <div class="col-xs-12">
                <p class="tieude"><a href="<?= base_url(); ?>"><font color="red">Kết quả tìm kiếm</font></a></p>
                <!-- het test-->
                <div class="">
                    <?
                    if (empty($data_search->result())) {
                        echo "Không có dữ liệu, vui lòng kiểm tra lại!";
                    } else {
                        foreach ($data_search->result() as $row) {
                            if($row->category_id == '6' || $row->category_id == '7' || $row->category_id == '8'){ 
                    ?>
                            <div class="col-md-3">
                                <a href="<?= base_url() . 'anh/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 subTitle" style="color: blue;    margin-right: 20px;"><a
                                                href="<?= base_url() . 'anh/' . $row->article_url; ?>"><font
                                                    color="#1e90ff"><?= $row->title; ?></font> </a></p>

                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><i class="glyphicon glyphicon-eye-open"
                                                                                            aria-hidden="true"
                                                                                            style="padding-right: 3px"></i><?= $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                    <? 
                            }
                            else if($row->category_id == '13'){
                    ?>
                            <div class="col-md-3">
                                <a href="<?= base_url() . 'nhac/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 subTitle" style="color: blue;    margin-right: 20px;"><a
                                                href="<?= base_url() . 'nhac/' . $row->article_url; ?>"><font
                                                    color="#1e90ff"><?= $row->title; ?></font> </a></p>

                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><i class="glyphicon glyphicon-eye-open"
                                                                                            aria-hidden="true"
                                                                                            style="padding-right: 3px"></i><?= $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                    <?            
                            }
                            else{
                    ?>
                            <div class="col-md-3">
                                <a href="<?= base_url() . 'video/' . $row->article_url; ?>" class="thumbnail"> <img
                                            src="<?= $row->images; ?>"
                                            alt="<?= $row->title; ?>"></a>
                                <div class="mota1">
                                    <p class="mota2 subTitle" style="color: blue;    margin-right: 20px;"><a
                                                href="<?= base_url() . 'video/' . $row->article_url; ?>"><font
                                                    color="#1e90ff"><?= $row->title; ?></font> </a></p>

                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 nopadding" style="font-size: 12px;">
                                    <p style="line-height: 8px;color:orange; float: left"><i class="glyphicon glyphicon-eye-open"
                                                                                            aria-hidden="true"
                                                                                            style="padding-right: 3px"></i><?= $row->views; ?>
                                        &nbsp;&nbsp;
                                        <span
                                                class="glyphicon glyphicon-time"></span><?= ' ' . time2ago(strtotime($row->created_at)); ?>
                                    </p>
                                </div>
                            </div>
                    <?            
                            }
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
