<form method="get" action="">
    
    <label>หมายเลขการจอง <input type="text" name="id_b" /> </label><br>
    <label>วันที่จอง <input type="date" name="date_b" /> </label><br>
    <label>เวลาจอง <input type="time" name="time_b" /> </label><br>
    
    <label>หมายเลขบัตรประชาชน <select name="id_card">
        <?php foreach($people_list as $people){echo "<option value= $people->id_card>$people->id_card </option>";}?></select></label><br>
   
    <label>ชื่อจุดตรวจ <select name="Name_checkpoint">
        <?php foreach($checkpoint_list as $Name_checkpoint){echo "<option value= $Name_checkpoint->id_cp>$Name_checkpoint->Name_checkpoint</option>";}?></select></label><br>
    
    
    <input type="hidden" name="controller" value="booking"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addBooking">Save</button>
</form>
