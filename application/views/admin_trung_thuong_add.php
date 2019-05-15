<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm người trúng thưởng
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li> Trúng thưởng</li>
            <li class="active"> Thêm người trúng thưởng</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin</h3>
                    </div>
                    <? if (count($errors) > 0): ?>
                        <div class="callout callout-danger">
                            <h4>Error!</h4>
                            <? foreach ($errors as $v): ?>
                                <p><?= $v; ?></p>
                            <? endforeach; ?>
                        </div>
                    <? endif; ?>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                               value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="isPost" value="1"/>
                        <input type="hidden" name="trung_thuong_id" id="trung_thuong_id" value="<?= $trung_thuong_id; ?>"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Số điện thoại</label>
                                    <input type="text" class="form-control" id="sdt" name="sdt" tabindex="1"
                                           required
                                           value="<?= $sdt ?>"
                                           placeholder="Nhập số điện thoại">
                                </div>

                                <div class="form-group">
                                    <label>Giải thưởng</label>
                                    <select class="form-control" id="reward_id" name="reward_id">
                                        <? foreach ($data_reward->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>"><?= $item->reward_name; ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <label>Ngày trúng</label>
                                <div class="input-group date" id="sandbox-container" data-provide="datepicker">        
                                    <input type="text" class="form-control" id="reward_date" name="reward_date" tabindex="1" required value="<?= $reward_date ?>">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
<!--                                <div class="form-group">-->
<!--                                    <label> Video trên Youtube</label>-->
<!--                                    <input type="text" class="form-control" id="art_youtube" name="art_youtube"-->
<!--                                           maxlength="15"-->
<!--                                           value="--><?//= $art_youtube; ?><!--"-->
<!--                                           placeholder="Nhập ID video trên Youtube">-->
<!--                                </div>-->
<!---->
<!--                                <p> <b>Link youtube</b>: --><?//= htmlspecialchars('https://www.youtube.com/watch?v='); ?><!--<b><font-->
<!--                                                color="red">4buvABCZr8M</font></b></p>-->
<!--                                <p><b>ID video</b>: <font color="red"><b>4buvABCZr8M</b></font></p>-->   
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <div id="saveActions" class="form-group">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-success" name="save-action"
                                                id="save-action">
                                            <span class="fa fa-save" role="presentation" aria-hidden="true"></span>
                                            &nbsp;
                                            <span data-value="save-action">Lưu và quay lại</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <link rel="stylesheet" href="<?= base_url(); ?>css/jquery-ui.css"/>
                    </form>
                </div>
                <!-- /.box-body -->
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
