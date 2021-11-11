<?php class PageController{

    public function home(){
        $sum_list = Sum::getAll();
        require_once("./views/Pages/Home.php");
    }

    public function error(){
        require_once("./views/Pages/Error.php");
    }
}
?>