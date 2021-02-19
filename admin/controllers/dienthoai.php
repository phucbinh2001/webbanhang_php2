<?php
require_once "models/model_dienthoai.php";
class dienthoai
{

    function __construct()
    {
        $this->model = new model_dienthoai();
        $act = "index"; //chức năng mặc định
        if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
        switch ($act) {
            case "index":
                $this->index();
                break;
            case "addnew":
                $this->addnew();
                break;
            case "store":
                $this->store();
                break;
            case "edit":
                $this->edit();
                break;
            case "update":
                $this->update();
                break;
            case "delete":
                $this->delete();
                break;
        }
        //$this->$act;
    }
    function index()
    {
        /*  Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db
        2. Nạp view hiện danh sách các record vừa lấy*/
        $list = $this->model->listrecords();
        $pageTitle = "Danh sách điện thoại";
        $pageFile = "views/dienthoai_index.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function addnew()
    {
        /*  Chức năng nạp view thêm record,
        1.Nạp form,form này phải có method="post",action của form => store */
        $nsx = $this->model->getThuongHieu();
        $pageTitle = "Thêm điện thoại";
        $pageFile = "views/dienthoai_addnew.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function store()
    {
        /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
                 1. Tiếp nhận các giá trị từ form addnew
                 2. Kiểm tra hợp lệ các giá trị nhận được
                 3. Gọi hàm chèn vào db
                 4. Tạo thông báo     
                 5. Chuyển hướng đến trang cần thiết*/
        if (isset($_POST['them'])) {
            $namedt = $_POST['tendt'];
            $soluong = $_POST['soluong'];
            $thuonghieu = $_POST['thuonghieu'];
            $gia = $_POST['gia'];
            $giakm = $_POST['giakm'];
            $mota = $_POST['mota'];
            if (isset($_POST['anhien']))
                $anhien = 0;
            else    $anhien = 1;
            if (isset($_POST['hot']))
                $hot = 1;
            else    $hot = 0;

            //Upload ảnh
            $thumucluu = "../upload/";
            $filename = $_FILES["anh"]["name"];
            move_uploaded_file($_FILES["anh"]["tmp_name"], $thumucluu.$filename);
            $this->model->store($namedt, $soluong, $thuonghieu, $gia, $giakm, $mota, $anhien, $hot, $filename);
            header("location:" . ADMIN_URL . "/?ctrl=dienthoai");
        }

    }
    function edit()
    {
        $iddt = $_GET['idDT'];
        settype($iddt, 'int');
        $nsx = $this->model->getThuongHieu();
        $row = $this->model->detailrecord($iddt);
        $pageTitle = "Sửa sản phẩm";
        $pageFile = "views/dienthoai_edit.php";
        require_once 'layout.php';
        echo __METHOD__;
    }
    function update()
    {
        if (isset($_POST['sua'])) {
            $namedt = $_POST['tendt'];
            $soluong = $_POST['soluong'];
            $thuonghieu = $_POST['thuonghieu'];
            $gia = $_POST['gia'];
            $giakm = $_POST['giakm'];
            $mota = $_POST['mota'];
            if (isset($_POST['anhien']))
                $anhien = 0;
            else    $anhien = 1;
            if (isset($_POST['hot']))
                $hot = 1;
            else    $hot = 0;

            //Upload ảnh
            $thumucluu = "../upload/";
            $filename = $_FILES["anh"]["name"];
            $idsp = $_POST['idsp'];
            move_uploaded_file($_FILES["anh"]["tmp_name"], $thumucluu.$filename);
            $this->model->update($namedt, $soluong, $thuonghieu, $gia, $giakm, $mota, $anhien, $hot, $filename, $idsp);
            header("location:" . ADMIN_URL . "/?ctrl=dienthoai");
        }
    }
    function delete()
    {
        /* Chức năng xóa record
        1. Tiếp nhận biến id của record cần xóa
        2. Gọi hàm xóa
        3. Tạo thông báo
        4. Chuyển đến trang cần thiết*/
        $iddt = $_GET['idDT'];
        settype($iddt, 'int');
        $row = $this->model->delete($iddt);
        header("location:" . ADMIN_URL . "/?ctrl=dienthoai");
        echo __METHOD__;
    }
}
