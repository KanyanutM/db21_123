<table border = 1>

<tr>
    <td>id_card</td>
    <td>Name</td>
    <td>lastname</td>
    <td>Address</td>
    <td>county</td>
    <td>Province</td>
    <td>Phone</td>
</tr>
<?php foreach($people_list as $people)
{
    echo "<tr><td>$people->id_card</td>
    <td>$people->Name</td>
    <td>$people->lastname</td>
    <td>$people->Address</td>
    <td>$people->county</td>
    <td>$people->Province</td>
    <td>$people->Phone</td>" ;
}    

echo "</table>";
 ?>