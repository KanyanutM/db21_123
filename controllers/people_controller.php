<?php class PeopleController
{
    public function index()
    {
        $people_list = People::getAll();
        require_once("./views/people/index_people.php");
    }

    public function newPeople()
    {
    
        require_once("./views/people/newPeople.php");
    }

    public function addPeople()
    {
        $id_card = $_GET['id_card'];
        $Name = $_GET['Name'];
        $lastname = $_GET['lastname'];
        $Address = $_GET['Address'];
        $county = $_GET['county'];
        $Province = $_GET['Province'];
        $Phone = $_GET['Phone'];
        //echo $QID ; 
        $add = People::Add($id_card,$Name,$lastname,$Address,$county,$Province,$Phone);
        //echo $add ;
        PeopleController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $people_list = People::search($key);
        require_once("./views/people/index_people.php");
    }
    
}
?>