<form method ="get" action="">
    <label>หมายเลขการจอง <input type="text" name="newid"
             value="<?php echo $booking->id_b; ?>" /> </label><br>
    <label>วันที่จอง <input type="date" name="new_date"
              value="<?php echo $booking->date_b; ?>" /> </label><br>
    <label>เวลาจอง <input type="time" name="new_time"
              value="<?php echo $booking->time_b; ?>" /> </label><br>
    <label>หมายเลขบัตรประชาชน <select name="new_id">
       <?php foreach($people_list as $people){
           echo "<option value= $people->id_card";
         if($people->id_card==$booking->id_card){
             echo " selected='selected'" ;
            }
            echo ">$people->id_card</option>";
          }?></select></label><br>
    
    <label>ชื่อจุดตรวจ <select name="new_cp">
       <?php foreach($checkpoint_list as $Name_checkpoint){
         echo "<option value= $Name_checkpoint->id_cp";
         if($Name_checkpoint->id_cp==$booking->Name_checkpoint){
                echo " selected='selected'" ;
            }
            echo ">$Name_checkpoint->Name_checkpoint</option>";
     }?></select></label><br>
    

    <input type="hidden" name="controller" value="booking"/>
    <input type="hidden" name="IDB" value="<?php echo $booking->id_b;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>