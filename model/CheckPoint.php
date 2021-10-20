<?php class CheckPoint{
    public $id_card; 
    public $NameCheckPoint; 
    
    public function __construct($id_card,$NameCheckPoint){
        $this->id_card = $id_card;
        $this->NameCheckPoint = $NameCheckPoint;
    }
    public static function getAll(){
        $CheckPointList=[];
        require("connection_connect.php");
        $sql ="SELECT CheckPoint.id ,CheckPoint.name FROM CheckPoint" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_card = $my_row[id];
            $NameCheckPoint = $my_row[name];
            $CheckPointList[]= new CheckPoint($id_card,$NameCheckPoint);
        }
    
        require("connection_close.php");
        return $CheckPointList ;
    }
}
?>