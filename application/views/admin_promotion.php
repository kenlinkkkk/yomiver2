<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Promotion
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active"> Promotion</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tất cả promotion <span id="status" style="color: red;"> <?= $this->session->flashdata('Status')?></span></h3>
                        <script>
                            setTimeout(function () {
                                $('#status').fadeOut('fast');
                            },3000);
                        </script>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="promotion/add/1" type="submit" class="btn btn-info pull-left">Thêm</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Mã </th>
                                    <th>Tiêu đề </th>
                                    <th>Hành động</th>
                                </tr>

                                </thead>
                                <?php foreach ($all_promotion->result() as $row) { ?>
                                    <tr class="highlight">
                                        <td> <?= $row->id; ?></td>
                                        <td> <?= $row->description; ?></td>
                                        <td>
                                            <!-- <a href="#" class="btn btn-xs btn-default"><i class="fa fa-list-alt"></i> Xem-->
                                            <!--                                            tất cả bài-->
                                            <!--                                            viết</a>-->
                                            <a href="./promotion/edit/<?= $row->id; ?>" class="btn btn-xs btn-default"><i
                                                        class="fa fa-edit"></i></i> Sửa </a>
                                            <a href="./promotion/delete/<?= $row->id; ?>" class="btn btn-xs btn-default"
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