<?php class StaffDetail{
    public $id_staff_checkpoint; 
    public $id_staff; 

    
    public function __construct($id_staff_checkpoint,$id_staff){
        $this->id_staff_checkpoint = $id_staff_checkpoint;
        $this->id_staff = $id_staff;

    }
    public static function getAll(){
        $StaffList=[];
        require("connection_connect.php");
        $sql ="SELECT detail_of_staff_in_checkpoint.id_staff_checkpoint,detail_of_staff_in_checkpoint.id_staff
        FROM detail_of_staff_in_checkpoint" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_checkpoint = $my_row[id_staff_checkpoint];
            $id_staff = $my_row[id_staff];
            
            $StaffDetailList[]= new StaffDetail($id_staff_checkpoint,$id_staff);
        }
    
        require("connection_close.php");
        return $StaffDetailList ;
    }
}
?>