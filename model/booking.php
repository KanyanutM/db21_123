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
        
    }
}