<div class="container-fluid">

    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        QUẢN TRỊ LOẠI TIN
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
                                <th>idLT</th>
                                <th>Tên</th>
                                <th>Thứ Tự</th>
                                <th>Ẩn Hiện</th>
                                <th>Tên Không Dấu</th>
                                <th>Trong thể loại</th>
                                <th>Cập nhật/Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $kq = $qt->ListLoaiTin(); ?>
                            <?php while ($rowLT = $kq->fetch_assoc()) {?>
                            <tr>
                                <td><?=$rowLT['idLT']?></td>
                                <td><?=$rowLT['Ten']?></td>
                                <td><?=$rowLT['ThuTu']?></td>
                                <td><?=($rowLT['AnHien'] == 0)?"Đang hiện":"Đang ẩn"?></td>
                                <td><?=$rowLT['Ten_KhongDau']?></td>
                                <td><?=$rowLT['TenTL']?></td>
                                <td>
                                    <a href="?role=<?php echo $role; ?>&p=loaitin_sua&idLT=<?=$rowLT['idLT']?>" class="btn bg-blue waves-effect">Cập nhật</a> &nbsp;
                                    <a href="loaitin_xoa.php?idLT=<?=$rowLT['idLT']?>" class="btn bg-red waves-effect" onClick="return confirm('Xóa hả)">Xóa</a>
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
    <!-- #END# Basic Examples -->
</div>

<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- JQuery DataTable Plugin Js -->
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
