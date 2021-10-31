<form method="get" action="">
    
    <label>id_b <input type="text" name="id_b" /> </label><br>
    <label>date_b <input type="text" name="date_b" /> </label><br>
    <label>time_b <input type="text" name="time_b" /> </label><br>
    <label>id_card <input type="text" name="id_card" /> </label><br>
    <label>NamePeople <select name="NamePeople">
        <?php foreach($people_list as $NamePeople){echo "<option value= $NamePeople->id_card>$NamePeople->NamePeople</option>";}?></select></label><br>
    <label>LastnameP <select name="LastnameP">
        <?php foreach($people_list as $LastnameP){echo "<option value= $LastnameP->id_card>$LastnameP->LastnameP</option>";}?></select></label><br>
    <label>Name_checkpoint <select name="Name_checkpoint">
        <?php foreach($checkpoint_list as $Name_checkpoint){echo "<option value= $Name_checkpoint->id_cp>$Name_checkpoint->Name_checkpoint</option>";}?></select></label><br>
    
    
    <input type="hidden" name="controller" value="booking"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addBooking">Save</button>
</form>
