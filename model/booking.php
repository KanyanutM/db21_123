<?php
class Booking{
    public $id_b;
    public $date_b;
    public $time_b;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $Name_checkpoint;

    public function __construct($id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint)
    {
        $this->id_b = $id_b;
        $this->date_b = $date_b;
        $this->time_b = $time_b;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->Name_checkpoint = $Name_checkpoint;
    }

    public static function getAll(){

        //echo "1111111111";
        $bookingList=[];
        require("connection_connect.php");
        $sql ="SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name AS Name_checkpoint  FROM 
        (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id " ;
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $id_b = $my_row[id_b];
            $date_b = $my_row[date_b];
            $time_b = $my_row[time_b];
            $id_card =$my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Name_checkpoint = $my_row[Name_checkpoint];
            $bookingList[]= new Booking($id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint);
        }

        require("connection_close.php");
        return $bookingList ;
    }

    public static function get($id_b){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name AS Name_checkpoint  FROM 
        (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id
        WHERE id_b = '$id_b'" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_b = $my_row[id_b];
        $date_b = $my_row[date_b];
        $time_b = $my_row[time_b];
        $id_card =$my_row[id_card];
        $NamePeople = $my_row[NamePeople];
        $LastnameP = $my_row[LastnameP];
        $Name_checkpoint = $my_row[Name_checkpoint];
        //echo $id_card;
        require("connection_close.php");
        return new Booking($id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint);
    }

    public static function Add($id_b,$date_b,$time_b,$id_card,$Name_checkpoint)
    {
        
        require("connection_connect.php");
        //echo 1111 ; 
        $sql ="INSERT INTO Booking(id_b,data_b,time_b,id_card,Name_checkpoint) 
               VALUES ('$id_b','$date_b','$time_b','$id_card','$Name_checkpoint')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function search($key)
    {
        $bookingList=[];
        require("connection_connect.php");
        $sql = "SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name AS Name_checkpoint  FROM 
        (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id 
        where (B.id_b LIKE '%$key%' OR B.date_b LIKE '%$key%' OR B.time_b LIKE '%$key%' OR B.id_card LIKE '%$key%' 
        OR B.NamePeople LIKE '%$key%' OR B.LastnameP LIKE '%$key%' OR CheckPoint.name LIKE '%$key%' )";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_b = $my_row[id_b];
            $date_b = $my_row[date_b];
            $time_b = $my_row[time_b];
            $id_card =$my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Name_checkpoint = $my_row[Name_checkpoint];
            $bookingList[]=new Booking($id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint);
            
        }

        require("connection_close.php");
        return $bookingList ;

    }

    public static function update($id_b,$date_b,$time_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$NEWIDB)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE Booking 
                SET id_b = '$id_b' , date_b = '$date_b', time_b = '$time_b'
                ,id_card = '$id_card', NamePeople = '$NamePeople' ,LastnameP = '$LastnameP' , Name_checkpoint = '$Name_checkpoint'
                WHERE id_b = '$NEWIDB' " ;
        $result=$conn->query($sql);
        //echo $extra_color ; 
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($id_b)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from Booking WHERE id_b = '$id_b'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

}
?>