﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            QUẢN TRỊ THỂ LOẠI
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>idTL</th>
                                    <th>TênTL</th>
                                    <th>Thứ Tự</th>
                                    <th>Ẩn Hiện</th>
                                    <th>TênTL_Không Dấu</th>
                                    <th>Cập nhật/Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $kq = $qt->ListTheLoai(); ?>
                                <?php while ($rowTL = $kq->fetch_assoc()) { ?>
                                <tr>
                                    <td><?=$rowTL['idTL']?></td>
                                    <td><?=$rowTL['TenTL']?></td>
                                    <td><?=$rowTL['ThuTu']?></td>
                                    <td><?=($rowTL['AnHien'] == 1)?"Đang ẩn":"Đang hiện"?></td>
                                    <td><?=$rowTL['TenTL_KhongDau']?></td>
                                    <td>
                                        <a href="?role=<?php echo $role; ?>&p=theloai_sua&idTL=<?=$rowTL['idTL']?>" class="btn bg-blue waves-effect">Cập nhật</a> &nbsp;
                                        <a href="theloai_xoa.php?idTL=<?=$rowTL['idTL']?>" class="btn bg-red waves-effect" onclick="return confirm('Xóa hả')">Xóa</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>

<!-- Jquery DataTable Plugin Js -->
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="js/pages/tables/jquery-datatable.js"></script>
</body>
</html>
