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
    public $id_staff;
    public $Name_s;
    public $Lastname_s;

    public function __construct($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$id_staff,$Name_s,$Lastname_s)
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
        $this->id_staff = $id_staff;
        $this->Name_s =$Name_s;
        $this->Lastname_s = $Lastname_s;
    }

    public static function getAll(){

        //echo "1111111111";
        $atkList=[];
        require("connection_connect.php");
        $sql ="SELECT  S.id_atk, S.date_atk, S.time_atk,S.results,S.id_b,S.id_card,S.NamePeople,S.LastnameP,S.Name_checkpoint,staff.id_staff,staff.first_name,staff.last_name
        FROM (SELECT Atk.id_atk, Atk.date_atk, Atk.time_atk,Atk.results,Atk.id_b,Atk.id_card,Atk.NamePeople,Atk.LastnameP,Atk.Name_checkpoint,Atk.id_staff_checkpoint,detail_of_staff_in_checkpoint.id_staff
        FROM(SELECT ATKtest.id_atk,ATKtest.date_atk,ATKtest.time_atk,ATKtest.results,A.id_b,A.id_card,A.NamePeople,A.LastnameP,A.name AS Name_checkpoint ,ATKtest.id_staff_checkpoint 
        FROM (SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name 
        FROM (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id) AS A INNER JOIN ATKtest ON ATKtest.id_b =A.id_b) AS Atk 
        INNER JOIN detail_of_staff_in_checkpoint ON Atk.id_staff_checkpoint = detail_of_staff_in_checkpoint.id_staff_checkpoint) AS S 
        INNER JOIN staff ON S.id_staff= staff.id_staff " ;
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
            $Name_checkpoint = $my_row[Name_checkpoint];
            $id_staff = $my_row[id_staff];
            $Name_s = $my_row[first_name];
            $Lastname_s = $my_row[last_name];
            $atkList[]= new ATKtest($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$id_staff,$Name_s,$Lastname_s);
        }

        require("connection_close.php");
        return $atkList ;
    }

    public static function get($id_atk){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT  S.id_atk, S.date_atk, S.time_atk,S.results,S.id_b,S.id_card,S.NamePeople,S.LastnameP,S.Name_checkpoint,staff.id_staff,staff.first_name,staff.last_name
        FROM (SELECT Atk.id_atk, Atk.date_atk, Atk.time_atk,Atk.results,Atk.id_b,Atk.id_card,Atk.NamePeople,Atk.LastnameP,Atk.Name_checkpoint,Atk.id_staff_checkpoint,detail_of_staff_in_checkpoint.id_staff
        FROM(SELECT ATKtest.id_atk,ATKtest.date_atk,ATKtest.time_atk,ATKtest.results,A.id_b,A.id_card,A.NamePeople,A.LastnameP,A.name AS Name_checkpoint ,ATKtest.id_staff_checkpoint 
        FROM (SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name 
        FROM (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id) AS A INNER JOIN ATKtest ON ATKtest.id_b =A.id_b) AS Atk 
        INNER JOIN detail_of_staff_in_checkpoint ON Atk.id_staff_checkpoint = detail_of_staff_in_checkpoint.id_staff_checkpoint) AS S 
        INNER JOIN staff ON S.id_staff= staff.id_staff 
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
        $Name_checkpoint = $my_row[Name_checkpoint];
        $id_staff = $my_row[id_staff];
        $Name_s = $my_row[first_name];
        $Lastname_s = $my_row[last_name];
        //echo $id_card;
        require("connection_close.php");
        return new ATKtest($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$id_staff,$Name_s,$Lastname_s);
    }

    public static function Add($id_atk,$date_atk,$time_atk,$results,$id_b,$id_staff)
    {
        
        require("connection_connect.php");
        //echo $QID ; 
        $sql ="INSERT INTO `ATKtest`(`id_atk`, `date_atk`, `time_atk`, `results`, `id_b`, `id_staff_checkpoint`) 
        VALUES ('$id_atk','$date_atk','$time_atk','$result','$id_b','$id_staff')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function search($key)
    {
        $atkList=[];
        require("connection_connect.php");
        $sql = "SELECT  S.id_atk, S.date_atk, S.time_atk,S.results,S.id_b,S.id_card,S.NamePeople,S.LastnameP,S.Name_checkpoint,staff.id_staff,staff.first_name,staff.last_name
        FROM (SELECT Atk.id_atk, Atk.date_atk, Atk.time_atk,Atk.results,Atk.id_b,Atk.id_card,Atk.NamePeople,Atk.LastnameP,Atk.Name_checkpoint,Atk.id_staff_checkpoint,detail_of_staff_in_checkpoint.id_staff
        FROM(SELECT ATKtest.id_atk,ATKtest.date_atk,ATKtest.time_atk,ATKtest.results,A.id_b,A.id_card,A.NamePeople,A.LastnameP,A.name AS Name_checkpoint ,ATKtest.id_staff_checkpoint 
        FROM (SELECT B.id_b,B.date_b,B.time_b,B.id_card,B.NamePeople,B.LastnameP,CheckPoint.name 
        FROM (SELECT Booking.id_b,Booking.date_b,Booking.time_b,Booking.id_card,People.NamePeople,People.LastnameP ,Booking.id_checkpoint 
        FROM Booking INNER JOIN People ON Booking.id_card = People.id_card) AS B INNER JOIN CheckPoint ON B.id_checkpoint = CheckPoint.id) AS A INNER JOIN ATKtest ON ATKtest.id_b =A.id_b) AS Atk 
        INNER JOIN detail_of_staff_in_checkpoint ON Atk.id_staff_checkpoint = detail_of_staff_in_checkpoint.id_staff_checkpoint) AS S 
        INNER JOIN staff ON S.id_staff= staff.id_staff
        where (S.id_atk LIKE '%$key%' OR S.date_atk LIKE '%$key%' OR S.time_atk LIKE '%$key%' OR S.results LIKE '%$key%' 
        OR S.id_b LIKE '%$key%' OR S.id_card LIKE '%$key%' OR S.NamePeople LIKE '%$key%' OR S.LastnameP LIKE '%$key%' OR S.Name_checkpoint LIKE '%$key%'
        OR staff.id_staff LIKE '%$key%' OR staff.first_name LIKE '%$key%' OR staff.last_name LIKE '%$key%')";
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
            $Name_checkpoint = $my_row[Name_checkpoint];
            $id_staff = $my_row[id_staff];
            $Name_s = $my_row[first_name];
            $Lastname_s = $my_row[last_name];
            $atkList[]=new ATKtest($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$id_staff,$Name_s,$Lastname_s);
            
        }

        require("connection_close.php");
        return $atkList ;

    }

    public static function update($id_atk,$date_atk,$time_atk,$results,$id_b,$id_card,$NamePeople,$LastnameP,$Name_checkpoint,$id_staff,$Name_s,$Lastname_s)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE `ATKtest` SET `date_atk`='$date_atk',`time_atk`='$time_atk',
        `results`='$result',`id_b`='$id_b',`id_staff_checkpoint`='$id_staff' 
        WHERE  id_b = '$NEWIDatk' " ;
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