<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách trúng thưởng
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active"> Danh mục</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tất cả danh mục</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="reward/add_reward" type="submit" class="btn btn-info pull-left">Thêm người trúng thưởng</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID </th>
                                <th>Số điện thoại </th>
                                <th>Giải thưởng </th>
                                <th>Giá trị giải thưởng</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>

                            </thead>
                            <?php foreach ($array_reward->result() as $row) { ?>
                                <tr class="highlight">
                                    <td> <?= $row->trung_thuong_id; ?></td>
                                    <td> <?= $row->sdt; ?></td>
                                    <td><?= $row->reward_name; ?></td>
                                    <td><?= number_format($row->reward_amount, 0, '', ','); ?></td>
                                    <td><?= $row->created_at ?></td>
                                    <td>
<!--                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-list-alt"></i> Xem-->
<!--                                            tất cả bài-->
<!--                                            viết</a>-->
                                        <a href="./reward/edit_reward/<?= $row->trung_thuong_id; ?>" class="btn btn-xs btn-default"><i
                                                    class="fa fa-edit"></i></i> Sửa danh
                                            mục</a>
                                        <a href="./reward/delete/<?= $row->trung_thuong_id; ?>" class="btn btn-xs btn-default"
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