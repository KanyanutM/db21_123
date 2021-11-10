
<?php
    //echo "กัญญาณัฐ ตั้งเจริญ 6220502060"
?>
<br>


<table border = 1>

    new ATKtest <a href="?controller=ATKtest&action=newATK">click</a><br>

    <form method="get"action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="ATKtest"/>
        <button type="submit" name="action" value="search">
    Search</button>
</form>

    <tr><tr>
        <td>id_atk</td>
        <td>date_atk</td>
        <td>time_atk</td>
        <td>results</td>
        <td>id_b</td>
        <td>id_card</td>
        <td>NamePeople</td>
        <td>LastnameP</td>
        <td>Name_checkpoint</td>
        <td>id_staff</td>
        <td>first_name</td>
        <td>last_name</td>
        <td> update</td>
        <td> delete </td>
    </tr>
    
 <?php foreach($atktest_list as $atk)
 {
     echo "<tr>
     <td>$atk->id_atk</td>
     <td>$atk->date_atk</td>
     <td>$atk->time_atk</td>
     <td>$atk->results</td>
     <td>$atk->id_b</td>
     <td>$atk->id_card</td>
     <td>$atk->NamePeople</td>
     <td>$atk->LastnameP</td>
     <td>$atk->Name_checkpoint</td>
     <td>$atk->id_staff</td>
     <td>$atk->Name_s</td>
     <td>$atk->Lastname_s</td>
     <td><a href=?controller=ATKtest&action=updateForm&id_atk=$atk->id_atk>update</a></td>
     <td><a href=?controller=ATKtest&action=deleteConfirm&id_atk=$atk->id_atk>delete</a> </td> </tr>" ;
 }    

 echo "</table>";
 ?>