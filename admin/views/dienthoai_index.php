<?php
require_once './models/function.php';
?>
<style>
    td {
        vertical-align: middle;
    }

    td a, td button {
        font-size: 25px;
        cursor: pointer;
    }

    .swal2-popup {
        transform: scale(1.5);
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="col-12">
            <a href="http://localhost/banhang/admin/?ctrl=dienthoai&act=addnew" class="btn btn-primary waves-effect w-md waves-light m-b-5">Thêm sản phẩm</a>
        </div>
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên điện thoại</th>
                        <th>Ảnh sản phẩm</th>
                        <th style="text-align: center;">Giá</th>
                        <th style="width: 400px;text-align: center;">Mô tả</th>
                        <th style="text-align: center;">Thông tin thêm</th>
                        <th style="text-align: center;">Sửa</th>
                        <th style="text-align: center;">Xoá</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($list == NULL) echo "Chưa có dữ liệu";
                    else foreach ($list as $row) {
                    ?>
                        <tr>
                            <td><?= $row['idDT'] ?></td>
                            <td><b><?= $row['TenDT'] ?></b> - <?= $row['TenNSX'] ?><br>
                                <?= ($row['AnHien'] == 1) ? '<span class="text-success">Đang hiện</span>' : '<span class="text-danger">Đang ẩn</span>'; ?>
                                <br>Tồn: <?= $row['SoLuongTonKho'] ?><br>
                                <?= ($row['Hot']==1) ? "<span class='text-danger'>HOT</span>" : "" ; ?>
                            </td>
                            <td class="align-middle"><img width="80px" src="<?= IMG_FILE . '/' . $row['urlHinh'] ?>" alt=""></td>
                            <td><?php
                                if (isset($row['GiaKM'])) {
                                    echo "<strike>" . number_format($row['Gia'], 0, '', '.') . "đ</strike><br>" . number_format($row['GiaKM'], 0, '', '.') . 'đ';
                                } else {
                                    echo number_format($row['Gia'], 0, '', '.') . 'đ';
                                }
                                ?></td>
                            <td><?= cut_string($row['MoTa'], 300, '...') ?></td>
                            <td>
                                <p>Lượt mua: <?= $row['SoLanMua'] ?></p>
                                <p>Lượt xem: <?= $row['SoLanXem'] ?></p>
                                <p>Ngày nhập: <?= date("d/m/Y", strtotime($row['ThoiDiemNhap'])) ?></p>
                            </td>
                            <td style="text-align: center;"><a href="?ctrl=dienthoai&act=edit&idDT=<?= $row['idDT'] ?>"><i class="mdi mdi-lead-pencil .md-24"></i></a></td>
                            <td style="text-align: center;"><a onclick="deleteRecord('dienthoai', <?= $row['idDT'] ?>)"><i class="mdi mdi-delete md-24"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>