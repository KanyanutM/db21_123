<?php
class Booking{
    public $id_b;
    public $date_b;
    public $time_b;
    public $id_card;
    public $id_checkpoint;

    public function __construct($id_b,$date_b,$time_b,$id_card,$id_checkpoint)
    {
        $this->id_b = $id_b;
        $this->data_b = $data_b;
        $this->time_b = $time_b;
        $this->id_card = $id_card;
        $this->id_checkpoint = $id_checkpoint;
    }

    public static function getAll(){
        $bookingList=[];
        require("connection_connect.php");
        $sql ="SELECT * FROM Booking " ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_b = $my_row[id_b];
            $date_b = $my_row[date_b];
            $time_b = $my_row[time_b];
            $id_card =$my_row[id_card];
            $id_checkpoint = $my_row[id_checkpoint];
            $pricedetailList[]= new price_detail($id_b,$date_b,$time_b,$id_card,$id_checkpoint);
        }

        require("connection_close.php");
        return $bookingList ;
    }
}