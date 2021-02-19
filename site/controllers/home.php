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
                // case "cartview":
                //     $this->cartview();
                //     break;
            }
            //$this->$act;
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
        function cat(){
            $idNSX = $_GET['id'];
            settype($idNSX, "int");
            $nsx = $this->model->nhaSX();
            $brandname = $this->model->getBrandName($idNSX);
            $listSP = $this->model->sanphamtheoNSX($idNSX); 
            $viewFile = "views/cat.php";     
            require_once "layout.php";  
        }
    } //class home