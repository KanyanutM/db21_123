<?php
$controllers = array('pages'=>['home','error'],
'people' =>['index'],
'booking' =>['index'],
'ATKtest' =>['index']) ; 

 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "people" :  require_once("./models/people.php");
                         $controller = new PeopleController(); break ;

        
        case "booking" : require_once("./models/booking.php") ; 
                         $controller = new BookingController(); break ;

        case "ATKtest" : require_once("./models/ATKtest.php"); 
                         $controller = new ATKtestController(); break ;
    }
    $controller->{$action}(); 
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action) ;
    }else{
        call('page','error') ;
    }
}else
{    call('page','error') ;}
?>