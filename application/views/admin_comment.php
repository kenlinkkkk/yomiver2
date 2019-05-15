<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-sm-5">
            <h2>
                Danh sách bình luận
            </h2>
        </div>
        <div class="col-sm-7" style="margin-top: 20px; margin-bottom: 10px;">
            <form class="form-inline" method="post" action="<?= site_url($this->uri->level(2)); ?>">
                <input type="hidden" name="isPost" value="1"/>
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="basic-addon2" placeholder="Nhập từ khóa tìm kiếm" name="search">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="basic-addon2" placeholder="Nhập tên bài viết" name="article">
                </div>
                
                <div class="form-group">
                    <select class="form-control" id="user" name="user">
                            <option value="">Người Dùng</option>
                        <? foreach ($array_category->result() as $item) { ?>
                            <option value="<?= $item->id; ?>"><?= $item->username; ?></option>
                        <? } ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-default" name="submitsearch">Tìm kiếm</button>
            </form>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tất cả bình luận</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="comment/add/1" type="submit" class="btn btn-info pull-left">Thêm bình luận</a>
                            </div>

                        </div>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Bình luận</th>
                                    <th>Bài viết</th>
                                    <th>Người đăng</th>
                                    <th>Trạng thái</th>
                                    <th>Thời gian</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data_all_comment->result() as $row) { ?>
                                    <tr class="highlight">
                                        <td><?= $row->id; ?></td>
                                        <td><?= $row->cmt; ?></td>
                                        <td><?= $row->title; ?></td>
                                        <td><?= $row->username; ?></td>
                                        <td><? if ($row->status == 'on') {
                                                ?><i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            <? } else {
                                                ?>
                                                <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                            <? } ?>
                                        </td>
                                        <td><?= $row->c_time; ?></td>
                                        <td>
                                            <a href="./comment/edit/<?= $row->id; ?>"
                                               class="btn btn-xs btn-default"><i
                                                    class="fa fa-edit"></i></i> Sửa bình luận</a>
                                            <a href="./comment/delete/<?= $row->id; ?>"
                                               class="btn btn-xs btn-default"
                                               onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                               data-button-type="delete"><i
                                                    class="fa fa-trash"></i> Xóa</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Mã</th>
                                    <th>Bình luận</th>
                                    <th>Bài viết</th>
                                    <th>Người đăng</th>
                                    <th>Thời gian</th>
                                    <th>Hành động</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
