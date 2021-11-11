<form method ="get" action="">
    <label>หมายเลขบัตรประชาชน <input type="text" name="id_card"
             value="<?php echo $people->id_card; ?>" /> </label><br>
    <label>ชื่อ <input type="text" name="NamePeople"
              value="<?php echo $people->NamePeople; ?>" /> </label><br>
    <label>นามสกุล <input type="text" name="LastnameP"
             value="<?php echo $people->LastnameP; ?>" /> </label><br>
    <label>ที่อยู่ <input type="text" name="Address"
             value="<?php echo $people->Address; ?>" /> </label><br>
    <label>เขต <input type="text" name="County"
             value="<?php echo $people->County; ?>" /> </label><br>
    <label>จังหวัด <input type="text" name="Province"
             value="<?php echo $people->Province; ?>" /> </label><br>
    <label>เบอร์โทรศัพท์ <input type="text" name="Phone"
             value="<?php echo $people->Phone; ?>" /> </label><br>
    

    <input type="hidden" name="controller" value="people"/>
    <input type="hidden" name="ID" value="<?php echo $people->id_card;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>