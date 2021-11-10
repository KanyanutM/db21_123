<form method="get" action="">
    
    <label>id_atk <input type="text" name="id_atk" /> </label><br>
    <label>date_atk <input type="date" name="date_atk" /> </label><br>
    <label>time_atk <input type="time" name="time_atk" /> </label><br>
    <label>resulte <input type="text" name="resulte" /> </label><br>
    
    <label>id_b <select name="id_b">
        <?php foreach($booking_list as $booking){echo "<option value= $booking->id_b>$booking->id_b </option>";}?></select></label><br>
    <label>id_card <select name="id_card">
        <?php foreach($people_list as $id_card){echo "<option value= $id_card->id_card>$id_card->id_card </option>";}?></select></label><br>
    <label>NamePeople <select name="NamePeople">
        <?php foreach($people_list as $NamePeople){echo "<option value= $NamePeople->id_card>$NamePeople->NamePeople</option>";}?></select></label><br>
    <label>LastnameP <select name="LastnameP">
        <?php foreach($people_list as $LastnameP){echo "<option value= $LastnameP->id_card>$LastnameP->LastnameP</option>";}?></select></label><br> 
    <label>Name_checkpoint <select name="Name_checkpoint">
        <?php foreach($checkpoint_list as $Name_checkpoint){echo "<option value= $Name_checkpoint->id_cp>$Name_checkpoint->Name_checkpoint</option>";}?></select></label><br>
    
    
    <input type="hidden" name="controller" value="ATKtest"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addATK">Save</button>
</form>
