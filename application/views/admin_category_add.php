<?
    $segment3 = $this->uri->segment(3);
    if ($segment3 == 'add_cate' || $segment3 == 'edit_cate'){
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh mục
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li> Danh mục</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="isPost" value="1"/>
                        <input type="hidden" name="cat_id" id="cat_id" value="<?= $cat_id; ?>"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Tên danh mục</label>
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?= $cat_name; ?>" placeholder="Nhập tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label>Tên hiển thị</label>
                                    <input type="text" class="form-control" id="cat_summary" name="cat_summary"
                                           value="<?= $cat_summary; ?>"
                                           placeholder="Nhập tên hiển thị" required>
                                </div>
                                <div class="form-group">
                                    <label>Chọn icon</label>
                                    <!-- Button tag -->
                                    <button class="btn btn-default" data-iconset="glyphicon" data-icon="<?= $cat_icon?>" role="iconpicker" name="icon"></button>
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh </label>
                                    <input type="text" class="form-control" id="art_images" name="art_images"
                                           value="<?= $art_images; ?>" placeholder="Upload ảnh cho danh mục">
                                    <div class="form-group">
                                        <input id="picture" type="file" name="picture">
                                    </div>
                                </div>
<!--                                <div class="form-group">-->
<!--                                    <label>Đường dẫn</label>-->
<!--                                    <input type="text" class="form-control" tabindex="1" id="cat_url" value="--><?//= $cat_url; ?><!--"-->
<!--                                           name="cat_url">-->
<!--                                </div>-->

                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select class="form-control" id="cat_parent" name="cat_parent">
                                        <option value="999">Là danh mục cha</option>
                                        <? foreach ($array_category->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($cat_parent == $item->id) echo 'selected="selected"'; echo ''; ?>><?= $item->name; ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                                                    
                                <input type="hidden" class="form-control" id="duplicate_menu" name="duplicate_menu" value="0">
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="form-control" id="url_default" name="url_default">
                                        <option value="video/"<? if($url_default == 'video/'){ echo 'selected="selected"';} ?>>Video</option>
                                        <option value="anh/" <? if($url_default == 'anh/'){ echo 'selected="selected"';} ?>>Ảnh</option>
                                        <option value="nhac/" <? if($url_default == 'nhac/'){ echo 'selected="selected"';} ?>>Nhạc</option>
                                        <option value="ctkm/" <? if($url_default == 'ctkm/'){ echo 'selected="selected"';} ?>>CTKM</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="checkbox" name="cat_status" id="cat_status"<? if ($cat_status == 'on') echo 'checked="checked"';
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
                                    <a href="" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Hủy bỏ</a>
                                </div>
                            </div>

                            <script src="<?= base_url(); ?>js/admin/bootstrap3-wysihtml5.all.min.js"></script>

                            <script src="<?= base_url(); ?>js/jquery-ui.js"></script>

                            <script src="<?= base_url(); ?>js/admin/jquery-2.1.4.min.js"></script>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#cat_name').blur(function () {
                                        if ($.trim($('#cat_url').val()) != '') return;
                                        $('#cat_url').attr('disabled', true);

                                        $.post('<?=site_url($this->uri->level(2) . '/url');?>', {title: $('#cat_name').val()}, function (data) {
                                            $('#cat_url').val(data);
                                            $('#cat_url').attr('disabled', false);
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
<?
    } else{
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh mục
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li> Danh mục</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin menu</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="isPost" value="1"/>
                        <input type="hidden" name="cat_id" id="cat_id" value="<?= $cat_id; ?>"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Tên danh mục</label>
                                    <input type="text" class="form-control" id="cat_name" name="cat_name"
                                           value="<?= $cat_name; ?>"
                                           placeholder="Nhập tên danh mục">
                                </div>
            
                                <div class="form-group">
                                    <label>Chọn icon</label>
                                    <!-- Button tag -->
                                    <button class="btn btn-default" data-iconset="glyphicon" data-icon="<?= $cat_icon?>" role="iconpicker" name="icon"></button>
                                </div>

                                <input type="hidden" class="form-control" id="art_images" name="art_images" value="#">
                                    
                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select class="form-control" id="cat_parent" name="cat_parent">
                                        <option value="0">Là danh mục cha</option>
                                        <? foreach ($array_menu->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($cat_parent == $item->id) echo 'selected="selected"'; echo ''; ?>><?= $item->name; ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <select class="form-control" id="duplicate_menu" name="duplicate_menu">
                                        <option value="0">Là danh mục cha</option>
                                        <? foreach ($array_category->result() as $item) { ?>
                                            <option value="<?= $item->id; ?>" <? if ($duplicate_menu == $item->id) echo 'selected="selected"'; echo ''; ?>><?= $item->name; ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Loại Menu</label>
                                    <select class="form-control" id="url_default" name="url_default">
                                        <option value="#"<? if($url_default == '#'){ echo 'selected="selected"';} ?>>Tổng hợp</option>
                                        <option value="video/"<? if($url_default == 'video/'){ echo 'selected="selected"';} ?>>Video</option>
                                        <option value="anh/" <? if($url_default == 'anh/'){ echo 'selected="selected"';} ?>>Ảnh</option>
                                        <option value="nhac/" <? if($url_default == 'nhac/'){ echo 'selected="selected"';} ?>>Nhạc</option>
                                        <option value="ctkm/" <? if($url_default == 'ctkm/'){ echo 'selected="selected"';} ?>>CTKM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="checkbox" name="cat_status" id="cat_status"<? if ($cat_status == 'on') echo 'checked="checked"';
                                    echo ''; ?>>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <input type="text" class="form-control" id="cat_summary" name="cat_summary"
                                           value="<?= $cat_summary; ?>"
                                           placeholder="Nhập mô tả ngắn">
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
                                    <a href="" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Hủy bỏ</a>
                                </div>
                            </div>

                            <script src="<?= base_url(); ?>js/admin/bootstrap3-wysihtml5.all.min.js"></script>

                            <script src="<?= base_url(); ?>js/jquery-ui.js"></script>

                            <script src="<?= base_url(); ?>js/admin/jquery-2.1.4.min.js"></script>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#cat_name').blur(function () {
                                        if ($.trim($('#cat_url').val()) != '') return;
                                        $('#cat_url').attr('disabled', true);

                                        $.post('<?=site_url($this->uri->level(2) . '/url');?>', {title: $('#cat_name').val()}, function (data) {
                                            $('#cat_url').val(data);
                                            $('#cat_url').attr('disabled', false);
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
<?        
    }
?>