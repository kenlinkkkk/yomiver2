<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách Slide
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active"> Slide</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tất cả slide</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="slide/add/1" type="submit" class="btn btn-info pull-left">Thêm slide</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>STT </th>
                                    <th>Tiêu đề </th>
                                    <th>Hành động</th>
                                </tr>

                                </thead>
                                <?php foreach ($all_slides->result() as $row) { ?>
                                    <tr class="highlight">
                                        <td> <?= $row->stt; ?></td>
                                        <td> <?= $row->name; ?></td>
                                        <td>
                                            <!-- <a href="#" class="btn btn-xs btn-default"><i class="fa fa-list-alt"></i> Xem-->
                                            <!--                                            tất cả bài-->
                                            <!--                                            viết</a>-->
                                            <a href="./slide/edit/<?= $row->id; ?>" class="btn btn-xs btn-default"><i
                                                    class="fa fa-edit"></i></i> Sửa slide</a>
                                            <a href="./slide/delete/<?= $row->id; ?>" class="btn btn-xs btn-default"
                                               onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                               data-button-type="delete"><i
                                                    class="fa fa-trash"></i> Xóa</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>