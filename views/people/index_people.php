<?php
    echo "กัญญาณัฐ ตั้งเจริญ 6220502060"
?>
<br>

<table border = 1>


    new quotation <a href="?controller=people&action=newPeople">click</a><br>

    <form method="get"action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="people"/>
        <button type="submit" name="action" value="search">
    search</button>
</form>

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
     <td>$people->Phone</td>
     <td><a href=?controller=people&action=updateForm&id_card=$people->id_card>update</a></td>
     <td><a href=?controller=people&action=deleteConfirm&id_card=$people->card>delete</a> </td> </tr>" ;
 }    

 echo "</table>";
 ?>