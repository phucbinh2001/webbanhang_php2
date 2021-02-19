<div class="row">
    <div class="col-sm-12">
    <div class="col-12">
            <a href="http://localhost/banhang/admin/?ctrl=nhasanxuat&act=addnew"class="btn btn-primary waves-effect w-md waves-light m-b-5">Thêm NSX</a>
        </div>
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên NSX</th>
                        <th>Thứ tự</th>
                        <th style="text-align: center;">Ẩn/Hiện</th>
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
                        <td><?= $row['idNSX'] ?></td>
                        <td><?= $row['TenNSX'] ?></td>
                        <td><?= $row['ThuTu'] ?></td>
                        <td style="text-align: center;"><?= ($row['AnHien']==1) ? '<i class="mdi mdi-eye"></i>' : '<i class="mdi mdi-eye-off"></i>' ;  ?></td>
                        <td style="text-align: center;"><a href="?ctrl=nhasanxuat&act=edit&idNSX=<?=$row['idNSX']?>"><i class="mdi mdi-lead-pencil .md-24"></i></a></td>
                        <td style="text-align: center;"><a href="?ctrl=nhasanxuat&act=delete&idNSX=<?=$row['idNSX']?>"><i class="mdi mdi-delete md-24"></i></a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>