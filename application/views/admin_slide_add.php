<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Slide
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li> Slide</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chi tiết Slide </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="isPost" value="1"/>
                        <section class="content">

                            <div class="box-body">
                                <div class="form-group">
                                    <label> Tiêu đề </label>
                                    <input type="text" class="form-control" id="slide_name" name="slide_name"  maxlength="150"
                                           value="<?= $slide_name; ?>"
                                           placeholder="Nhập tiêu đề slide">
                                </div>

                                <div class="form-group">
                                    <label> Mô tả </label>
                                    <input type="text" class="form-control" id="slide_summary" name="slide_summary"  maxlength="300"
                                           value="<?= $slide_summary; ?>"
                                           placeholder="Nhập mô tả cho slide">
                                </div>

                                <div class="form-group">
                                    <label> Đường dẫn </label>
                                    <input type="text" class="form-control" id="slide_url" name="slide_url"  maxlength="300"
                                           value="<?= $slide_url; ?>"
                                           placeholder="Nhập đường dẫn">
                                </div>

                                <div class="form-group">
                                    <label> Thứ tự hiển thị </label>
                                    <input type="text" class="form-control" id="slide_stt" name="slide_stt" required maxlength="2"
                                           value="<?= $slide_stt; ?>"
                                           placeholder="Nhập số thứ tự">
                                </div>

                                <div class="form-group">
                                    <label>Hình ảnh </label>
                                    <input type="text" class="form-control" id="slide_images" name="slide_images"  maxlength="300"
                                           value="<?= $slide_images; ?>" placeholder="Upload image">
                                    <div class="form-group">
                                        <input type="file" name="picture">
                                    </div>
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
                                                    document.getElementById('slide_images').value = file.getUrl();
                                                });
                                                finder.on('file:choose:resizedImage', function (evt) {
                                                    document.getElementById('slide_images').value = evt.data.resizedUrl;
                                                });
                                            }
                                        });
                                    }
                                </script>
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