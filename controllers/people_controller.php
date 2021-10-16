<?php class PeopleController
{
    public function index()
    {
        $people_list = People::getAll();
        require_once("./views/people/index_people.php");
    }
}
?>