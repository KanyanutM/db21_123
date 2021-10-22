<form method ="get" action="">
    <label>id_b <input type="text" name="id_b"
             value="<?php echo $booking->id_b; ?>" /> </label><br>
    <label>date_b <input type="text" name="date_b"
              value="<?php echo $booking->date_b; ?>" /> </label><br>
    <label>time_b <input type="text" name="time_b"
              value="<?php echo $booking->time_b; ?>" /> </label><br>
    <label>id_card <input type="text" name="id_card"
              value="<?php echo $booking->id_card; ?>" /> </label><br>
    <label>Name_b <select name="Name_b">
       <?php foreach($people_list as $Name_b){
           echo "<option value= $Name_b->id_card";
         if($Name_b->id_card==$booking->Name_b){
             echo " selected='selected'" ;
            }
            echo ">$Name_b->Name_p</option>";
      }?></select></label><br>
    <label>Name_checkpoint <select name="Name_checkpoint">
       <?php foreach($CheckPointList as $Name_checkpoint){
         echo "<option value= $Name_checkpoint->id_cp";
         if($Name_checkpoint->id_cp==$booking->NameCheckPoint){
                echo " selected='selected'" ;
            }
            echo ">$Name_checkpoint->NameCheckPoint</option>";
     }?></select></label><br>
    

    <input type="hidden" name="controller" value="booking"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>