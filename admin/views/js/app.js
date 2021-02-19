
function deleteRecord(type, id) {
    switch (type) {
        case 'dienthoai':
            Swal.fire({
                title: 'Bạn có thật sự muốn xoá?',
                text: "Dữ liệu sẽ không thể khôi phục lại",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Xoá',
                cancelButtonText: 'Huỷ',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Đã xoá!',
                        '',
                        'success'
                    )
                    $.ajax({
                        type: "get",
                        url: "?ctrl=dienthoai&act=delete&idDT="+id,
                        success: function (response) {
                        location.reload()
                        }
                    });
                }
            })
            break;

        default:
            break;
    }

}