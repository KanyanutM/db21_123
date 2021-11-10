<?php
$controllers = array('pages'=>['home','error'],
'people' =>['index','newPeople','addPeople','search','updateForm','update','deleteConfirm','delete'],
'booking' =>['index','newBooking','addBooking','search','updateForm','update','deleteConfirm','delete'],
'ATKtest' =>['index','newATK','addATK','search','updateForm','update','deleteConfirm','delete']) ; 

 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "people" :  require_once("./model/people.php");
                         $controller = new PeopleController(); break ;

        
        case "booking" : require_once("./model/booking.php"); 
                         require_once("./model/CheckPoint.php"); 
                         require_once("./model/people.php");
                         $controller = new BookingController(); break ;

        case "ATKtest" : require_once("./model/ATKtest.php"); 
                         require_once("./model/booking.php"); 
                         require_once("./model/CheckPoint.php"); 
                         require_once("./model/people.php");
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