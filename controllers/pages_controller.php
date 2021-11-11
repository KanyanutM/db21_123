<?php
    class PageController
    {
        echo "55555";
        public function home()
        { 
            echo "55555555555";
            $sum_list = Sum::getAll();
            //$fieldhospital_list = field_hospital::getsum($summarize_list) ;
            require_once("./views/Pages/Home.php");
        }

        
        public function error()
        { require_once("./views/Pages/Error.php");}
    }
?>