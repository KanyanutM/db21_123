<?php
    echo "กัญญาณัฐ ตั้งเจริญ 6220502060"
?>
<br>

<table border = 1>


    new people <a href="?controller=people&action=newPeople">click</a><br>

    <form method="get"action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="people"/>
        <button type="submit" name="action" value="search">
    Search</button>
</form>

    <tr>
        <td>id_card</td>
        <td>NamePeople</td>
        <td>LastnameP</td>
        <td>Address</td>
        <td>County</td>
        <td>Province</td>
        <td>Phone</td>
        <td> update</td>
        <td> delete </td>
    </tr>
    
 <?php foreach($people_list as $people)
 {
     echo "<tr>
     <td>$people->id_card</td>
     <td>$people->NamePeople</td>
     <td>$people->LastnameP</td>
     <td>$people->Address</td>
     <td>$people->County</td>
     <td>$people->Province</td>
     <td>$people->Phone</td>
     <td><a href=?controller=people&action=updateForm&id_card=$people->id_card>update</a></td>
     <td><a href=?controller=people&action=deleteConfirm&id_card=$people->id_card>delete</a> </td> </tr>" ;
 }    

 echo "</table>";
 ?>