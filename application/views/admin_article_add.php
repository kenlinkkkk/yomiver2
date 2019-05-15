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
                        <input type="hidden" name="isPost" value="1"/>
                        <input type="hidden" name="user_id" value="<?= $this->session->userdata('User_Id'); ?>"/>
                        <input type="hidden" name="art_id" id="art_id" value="<?= $art_id; ?>"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Tên bài viết</label>
                                    <input type="text" class="form-control" id="art_title" name="art_title" tabindex="1"
                                           value="<?= $art_title; ?>"
                                           placeholder="Nhập tên bài viết">
                                </div>
                                <!--                                <div class="form-group">-->
                                <!--                                    <label>Đường dẫn</label>-->
                                <!--                                    <input type="text" class="form-control" tabindex="1" id="art_url"-->
                                <!--                                           value="--><? //= $art_url; ?><!--"-->
                                <!--                                           name="art_url">-->
                                <!--                                </div>-->

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" id="art_parent" name="art_parent">
                                        <? foreach ($array_category->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($item->id == $art_parent) echo 'selected';
                                            echo ''; ?>><?= $item->name; ?></option>
                                        <? } ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Người đăng</label>
                                    <select class="form-control" id="art_user" name="art_user">
                                        <? foreach ($data_all_user->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($art_user == $item->id) echo 'selected="selected"';
                                            echo ''; ?>><?= $item->username; ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="nopadding">
                                    <div class="col-md-4 nopadding">
                                        <div class="form-group">
                                            <label> Lượt xem</label>
                                            <input type="text" class="form-control" id="art_views" name="art_views"
                                                   tabindex="1"
                                                   value="<?= $art_views; ?>"
                                                   placeholder="Nhập tên số lượt xem">
                                        </div>
                                    </div>

                                    <div class="col-md-4 nopadding">
                                        <div class="form-group">
                                            <label> Like</label>
                                            <input type="text" class="form-control" id="art_likes" name="art_likes"
                                                   tabindex="1"
                                                   value="<?= $art_likes; ?>"
                                                   placeholder="Nhập số lượt chia sẻ">
                                        </div>
                                    </div>

                                    <div class="col-md-4 nopadding">
                                        <div class="form-group">
                                            <label> Share</label>
                                            <input type="text" class="form-control" id="art_shares" name="art_shares"
                                                   tabindex="1"
                                                   value="<?= $art_shares; ?>"
                                                   placeholder="Nhập số lượt chia sẻ">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Hình ảnh </label>
                                    <input type="text" class="form-control" id="art_images" name="art_images"
                                           value="<?= $art_images; ?>" placeholder="Upload image">
                                    <button type="button" onclick="openPopup1()">Chọn ảnh</button>
                                </div>

                                <script type="text/javascript"
                                        src="<?= base_url(); ?>asset/ckfinder/ckfinder.js"></script>

                                <script>
                                    function openPopup1() {
                                        CKFinder.popup({
                                            chooseFiles: true,
                                            onInit: function (finder) {
                                                finder.on('files:choose', function (evt) {
                                                    var file = evt.data.files.first();
                                                    document.getElementById('art_images').value = file.getUrl();
                                                });
                                                finder.on('file:choose:resizedImage', function (evt) {
                                                    document.getElementById('art_images').value = evt.data.resizedUrl;
                                                });
                                            }
                                        });
                                    }
                                </script>

                                <div class="form-group">
                                    <label>Video</label>
                                    <input type="text" class="form-control" id="art_video" name="art_video"
                                           value="<?= $art_video; ?>" placeholder="Đường dẫn video">
                                    <button type="button" onclick="openPopup2()">Chọn video</button>
                                </div>

                                <script>
                                    function openPopup2() {
                                        CKFinder.popup({
                                            chooseFiles: true,
                                            onInit: function (finder) {
                                                finder.on('files:choose', function (evt) {
                                                    var file = evt.data.files.first();
                                                    document.getElementById('art_video').value = file.getUrl();
                                                });
                                                finder.on(function (evt) {
                                                    document.getElementById('art_video').value = evt.data.resizedUrl;
                                                });
                                            }
                                        });
                                    }
                                </script>

                                <div class="form-group">
                                    <label> Video trên Youtube</label>
                                    <input type="text" class="form-control" id="art_youtube" name="art_youtube"
                                           value="<?= $art_youtube; ?>"
                                           placeholder="Nhập mã nhúng video trên Youtube">
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="checkbox" name="art_status"
                                           id="art_status"<? if ($art_status == 'on') echo 'checked="checked"';
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
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#art_title').blur(function () {
                                        if ($.trim($('#art_url').val()) != '') return;
                                        $('#art_url').attr('disabled', true);

                                        $.post('<?=site_url($this->uri->level(2) . '/url');?>', {title: $('#art_title').val()}, function (data) {
                                            $('#art_url').val(data);
                                            $('#art_url').attr('disabled', false);
                                        });
                                    });

                                });
                            </script>
                    </form>
                </div>
                <!-- /.box-body -->
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
