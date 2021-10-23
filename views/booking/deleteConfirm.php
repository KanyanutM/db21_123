<?php echo "<br>Are you sure to delete this Booking? <br>
            <br> $booking->id_b $booking->data_b $booking->time_b $booking->id_card $booking->NamePeople $booking->LastnameP $booking->Name_checkpoint <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="booking"/>
    <input type="hidden" name="id_b" value="<?php echo $booking->id_b;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>