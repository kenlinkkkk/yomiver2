<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bình luận
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li> Bình luận</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chi tiết bình luận </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="isPost" value="1"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Bình luận</label>
                                    <input type="text" class="form-control" id="cmt_name" name="cmt_name"
                                           value="<?= $cmt_name; ?>"
                                           placeholder="Nhập bình luận">
                                </div>

                                <div class="form-group">
                                    <label>Bài viết</label>
                                    <select class="form-control" id="cmt_art" name="cmt_art">
                                        <? foreach ($data_all_art->result() as $item) { ?>
                                            <option value="<?= $item->id_art; ?>" <? if ($cmt_art == $item->id_art) echo 'selected="selected"'; echo ''; ?>><?= $item->title; ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Người đăng</label>
                                    <select class="form-control" id="cmt_user" name="cmt_user">
                                        <? foreach ($data_all_user->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($cmt_user == $item->id) echo 'selected="selected"'; echo ''; ?>><?= $item->username; ?></option>
                                        <? } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="checkbox" name="cmt_status"
                                           id="cmt_status"<? if ($cmt_status == 'on') echo 'checked="checked"';
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
                                    <a href="#" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Hủy bỏ</a>
                                </div>
                            </div>
                    </form>
                </div>
                <!-- /.box-body -->
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
