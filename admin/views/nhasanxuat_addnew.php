    <div class="row">
        <div class="p-20">
            <form method="post" action="<?= ADMIN_URL ?>/?ctrl=nhasanxuat&act=store">
                <div class="form-group">
                    <label for="userName">Tên nhà sản xuất<span class="text-danger">*</span></label>
                    <input type="text" name="tennsx" parsley-trigger="change" required placeholder="Điền tên nhà sản xuất" class="form-control" id="userName">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Thứ tự</label>
                    <input type="number" name="thutu" parsley-trigger="change" placeholder="Có thể để trống" class="form-control" id="emailAddress">
                </div>
                <div class="form-group">
                    <input name="anhien" type="checkbox" id="switch6" data-switch="primary" checked />
                    <label for="switch6" data-on-label="Hiện" data-off-label="Ẩn"></label>
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