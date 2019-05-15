<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li> Bài viết</li>
            <li class="active"> Thêm bài viết</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin bài viết</h3>
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
                        <input type="hidden" name="art_id" id="art_id" value="<?= $art_id; ?>"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Tên bài viết</label>
                                    <input type="text" class="form-control" id="art_title" name="art_title" tabindex="1"
                                           required
                                           value="<?= $art_title; ?>"
                                           placeholder="Nhập tên bài viết">
                                </div>

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" id="art_parent" name="art_parent">
                                        <? foreach ($data_all_cate->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($item->id == $art_parent) echo 'selected';
                                            echo ''; ?>><?= $item->name; ?></option>
                                        <? } ?>
                                    </select>
                                </div>

                                <div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Tên người đăng</label>
                                            <input type="text" class="form-control" id="art_username"
                                                   name="art_username" tabindex="1"
                                                   value="<?= $art_username; ?>"
                                                   placeholder="Nhập tên người đăng">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Chọn người đăng</label>
                                            <select class="form-control" id="art_user" name="art_user">
                                                <? foreach ($data_all_user->result() as $item) { ?>
                                                    <option value="<?= $item->id; ?>" <? if ($art_user == $item->id) echo 'selected="selected"';
                                                    echo ''; ?>><?= $item->username; ?></option>
                                                <? } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Lượt xem</label>
                                            <input type="text" class="form-control" id="art_views" name="art_views" required
                                                   tabindex="1"
                                                   value="<?= $art_views; ?>"
                                                   placeholder="Nhập tên số lượt xem">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Hình ảnh </label>
                                    <input type="text" class="form-control" id="art_images" name="art_images"
                                           value="<?= $art_images; ?>" placeholder="Upload image">
                                    <div class="form-group">
                                        <input type="file" name="picture">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label>Video </label>
                                    <input type="text" class="form-control" id="art_videos" name="art_videos"
                                           value="<?= $art_video; ?>" placeholder="Upload video">
                                    <div class="form-group">
                                        <input type="file" name="fileVideo">
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


                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="checkbox" name="art_status"
                                           id="art_status"<? if ($art_status == 'on') echo 'checked="checked"';
                                    echo ''; ?>>
                                </div>

                                <div class="form-group">
                                    <label>Thịnh hành</label>
                                    <input type="checkbox" name="art_check_1"
                                           id="art_status"<? if ($art_check_1 == 'on') echo 'checked="checked"';
                                    echo ''; ?>>
                                </div>

                                <div class="form-group">
                                    <label>Đề xuất</label>
                                    <input type="checkbox" name="art_check_2"
                                           id="art_status"<? if ($art_check_2 == 'on') echo 'checked="checked"';
                                    echo ''; ?>>
                                </div>
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
