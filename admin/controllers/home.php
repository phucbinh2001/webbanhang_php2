trang home
<?php 
require_once "models/model_nhasanxuat.php";
class home 
{
    function __construct()
    {
        header("location:" . ADMIN_URL . "/?ctrl=nhasanxuat");
    }
}

?>