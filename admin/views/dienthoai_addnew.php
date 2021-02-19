   <div class="row">
       <div class="p-20">
           <form method="post" enctype="multipart/form-data" action="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=store">
               <div class="form-group">
                   <label for="emailAddress">Tên điện thoại</label>
                   <input type="text" name="tendt" parsley-trigger="change" class="form-control" id="emailAddress">
               </div>
               <div class="form-group">
                   <label for="emailAddress">Số lượng hàng</label>
                   <input type="number" name="soluong" parsley-trigger="change" placeholder="" class="form-control" id="emailAddress">
               </div>
               <div class="form-group">
                   <label class="control-label">Ảnh sản phẩm</label><br>
                   <input type="file" name="anh" class="filestyle" data-buttonname="btn-default">
               </div>
               <div class="form-group">
                   <label class="control-label">Thương hiệu</label><br>
                   <div class="">
                       <select class="form-control" name="thuonghieu">
                           <option value="">Mời chọn thương hiệu</option>
                           <?php
                            foreach ($nsx as $item) {
                            ?>
                               <option value="<?=$item['idNSX']?>"><?= $item['TenNSX'] ?></option>
                           <?php } ?>
                       </select>

                   </div>
               </div>
               <div class="form-group">
                   <label for="emailAddress">Giá</label>
                   <input type="number" name="gia" parsley-trigger="change" placeholder="" class="form-control" id="emailAddress">
               </div>
               <div class="form-group">
                   <label for="emailAddress">Giá khuyến mãi</label>
                   <input type="number" name="giakm" parsley-trigger="change" placeholder="Có thể để trống" class="form-control" id="emailAddress">
               </div>
               <textarea id="elm1" name="mota"></textarea>
               <div class="btn-switch btn-switch-custom">
                   <input type="checkbox" name="anhien" id="anhien">
                   <label for="anhien" class="btn btn-rounded btn-custom waves-effect waves-light">
                       <em class="glyphicon glyphicon-ok"></em>
                       <strong> Ẩn sản phẩm</strong>
                   </label>
               </div>
               <div class="btn-switch btn-switch-custom" style="margin-top: 10px;">
                   <input type="checkbox" name="hot" id="hot">
                   <label for="hot" class="btn btn-rounded btn-custom waves-effect waves-light">
                       <em class="glyphicon glyphicon-ok"></em>
                       <strong> HOT</strong>
                   </label>
               </div>
               <div class="form-group text-right m-b-0">
                   <button class="btn btn-primary waves-effect waves-light" name="them" type="submit">
                       Thêm
                   </button>
                   <button type="reset" class="btn btn-default waves-effect m-l-5">
                       Huỷ
                   </button>
               </div>

           </form>
       </div>
   </div>
   <!-- end row -->