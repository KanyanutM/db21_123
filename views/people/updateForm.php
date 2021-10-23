<form method ="get" action="">
    <label>id_card <input type="text" name="id_card"
             value="<?php echo $people->id_card; ?>" /> </label><br>
    <label>NamePeople <input type="text" name="NamePeople"
              value="<?php echo $people->NamePeople; ?>" /> </label><br>
    <label>LastnameP <input type="text" name="LastnameP"
             value="<?php echo $people->LastnameP; ?>" /> </label><br>
    <label>Address <input type="text" name="Address"
             value="<?php echo $people->Address; ?>" /> </label><br>
    <label>County <input type="text" name="County"
             value="<?php echo $people->County; ?>" /> </label><br>
    <label>Province <input type="text" name="Province"
             value="<?php echo $people->Province; ?>" /> </label><br>
    <label>Phone <input type="text" name="Phone"
             value="<?php echo $people->Phone; ?>" /> </label><br>
    

    <input type="hidden" name="controller" value="people"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>