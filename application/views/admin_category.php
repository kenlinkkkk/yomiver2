<? 
    $segment2 = $this->uri->segment(2);
    if ($segment2 == 'category'){
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách danh mục
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
                                <a href="category/add_cate" type="submit" class="btn btn-info pull-left">Thêm danh mục</a>
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
                                <th>Tên danh mục </th>
                                <th>ID danh mục cha </th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>

                            </thead>
                            <?php foreach ($array_category->result() as $row) { ?>
                                <tr class="highlight">
                                    <td> <?= $row->id; ?></td>
                                    <td> <?= $row->name; ?></td>
                                    <td><?= $row->parent; ?></td>
                                    <td><input type="checkbox" <?= $row->status == 'on' ? 'checked' : ''; ?>></td>
                                    <td>
<!--                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-list-alt"></i> Xem-->
<!--                                            tất cả bài-->
<!--                                            viết</a>-->
                                        <a href="./category/edit_cate/<?= $row->id; ?>" class="btn btn-xs btn-default"><i
                                                    class="fa fa-edit"></i></i> Sửa danh
                                            mục</a>
                                        <a href="./category/delete/<?= $row->id; ?>" class="btn btn-xs btn-default"
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
<?
    } else if($segment2 == 'menu'){
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách Menu
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active"> Menu</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tất cả menu</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="menu/add" type="submit" class="btn btn-info pull-left">Thêm Menu</a>
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
                                <th>Tên menu </th>
                                <th>ID menu cha </th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>

                            </thead>
                            <?php foreach ($array_category->result() as $row) { ?>
                                <tr class="highlight">
                                    <td> <?= $row->id; ?></td>
                                    <td> <?= $row->name; ?></td>
                                    <td><?= $row->parent; ?></td>
                                    <td><input type="checkbox" <?= $row->status == 'on' ? 'checked' : ''; ?>></td>
                                    <td>
<!--                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-list-alt"></i> Xem-->
<!--                                            tất cả bài-->
<!--                                            viết</a>-->
                                        <a href="./menu/edit/<?= $row->id; ?>" class="btn btn-xs btn-default"><i
                                                    class="fa fa-edit"></i></i> Sửa menu</a>
                                        <a href="./menu/delete/<?= $row->id; ?>" class="btn btn-xs btn-default"
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
<?
    }
?>
