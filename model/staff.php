<?php class Staff{
    public $id_s; 
    public $Name_s; 
    public $Lastname_s;

    
    public function __construct($id_s,$Name_s,$Lastname_s){
        $this->id_s = $id_s;
        $this->Name_s = $Name_s;
        $this->Lastname_s = $Lastname_s;
    }
    public static function getAll(){
        $StaffList=[];
        require("connection_connect.php");
        $sql ="SELECT staff.id_staff ,staff.first_name, staff.last_name FROM staff" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_s = $my_row[id_staff];
            $Name_s = $my_row[first_name];
            $Lastname_s = $my_row[last_name];
            $StaffList[]= new Staff($id_s,$Name_s,$Lastname_s);
        }
    
        require("connection_close.php");
        return $StaffList ;
    }
}
?>