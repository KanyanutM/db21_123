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


} 
?>