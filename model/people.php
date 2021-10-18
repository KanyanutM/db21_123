<?php
class People{
    public $id_card;
    public $Name;
    public $lastname;
    public $Address;
    public $county;
    public $Province;
    public $Phone;

    public function __construct($id_card,$Name,$lastname,$Address,$county,$Province,$Phone)
    {
        $this->id_card = $id_card;
        $this->Name = $Name;
        $this->lastname = $lastname;
        $this->Address = $Address;
        $this->county = $county;
        $this->Province = $Province;
        $this->Phone = $Phone;

    }

    public static function get($id_card){
        //echo "get" ; 
        require("connection_connect.php");
        $sql ="SELECT * FROM People WHERE is_card = '$id_card'" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_card = $my_row[id_card];
        $Name = $my_row[Name];
        $lastname = $my_row[lastname];
        $Address = $my_row[Address];
        $county = $my_row[county];
        $Province = $my_row[Province];
        $Phone = $my_row[Phone];
        require("connection_close.php");
        return new People($id_card,$Name,$lastname,$Address,$county,$Province,$Phone);
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
            $Name = $my_row[Name];
            $lastname = $my_row[lastname];
            $Address = $my_row[Address];
            $county = $my_row[county];
            $Province = $my_row[Province];
            $Phone = $my_row[Phone];
            $peopleList[]=new People($id_card,$Name,$lastname,$Address,$county,$Province,$Phone);

        }
        require("connection_close.php");
        return $peopleList ;

    }

    public static function Add($id_card,$Name,$lastname,$Address,$county,$Province,$Phone)
    {
        
        require("connection_connect.php");
        //echo $QID ; 
        $sql ="INSERT INTO People(id_card,People.Name,lastname,People.Address,county,Province,Phone) 
               VALUES ('$id_card','$Name','$lastname','$Address','$county','$Province','$Phone')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function search($key)
    {
        $peopleList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM People
        where (People.id_card LIKE '%$key%' OR People.Name LIKE '%$key%' OR People.lastname LIKE '%$key%' OR People.Address LIKE '%$key%' 
        OR People.county LIKE '%$key%' OR People.Province LIKE '%$key%' OR People.Phone LIKE '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_card = $my_row[id_card];
            $Name = $my_row[Name];
            $lastname = $my_row[lastname];
            $Address = $my_row[Address];
            $county = $my_row[county];
            $Province = $my_row[Province];
            $Phone = $my_row[Phone];
            $peopleList[]=new People($id_card,$Name,$lastname,$Address,$county,$Province,$Phone);
            
        }

        require("connection_close.php");
        return $peopleList ;

    }

    public static function update($id_card,$Name,$lastname,$Address,$county,$Province,$Phone)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE People 
                SET id_card = '$id_card' , People.Name = '$Name',lastname = '$lastname'
                ,People.Address = '$Address',county = '$county',Province = '$Province', Phone = '$Phone' 
                WHERE id_card = '$id_card' " ;
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