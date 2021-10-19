<?php class CheckPoint{
    public $id_card;  
    
    public function __construct($id_card){
        $this->id_card = $id_card;
        
    }
    public static function getAll(){
        $CheckPointList=[];
        require("connection_connect.php");
        $sql ="SELECT CheckPoint.id FROM CheckPoint" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_card = $my_row[id];

            $CheckPointList[]= new CheckPoint($id_card);
        }
    
        require("connection_close.php");
        return $CheckPointList ;
    }
}
?>