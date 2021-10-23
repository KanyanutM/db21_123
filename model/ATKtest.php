<?php
class ATKtest{
    public $id_atk;
    public $date_atk;
    public $time_atk;
    public $results;
    public $id_b;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $Name_checkpoint;

    public function __construct($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint)
    {
        $this->id_atk = $id_atk;
        $this->date_atk = $date_atk;
        $this->time_atk = $time_atk;
        $this->results = $results;
        $this->id_b = $id_b;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->Name_checkpoint = $Name_checkpoint;
    }

    public static function getAll(){

        //echo "1111111111";
        $atkList=[];
        require("connection_connect.php");
        $sql ="SELECT ATKtest.id_atk,ATKtest.date_atk,ATKtest.time_atk,ATKtest.results,A.id_b,A.id_card,A.NamePeople,A.LastnameP,A.name 
        FROM (SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name 
        FROM (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B 
        INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id) AS A INNER JOIN ATKtest ON ATKtest.id_b =A.id_b " ;
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $id_atk = $my_row[id_atk];
            $date_atk = $my_row[date_atk];
            $time_atk = $my_row[time_atk];
            $results = $my_row[results];
            $id_b = $my_row[id_b];
            $id_card =$my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Name_checkpoint = $my_row[name];
            $atkList[]= new ATKtest($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint);
        }

        require("connection_close.php");
        return $atkList ;
    }

    public static function get($id_atk){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT ATKtest.id_atk,ATKtest.date_atk,ATKtest.time_atk,ATKtest.results,A.id_b,A.id_card,A.NamePeople,A.LastnameP,A.name 
        FROM (SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name 
        FROM (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B 
        INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id) AS A INNER JOIN ATKtest ON ATKtest.id_b =A.id_b 
        WHERE id_atk = '$id_atk'" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_atk = $my_row[id_atk];
        $date_atk = $my_row[date_atk];
        $time_atk = $my_row[time_atk];
        $results = $my_row[results];
        $id_b = $my_row[id_b];
        $id_card =$my_row[id_card];
        $NamePeople = $my_row[NamePeople];
        $LastnameP = $my_row[LastnameP];
        $Name_checkpoint = $my_row[name];
        //echo $id_card;
        require("connection_close.php");
        return new ATKtest($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint);
    }

    public static function Add($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint)
    {
        
        require("connection_connect.php");
        //echo $QID ; 
        $sql ="INSERT INTO ATKtest(id_atk,date_atk,time_atk,results,id_b,id_card,NamePeople,LastnameP,Name_checkpoint) 
               VALUES ('$id_atk','$date_atk','$time_atk','$results','$id_b','$id_card','$NamePeople','$LastnameP','$Name_checkpoint')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function search($key)
    {
        $atkList=[];
        require("connection_connect.php");
        $sql = "SELECT ATKtest.id_atk,ATKtest.date_atk,ATKtest.time_atk,ATKtest.results,A.id_b,A.id_card,A.NamePeople,A.LastnameP,A.name 
        FROM (SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name 
        FROM (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B 
        INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id) AS A INNER JOIN ATKtest ON ATKtest.id_b =A.id_b  
        where (ATKtest.id_atk LIKE '%$key%' OR ATKtest.date_atk LIKE '%$key%' OR ATKtest.time_atk LIKE '%$key%' OR ATKtest.results LIKE '%$key%' 
        OR A.id_b LIKE '%$key%' OR A.id_card LIKE '%$key%' OR A.NamePeople LIKE '%$key%' OR A.LastnameP LIKE '%$key%' OR A.name LIKE '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_atk = $my_row[id_atk];
            $date_atk = $my_row[date_atk];
            $time_atk = $my_row[time_atk];
            $results = $my_row[results];
            $id_b = $my_row[id_b];
            $id_card =$my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Name_checkpoint = $my_row[name];
            $atkList[]=new ATKtest($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint);
            
        }

        require("connection_close.php");
        return $atkList ;

    }

    public static function update($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$NEWIDatk)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE ATKtest 
                SET  id_atk = '$id_atk' , date_atk = '$date_atk', time_atk = '$time_atk' , results = '$results' , id_b = '$id_b'
                , id_card = '$id_card', NamePeople = '$NamePeople', LastnameP = '$LastnameP' , NameCheckPoint = '$Name_checkpoint'
                WHERE id_b = '$NEWIDatk' " ;
        $result=$conn->query($sql);
        //echo $extra_color ; 
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($id_atk)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from ATKtest WHERE id_atk = '$id_atk'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

}
?>