<?php class CheckPoint{
    public $id_cp; 
    public $NameCheckPoint; 
    
    public function __construct($id_cp,$NameCheckPoint){
        $this->id_cp = $id_cp;
        $this->NameCheckPoint = $NameCheckPoint;
    }
    public static function getAll(){
        $CheckPointList=[];
        require("connection_connect.php");
        $sql ="SELECT CheckPoint.id ,CheckPoint.name FROM CheckPoint" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_cp = $my_row[id];
            $NameCheckPoint = $my_row[name];
            $CheckPointList[]= new CheckPoint($id_cp,$NameCheckPoint);
        }
    
        require("connection_close.php");
        return $CheckPointList ;
    }
}
?>