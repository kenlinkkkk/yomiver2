<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 05/11/2018
 * Time: 4:54 CH
 */
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<div class="container" style="margin-top:30px">
    <div class="col-xs-12" style="margin-top: 10px;">
        <p class="tieude">Trang cá nhân</p>
        <div class="col-xs-12">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;
    font-weight: bold;
    font-size: 20px;">Tất cả bài viết</h3>
                        <div class="box-tools">
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Thời gian</th>
                                    <th>Lượt xem</th>
                                </tr>
                                </thead>
                                <tbody>
                                <? $i = 1;
                                foreach ($array_article->result() as $row) { ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row->title; ?></td>
                                        <td><?= $row->name; ?></td>
                                        <td><? if ($row->a_stt == 'on') {
                                                ?><i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            <? } else {
                                                ?>
                                                <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                            <? } ?>
                                        </td>

                                        <td><?= $row->created_at; ?></td>
                                        <td><?= $row->views; ?></td>
                                    </tr>
                                    <?php
                                    $i++;
                                } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Thời gian</th>
                                    <th>Lượt xem</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <img src="https://i.9mobi.vn/cf/images/2015/03/nkk/anh-gai-xinh-17.jpg"
                                 style="border-radius: 50%" width="50px" height="50px">
                        </div>
                        <div class="col-md-8">
                            <font color="red"> <b><?= $name; ?></b></font>
                        </div>
                        <div class="clearfix"></div>
                        <div>
                            <p>Số bài đã đăng: <font color="red"><strong><?= $count_all_art; ?></strong></font></p>
                            <p>Số lượt xem: <font color="red"><strong><?= $views; ?></strong></font></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "order": [[0, "asc"]]
        });
    });
</script>

<script src="<?= base_url(); ?>js/admin/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>