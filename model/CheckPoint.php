<?php class CheckPoint{
    public $id_cp; 
    public $Name_checkpoint; 
    
    public function __construct($id_cp,$Name_checkpoint){
        $this->id_cp = $id_cp;
        $this->Name_checkpoint = $Name_checkpoint;
    }
    public static function getAll(){
        $CheckPointList=[];
        require("connection_connect.php");
        $sql ="SELECT CheckPoint.id ,CheckPoint.name FROM CheckPoint" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_cp = $my_row[id];
            $Name_checkpoint = $my_row[name];
            $CheckPointList[]= new CheckPoint($id_cp,$Name_checkpoint);
        }
    
        require("connection_close.php");
        return $CheckPointList ;
    }
}
?>