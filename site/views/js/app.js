function addCart(idsp) {
    $.ajax({
        type: "post",
        url: "?act=cart&what=add&id=" + idsp,
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: 'Đã thêm vào giỏ hàng',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
}