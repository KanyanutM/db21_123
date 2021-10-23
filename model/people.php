<?php
class People{
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $Address;
    public $County;
    public $Province;
    public $Phone;

    public function __construct($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone)
    {
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->Address = $Address;
        $this->County = $County;
        $this->Province = $Province;
        $this->Phone = $Phone;

    }

    public static function get($id_card){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT * FROM People WHERE id_card = '$id_card'" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_card = $my_row[id_card];
        $NamePeople = $my_row[NamePeople];
        $LastnameP = $my_row[LastnameP];
        $Address = $my_row[Address];
        $County = $my_row[County];
        $Province = $my_row[Province];
        $Phone = $my_row[Phone];
        //echo $id_card;
        require("connection_close.php");
        return new People($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone);
    }

    public static function getAll()
    {
        
        $peopleList=[];
        
        require("connection_connect.php");
        //echo "1";
        $sql = "SELECT * FROM People" ;
        $result=$conn->query($sql);
        
        while($my_row=$result->fetch_assoc())
        {
            //echo "1";
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Address = $my_row[Address];
            $County = $my_row[County];
            $Province = $my_row[Province];
            $Phone = $my_row[Phone];
            $peopleList[]=new People($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone);

        }
        require("connection_close.php");
        return $peopleList ;

    }

    public static function Add($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone)
    {
        
        require("connection_connect.php");
        //echo $QID ; 
        $sql ="INSERT INTO People(id_card,NamePeople,LastnameP,People.Address,County,Province,Phone) 
               VALUES ('$id_card','$NamePeople','$LastnameP','$Address','$County','$Province','$Phone')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function search($key)
    {
        $peopleList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM People
        where (People.id_card LIKE '%$key%' OR People.NamePeople LIKE '%$key%' OR People.LastnameP LIKE '%$key%' OR People.Address LIKE '%$key%' 
        OR People.County LIKE '%$key%' OR People.Province LIKE '%$key%' OR People.Phone LIKE '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Address = $my_row[Address];
            $County = $my_row[County];
            $Province = $my_row[Province];
            $Phone = $my_row[Phone];
            $peopleList[]=new People($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone);
            
        }

        require("connection_close.php");
        return $peopleList ;

    }

    public static function update($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone,$NEWID)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE People 
                SET id_card = '$id_card' , NamePeople = '$NamePeople', LastnameP = '$LastnameP'
                ,People.Address = '$Address', County = '$County', Province = '$Province', Phone = '$Phone' 
                WHERE id_card = '$NEWID' " ;
        $result=$conn->query($sql);
        //echo $extra_color ; 
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($id_card)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from People WHERE id_card = '$id_card'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }


} 
?>