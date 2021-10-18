<form method ="get" action="">
    <label>id_card <input type="text" name="id_card"
             value="<?php echo $people->id_card; ?>" /> </label><br>
    <label>Name <input type="text" name="Name"
              value="<?php echo $people->Name; ?>" /> </label><br>
    <label>lastname <input type="text" name="lastname"
             value="<?php echo $people->lastname; ?>" /> </label><br>
    <label>Address <input type="text" name="Address"
             value="<?php echo $people->Address; ?>" /> </label><br>
    <label>county <input type="text" name="county"
             value="<?php echo $people->county; ?>" /> </label><br>
    <label>Province <input type="text" name="Province"
             value="<?php echo $people->Province; ?>" /> </label><br>
    <label>Phone <input type="text" name="Phone"
             value="<?php echo $people->Phone; ?>" /> </label><br>
    

    <input type="hidden" name="controller" value="people"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>