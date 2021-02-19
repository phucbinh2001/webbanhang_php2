<?php
require_once "models/model_nhasanxuat.php";
class nhasanxuat
{

    function __construct()
    {
        $this->model = new model_nhasanxuat();
        $act = "index"; //chức năng mặc định
        if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
        switch ($act) {
            case "index":
                $this->index();
                break;
            case "list":
                $this->list();
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
        $soNSX = $this->model->countNsx();
        $sodt = $this->model->countDt();
        $soDh = $this->model->countDh();
        $soBl = $this->model->countBl(); 
        $pageFile = "views/nhasanxuat_index.php";
        require_once "layout.php";
    }
    function list()
    {
        /*  Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db
        2. Nạp view hiện danh sách các record vừa lấy*/
        $list = $this->model->listrecords();
        $pageTitle = "Danh sách nhà sản xuất";
        $pageFile = "views/nhasanxuat_list.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function addnew()
    {
        /*  Chức năng nạp view thêm record,
        1.Nạp form,form này phải có method="post",action của form => store */
        $pageTitle = "Thêm nhà sản xuất";
        $pageFile = "views/nhasanxuat_addnew.php";
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
            $tennsx = $_POST['tennsx'];
            $thutu = $_POST['thutu'];
            $anhien = $_POST['anhien'];
            $this->model->store($tennsx, $thutu, $anhien);
            header("location:" . ADMIN_URL . "/?ctrl=nhasanxuat&act=list");
        }
        echo __METHOD__;
    }
    function edit()
    {
        /* Chức năng hiện form edit 1 record
                 1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
                 2. Kiểm tra hợp lệ giá trị id
                 3. Gọi hàm lấy record cần chỉnh (1 record)
                 4. Nạp form chỉnh, trong form hiện thông tin của record,
                 5. Form này cũng phải có method là Post, action trỏ lên act update*/
        $idnsx = $_GET['idNSX'];
        settype($idnsx, 'int');
        $row = $this->model->detailrecord($idnsx);
        $pageTitle = "Sửa nhà sản xuất";
        $pageFile = "views/nhasanxuat_edit.php";
        require_once 'layout.php';
        echo __METHOD__;
    }
    function update()
    {
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit
        2. Kiểm tra hợp lệ các giá trị nhận được
        3. Gọi hàm cập nhật vào db
        4. Tạo thông báo
        5. Chuyển hướng đến trang cần thiết */
        if (isset($_POST['sua'])) {
            $tennsx = $_POST['tennsx'];
            $thutu = $_POST['thutu'];
            $anhien = $_POST['anhien'];
            $id = $_POST['idnsx'];
            $this->model->update($id, $tennsx, $thutu, $anhien);
            header("location:" . ADMIN_URL . "/?ctrl=nhasanxuat&act=list");
        }
        echo __METHOD__;
    }
    function delete()
    {
        /* Chức năng xóa record
        1. Tiếp nhận biến id của record cần xóa
        2. Gọi hàm xóa
        3. Tạo thông báo
        4. Chuyển đến trang cần thiết*/
        $idnsx = $_GET['idNSX'];
        settype($idnsx, 'int');
        $row = $this->model->delete($idnsx);
        header("location:" . ADMIN_URL . "/?ctrl=nhasanxuat&act=list");
        echo __METHOD__;
    }
}
