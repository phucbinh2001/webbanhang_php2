 <?php
    require_once "models/model_home.php"; //nạp model để có các hàm tương tác db
    class home
    {
        function __construct()
        {
            $this->model = new model_home();
            $act = "home"; //chức năng mặc định
            if (isset($_GET["act"]) == true) $act = $_GET["act"]; //chức năng user request
            switch ($act) {
                case "home":
                    $this->home();
                    break;
                case "detail":
                    $this->detail();
                    break;
                case "cat":
                    $this->cat();
                    break;
                    // case "cartprocess":
                    //     $this->cart();
                    //     break;
                case "cartview":
                    $this->cartview();
                    break;
                case "cart":
                    $this->cart();
                    break;
            }
        }
        function home()
        {
            $listSPMoi = $this->model->sanphamMoi();
            $listSPChay = $this->model->sanphamChay();
            $viewFile = "views/home.php";
            require_once "layout.php";
        }
        function detail()
        {
            $id = $_GET['id'];
            settype($id, "int");
            $sp = $this->model->detail($id);
            $thuoctinh = $this->model->thuoctinhdt($id);
            if ($sp == FALSE) {
                $viewFile = "views/404.php";
                require_once "layout.php";
                exit();
            }
            $viewFile = "views/detail.php";
            require_once "layout.php";
        }
        function cat()
        {
            $idNSX = $_GET['id'];
            settype($idNSX, "int");
            $nsx = $this->model->nhaSX();
            $brandname = $this->model->getBrandName($idNSX);
            $listSP = $this->model->sanphamtheoNSX($idNSX);
            $viewFile = "views/cat.php";
            require_once "layout.php";
        }
        function cartview()
        {
            $viewFile = "views/cartview.php";
            require_once "layout.php";
        }

        function cart()
        {
            //Tiếp nhậtn biến id (mã sản phẩm) và what (để biết thêm/xóa sp)
            $id = $_GET['id'];
            settype($id, "int");
            $what = "add";
            if (isset($_GET['what'])) $what = $_GET['what'];
            if ($what == "add") {
                if (isset($_SESSION['giohang']) == false) $_SESSION['giohang'] = []; //tạo mảng rổng nếu chưa có
                if(isset($_GET['soluongthem'])) //Dành cho thêm sản phẩm kèm số lượng
                    $soluongthem = $_GET['soluongthem'];
                else
                    $soluongthem = 1;
                $spFromDB = $this->model->detail($id);  //if ($spFromDB==null) ...
                $spInCart = $_SESSION['giohang'][$id]; //['TenDT'=>'A','Amount'=>2]
                if ($spInCart != null) $soluong = $spInCart['Amount'] + $soluongthem;
                else $soluong = 1;
                $_SESSION['giohang'][$id] = [
                    'idDT' => $spFromDB['idDT'],
                    'TenDT' => $spFromDB['TenDT'],
                    'Gia' => $spFromDB['Gia'],
                    'Amount' => $soluong,
                    'urlHinh' => $spFromDB['urlHinh'],
                ];
                echo "<pre>";
                print_r($_SESSION['giohang']);
            } //if what=="add"     
            if ($what == "remove") {
                unset($_SESSION['giohang'][$id]);
                header('location: index.php?act=cartview');
            } //$what=="remove"
            if($what=="removeall") {
                unset($_SESSION['giohang']);
            }
            $viewFile = "views/cartview.php";
            require_once "layout.php";
        } //function cart
    } //class home