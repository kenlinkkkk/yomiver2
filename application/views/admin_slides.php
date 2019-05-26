<?php
/**
 * Created by PhpStorm.
 * User: ngocson
 * Date: 05/26/2019
 * Time: 08:31 PM
 */
?>


<div class="container-fluid pt-8">
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="<?=base_url()?>/admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slides</li>
        </ol>
        <div class="btn-group mb-0">
            <a class="btn btn-primary btn-sm" href="<?= base_url()?>admin/slide/add"><i class="fas fa-plus mr-2"></i>Thêm Slide</a>
        </div>
    </div>
    <!-- Table -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0">
                    <h2 class=" mb-0">Quản lý slide</h2>
                </div>
                <div class="">
                    <div class="grid-margin">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap  align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Tên</th>
                                            <th>URL</th>
                                            <th>Ảnh</th>
                                            <th>Tiêu đề</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($slides->result() as $slide) {?>
                                        <tr >
                                            <td><?= $slide->id; ?></td>
                                            <td class="text-sm font-weight-600"><?= $slide->name; ?></td>
                                            <td><?= $slide->url; ?></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a class="avatar avatar-sm"  data-toggle="tooltip" href="<?= $slide->image;?>"><img alt="Image placeholder" class="rounded-circle" src="<?= $slide->image;?>"></a>
                                                </div>
                                            </td>
                                            <td><?= $slide->title; ?></td>
                                            <td class="text-nowrap">
                                                <a href="./slide/edit/<?= $slide->id?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Sửa </a>
                                                <a href="./slide/delete/<?= $slide->id?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>