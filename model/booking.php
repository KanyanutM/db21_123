<?php
class Booking{
    public $id_b;
    public $date_b;
    public $time_b;
    public $id_card
    public $Name_b;
    public $Name_checkpoint;

    public function __construct($id_b,$date_b,$time_b,$id_card,$Name_b,$Name_checkpoint)
    {
        $this->id_b = $id_b;
        $this->date_b = $date_b;
        $this->time_b = $time_b;
        $this->id_card = $id_card;
        $this->Name_b = $Name_b;
        $this->Name_checkpoint = $Name_checkpoint;
    }

    public static function getAll(){
        $bookingList=[];
        require("connection_connect.php");
        $sql ="SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.Name,CheckPoint.name  FROM 
        (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.Name ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id " ;
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $id_b = $my_row[id_b];
            $date_b = $my_row[date_b];
            $time_b = $my_row[time_b];
            $id_card =$my_row[id_card];
            $Name_b = $my_row[Name];
            $Name_checkpoint = $my_row[name];
            $bookingList[]= new Booking($id_b,$date_b,$time_b,$id_card,$Name_b,$Name_checkpoint);
        }

        require("connection_close.php");
        return $bookingList ;
    }

    /*public static function get($id_b){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.Name,CheckPoint.name as NameCheckPoint FROM 
        (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.Name ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id 
        WHERE id_b = '$id_b'" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_b = $my_row[id_b];
        $date_b = $my_row[date_b];
        $time_b = $my_row[time_b];
        $id_card =$my_row[id_card];
        $Name_b = $my_row[Name];
        $Name_checkpoint = $my_row[NameCheckPoint];
        //echo $id_card;
        require("connection_close.php");
        return new Booking($id_b,$date_b,$time_b,$id_card,$Name_b,$Name_checkpoint);
    }

    public static function Add($id_b,$date_b,$time_b,$id_card,$Name_b,$Name_checkpoint)
    {
        
        require("connection_connect.php");
        //echo $QID ; 
        $sql ="INSERT INTO Booking(id_b,data_b,time_b,id_card,People.Name,NameCheckPoint) 
               VALUES ('$id_b','$date_b','$time_b','$id_card','$Name_b','$Name_checkpoint')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function search($key)
    {
        $bookingList=[];
        require("connection_connect.php");
        $sql = "SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.Name,CheckPoint.name as NameCheckPoint FROM 
        (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.Name ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id 
        where (B.id_b LIKE '%$key%' OR B.date_b LIKE '%$key%' OR B.time_b LIKE '%$key%' OR B.id_card LIKE '%$key%' 
        OR B.Name LIKE '%$key%' OR CheckPoint.name LIKE '%$key%' )";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_b = $my_row[id_b];
            $date_b = $my_row[date_b];
            $time_b = $my_row[time_b];
            $id_card =$my_row[id_card];
            $Name_b = $my_row[Name];
            $Name_checkpoint = $my_row[NameCheckPoint];
            $bookingList[]=new Booking($id_b,$date_b,$time_b,$id_card,$Name_b,$Name_checkpoint);
            
        }

        require("connection_close.php");
        return $bookingList ;

    }

    public static function update($id_b,$date_b,$time_b,$id_card,$Name_b,$Name_checkpoint,$NEWIDB)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE Booking 
                SET id_b = '$id_b' , date_b = '$date_b', time_b = '$time_b'
                ,id_card = '$id_card', Name_b = '$Name_b', Name_checkpoint = '$Name_checkpoint'
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
    }*/

}