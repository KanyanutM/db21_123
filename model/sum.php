<?php class Sum{
    public $name_checkpoint; 
    public $sum; 

    
    public function __construct($name_checkpoint,$sum){
        $this->name_checkpoint = $name_checkpoint;
        $this->sum = $sum;

    }
    public static function getAll(){
        $SumList=[];
        require("connection_connect.php");
        $sql ="SELECT CheckPoint.name AS name_checkpoint,B.sum 
        FROM(SELECT id_checkpoint,COUNT(id_card) As sum from Booking GROUP BY id_checkpoint) As B 
        INNER JOIN CheckPoint ON CheckPoint.id=B.id_checkpoint" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $name_checkpoint = $my_row[name_checkpoint];
            $sum = $my_row[sum];
            
            $SumList[]= new Sum($name_checkpoint,$sum);
        }
    
        require("connection_close.php");
        return $SumList ;
    }
}
?>