<?php class Sum{
    public $name_checkpoint; 
    public $sum; 
    public $sum_result;
    
    public function __construct($name_checkpoint,$sum,$sum_result){
        $this->name_checkpoint = $name_checkpoint;
        $this->sum = $sum;
        $this->sum_result = $sum_result;

    }
    public static function getAll(){
        $SumList=[];
        require("connection_connect.php");
        $sql ="SELECT Z.name,Z.sum,atk.sum_result
        From (SELECT id_checkpoint,COUNT(id_atk) As sum_result FROM ATKtest 
        NATURAL JOIN Booking WHERE  ATKtest.id_b IS NOT NULL AND ATKtest.results = 'positive' GROUP BY id_checkpoint) As atk 
        NATURAL JOIN (SELECT B.id_checkpoint,CheckPoint.name,B.sum As sum FROM(SELECT id_checkpoint,COUNT(id_card) As sum 
        from Booking GROUP BY id_checkpoint) As B INNER JOIN CheckPoint ON CheckPoint.id=B.id_checkpoint) As Z" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $name_checkpoint = $my_row[name];
            $sum = $my_row[sum];
            $sum_result = $my_row[sum_result];
            
            $SumList[]= new Sum($name_checkpoint,$sum,$sum_result);
        }
    
        require("connection_close.php");
        return $SumList ;
    }
}
?>