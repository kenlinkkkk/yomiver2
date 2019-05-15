<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-sm-6">
            <h2>
                Danh sách bài viết
            </h2>
        </div>
        <div class="col-sm-6" style="margin-top: 20px; margin-bottom: 10px;">
            <form class="form-inline" method="post" action="<?= site_url($this->uri->level(2)); ?>">
                <input type="hidden" name="isPost" value="1"/>
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="basic-addon2" placeholder="Nhập từ khóa tìm kiếm" name="search">
                </div>
                
                <div class="form-group">
                    <select class="form-control" id="cat_parent" name="cat_parent">
                            <option value="">Danh mục</option>
                        <? foreach ($array_category->result() as $item) { ?>
                            <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
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
                        <h3 class="box-title">Tất cả bài viết</h3>
                        <div class="box-tools">
                            <a href="article/add_video/1" type="submit" class="btn btn-info pull-left">Thêm Video</a>
                            <a href="article/add_img/1" type="submit" class="btn btn-info pull-left">Thêm Hình ảnh</a>
                            <a href="article/add_music/1" type="submit" class="btn btn-info pull-left">Thêm Nhạc</a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Người đăng</th>
                                    <th>Thời gian</th>
                                    <th>Lượt xem</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($array_article->result() as $row) { ?>
                                    <tr class="highlight">
                                        <td><?= $row->id_art; ?></td>
                                        <td><?= $row->title; ?></td>
                                        <td><?= $row->name; ?></td>
                                        <td><? if ($row->art_stt == 'on') {
                                                ?><i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            <? } else {
                                                ?>
                                                <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                            <? } ?>
                                        </td>
                                        <td><?= $row->username; ?></td>
                                        <td><?= $row->created_at; ?></td>
                                        <td><?= $row->views; ?></td>
                                        <td>
                                            <? if ($row->parent == 8) { ?>
                                            <a href="./article/edit_img/<?= $row->id_art; ?>"
                                               class="btn btn-xs btn-default"><i
                                                        class="fa fa-edit"></i></i> Sửa bài viết</a>
                                            <? } else if ($row->parent == 9) { ?>
                                                <a href="./article/edit_video/<?= $row->id_art; ?>"
                                                   class="btn btn-xs btn-default"><i
                                                            class="fa fa-edit"></i></i> Sửa bài viết</a>
                                            <? } else if ($row->parent == 13) { ?>
                                                <a href="./article/edit_music/<?= $row->id_art; ?>"
                                                   class="btn btn-xs btn-default"><i
                                                            class="fa fa-edit"></i></i> Sửa bài viết</a>
                                            <? } ?>
                                            <a href="./article/delete/<?= $row->id_art; ?>"
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
                                    <th>Tiêu đề</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Người đăng</th>
                                    <th>Thời gian</th>
                                    <th>Lượt xem</th>
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
