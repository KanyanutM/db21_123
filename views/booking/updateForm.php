<form method ="get" action="">
    <label>id_b <input type="text" name="id_b"
             value="<?php echo $booking->id_b; ?>" /> </label><br>
    <label>date_b <input type="date" name="date_b"
              value="<?php echo $booking->date_b; ?>" /> </label><br>
    <label>time_b <input type="time" name="time_b"
              value="<?php echo $booking->time_b; ?>" /> </label><br>
    <label>id_card <select name="id_card">
       <?php foreach($people_list as $people){
           echo "<option value $people->id_card";
         if($people->id_card==$booking->id_card){
             echo " selected='selected'" ;
            }
            echo ">$people->id_card</option>";
          }?></select></label><br>
    
    <label>Name_checkpoint <select name="Name_checkpoint">
       <?php foreach($CheckPointList as $Name_checkpoint){
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