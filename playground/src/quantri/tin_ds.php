<div class="container-fluid">

    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        QUẢN TRỊ TIN
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
                                <th>idTin</th>
                                <th>Tiêu đề/Tóm tắt</th>
                                <th>Cập nhật/Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $kq = $qt->ListTin(); ?>
                            <?php while ($rowTin = $kq->fetch_assoc()) {?>
                            <tr>
                                <td>
                                    <p>idTin: <?=$rowTin['idTin']?></p>
                                    <p><?=date('d/m/Y',strtotime($rowTin['Ngay']))?></p>
                                    <p>Xem <?=$rowTin['SoLanXem']?></p>
                                </td>
                                <td>
                                    <h4><?=$rowTin['TieuDe']?>  <span>( <?=$rowTin['TenTL']?> / <?=$rowTin['Ten']?>)</span></h4>
                                    <p><?=$rowTin['TomTat']?></p>
                                </td>
                                <td width="120">
                                    <p>
                                        <a href="?role=<?php echo $role; ?>&p=tin_sua&idTin=<?=$rowTin['idTin']?>" class="btn bg-blue waves-effect">Chinh</a> &nbsp;
                                        <a href="tin_xoa.php?idTin=<?=$rowTin['idTin']?>" class="btn bg-red waves-effect" onClick="return confirm('Xóa hả')">Xóa</a>
                                    </p>
                                    <p> <?=($rowTin['AnHien'] == 1) ?"Đang ẩn":"Đang hiện" ?> </p>
                                    <p> <?=($rowTin['TinNoiBat'] == 1) ?"Tin nổi bật":"Tin thường" ?> </p>
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
