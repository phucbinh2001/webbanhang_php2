   <div class="row">
       <div class="p-20">
           <form method="post" enctype="multipart/form-data" action="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=update">
               <div class="form-group">
                   <label for="emailAddress">Tên điện thoại</label>
                   <input value="<?= $row['TenDT'] ?>" type="text" name="tendt" parsley-trigger="change" class="form-control" id="emailAddress">
               </div>
               <div class="form-group">
                   <label for="emailAddress">Số lượng hàng</label>
                   <input value="<?= $row['SoLuongTonKho'] ?>" type="number" name="soluong" parsley-trigger="change" placeholder="" class="form-control" id="emailAddress">
               </div>
               <div class="form-group">
                   <label class="control-label">Ảnh sản phẩm</label><br>
                   <img src="<?=IMG_FILE.'/'.$row['urlHinh']?>" alt="" class="thumb-lg">
                   <input type="file" name="anh" class="filestyle" data-buttonname="btn-default">
               </div>
               <div class="form-group">
                   <label class="control-label">Thương hiệu</label><br>
                   <div class="">
                       <select class="form-control" name="thuonghieu">
                           <option value="">Mời chọn thương hiệu</option>
                           <?php
                            foreach ($nsx as $item) {
                                $selected = "";
                                if ($row['idNSX'] == $item['idNSX'])
                                    $selected = "selected";
                            ?>
                               <option <?= $selected ?> value="<?= $item['idNSX'] ?>"><?= $item['TenNSX'] ?></option>
                           <?php } ?>
                       </select>

                   </div>
               </div>
               <div class="form-group">
                   <label for="emailAddress">Giá</label>
                   <input value="<?= $row['Gia'] ?>" type="number" name="gia" parsley-trigger="change" placeholder="" class="form-control" id="emailAddress">
               </div>
               <div class="form-group">
                   <label for="emailAddress">Giá khuyến mãi</label>
                   <input value="<?= $row['GiaKM'] ?>" type="number" name="giakm" parsley-trigger="change" placeholder="Có thể để trống" class="form-control" id="emailAddress">
               </div>
               <textarea id="elm1" name="mota"><?= $row['MoTa'] ?></textarea>
               <div class="btn-switch btn-switch-custom">
                   <?php

                    if ($row['Hot'] == 1) $hot = "checked";
                    else $hot = "";
                    if ($row['AnHien'] == 0) $anhien = "checked";
                    else $anhien = "";

                    ?>
                   <input type="checkbox" name="anhien" id="anhien" <?= $anhien ?>>
                   <label for="anhien" class="btn btn-rounded btn-custom waves-effect waves-light">
                       <em class="glyphicon glyphicon-ok"></em>
                       <strong> Ẩn sản phẩm</strong>
                   </label>
               </div>
               <div class="btn-switch btn-switch-custom" style="margin-top: 10px;">
                   <input type="checkbox" name="hot" id="hot" <?= $hot ?>>
                   <label for="hot" class="btn btn-rounded btn-custom waves-effect waves-light">
                       <em class="glyphicon glyphicon-ok"></em>
                       <strong> HOT</strong>
                   </label>
               </div>
               <input type="hidden" name="idsp" value="<?=$row['idDT']?>">
               <div class="form-group text-right m-b-0">
                   <button class="btn btn-primary waves-effect waves-light" name="sua" type="submit">
                       Sửa
                   </button>
                   <button type="reset" class="btn btn-default waves-effect m-l-5">
                       Huỷ
                   </button>
               </div>

           </form>
       </div>
   </div>
   <!-- end row -->