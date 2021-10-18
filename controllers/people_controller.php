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
        
        //echo "111111";
        $id_card = $_GET['id_card'];
        $Name = $_GET['Name'];
        $lastname = $_GET['lastname'];
        $Address = $_GET['Address'];
        $county = $_GET['county'];
        $Province = $_GET['Province'];
        $Phone = $_GET['Phone'];
        //echo $id_card,$Name,$lastname,$Address,$county,$Province,$Phone; 
        
        People::Add($id_card,$Name,$lastname,$Address,$county,$Province,$Phone) ;
        //echo $add ;
        PeopleController::index() ;
    }

    public function search()
    {
        $key = $_GET['key'];
        $people_list = People::search($key);
        require_once("./views/people/index_people.php");
    }
    
    public function updateForm() 
    {
        $id_card = $_GET['id_card'];
        $people = People::get($id_card);
        require_once("./views/people/updateForm.php");
    }

    public function update()
    {
        $id_card = $_GET['id_card'];
        $Name = $_GET['Name'];
        $lastname = $_GET['lastname'];
        $Address = $_GET['Address'];
        $county = $_GET['county'];
        $Province = $_GET['Province'];
        $Phone = $_GET['Phone'];
        //echo $Payment_Type ; 
        People::update($id_card,$Name,$lastname,$Address,$county,$Province,$Phone); 
        PeopleController::index();
    }

}
?>