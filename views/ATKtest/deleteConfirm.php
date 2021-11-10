<?php echo "<br>Are you sure to delete this ATKtest? <br>
            <br> $atktest->id_atk $atktse->date_atk $atktest->time_atk $atkteat->results $atktest->id_b $atktest->id_card $atktest->Nameatktest $atktest->LastnameP $atktest->Name_checkpoint <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="ATKtest"/>
    <input type="hidden" name="id_atk" value="<?php echo $atktest->id_atk;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>