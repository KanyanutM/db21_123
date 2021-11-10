<?php class BookingController
{
    public function index()
    {
        //echo "1111111111111";
        $booking_list = Booking::getAll();
        require_once("./views/booking/index_booking.php");
    }

    public function newBooking()
    {
        $people_list=People::getAll();
        $checkpoint_list=CheckPoint::getAll();
        require_once("./views/booking/newBooking.php");
    }

    public function addBooking()
    {
        
        //echo "111111";
        $id_b = $_GET['id_b'];
        $date_b = $_GET['date_b'];
        $time_b = $_GET['time_b'];
        $id_card =$_GET['id_card'];
       // $NamePeople = $_GET['NamePeople'];
       // $LastnameP = $_GET['LastnameP'];
        $Name_checkpoint = $_GET['Name_checkpoint'];
        //echo $id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint; 
        
        Booking::Add($id_b,$date_b,$time_b,$id_card,$Name_checkpoint) ;
        //echo $add ;
        //echo $id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint; 
        BookingController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $booking_list = Booking::search($key);
        require_once("./views/booking/index_booking.php");
    }
    
    public function updateForm() 
    {
        $id_b = $_GET['id_b'];
        $booking = Booking::get($id_b);
        $people_list = People::getAll();
        $checkpoint_list = CheckPoint::getAll();
        require_once("./views/booking/updateForm.php");
    }

    public function update()
    {
        $id_b = $_GET['newid'];
        $NEWIDB = $_GET['IDB'];
        $date_b = $_GET['new_date'];
        $time_b = $_GET['new_time'];
        $id_card =$_GET['new_id'];
       // echo $id_card, $time_b;
        $Name_checkpoint = $_GET['new_cp'];
       // $NamePeople = $_GET['NamePeople'];
      //  $LastnameP = $_GET['LastnameP'];
        
        Booking::update($id_b,$date_b,$time_b,$id_card,$Name_checkpoint,$NEWIDB); 
        BookingController::index();
    }

    public function deleteConfirm()
    {
        //echo "11111111";
        $id_b = $_GET['id_b'];  
        $booking = Booking::get($id_b) ;
        require_once("./views/booking/deleteConfirm.php");
    }
    public function delete()
    {
       $id_b = $_GET['id_b'];
       booking::delete($id_b);
       BookingController::index();
    }

}
?>