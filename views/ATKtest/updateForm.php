<form method ="get" action="">
    <label>id_atk <input type="text" name="newid"
             value="<?php echo $atktest->id_atk; ?>" /> </label><br>
    <label>date_atk <input type="date" name="new_date"
              value="<?php echo $atktest->date_atk; ?>" /> </label><br>
    <label>time_atk <input type="time" name="new_time"
              value="<?php echo $atktest->time_atk; ?>" /> </label><br>
    <label>results <input type="text" name="new_results"
              value="<?php echo $atktest->results; ?>" /> </label><br>
    <label>id_b <select name="new_idb">
       <?php foreach($booking_list as $booking){
           echo "<option value= $booking->id_b";
         if($booking->id_b==$atktest->id_b){
             echo " selected='selected'" ;
            }
            echo ">$booking->id_b</option>";
          }?></select></label><br>
    
    <label>id_staff <select name="new_ids">
       <?php foreach($staffdetail_list as $staffdetail){
         echo "<option value= $staffdetail->id_staff_checkpoint";
         if($staffdetail->id_staff_checkpoint==$atktest->id_staff_checkpoint){
            echo " selected='selected'" ;
            }
            echo ">$staffdetail->id_staff_checkpoint</option>";
     }?></select></label><br>
    

    <input type="hidden" name="controller" value="ATKtest"/>
    <input type="hidden" name="ID" value="<?php echo $atktest->id_atk;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>