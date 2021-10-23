<form method ="get" action="">
    <label>id_b <input type="text" name="id_b"
             value="<?php echo $booking->id_b; ?>" /> </label><br>
    <label>date_b <input type="text" name="date_b"
              value="<?php echo $booking->date_b; ?>" /> </label><br>
    <label>time_b <input type="text" name="time_b"
              value="<?php echo $booking->time_b; ?>" /> </label><br>
    <label>id_card <input type="text" name="id_card"
              value="<?php echo $booking->id_card; ?>" /> </label><br>
    <label>NamePeople <select name="NamePeople">
       <?php foreach($people_list as $NamePeople){
           echo "<option value= $NamePeople->id_card";
         if($NamePeople->id_card==$booking->NamePeople){
             echo " selected='selected'" ;
            }
            echo ">$NamePeople->NamePeople</option>";
      }?></select></label><br>
    <label>LastnameP <select name="LastnameP">
       <?php foreach($people_list as $LastnameP){
           echo "<option value= $LastnameP->id_card";
         if($LastnameP->id_card==$booking->LastnameP){
             echo " selected='selected'" ;
            }
            echo ">$LastnameP->LastnameP</option>";
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