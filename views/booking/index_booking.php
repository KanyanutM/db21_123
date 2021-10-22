
<table border = 1>


    new booking <a href="?controller=booking&action=newBooking">click</a><br>

    <form method="get"action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="booking"/>
        <button type="submit" name="action" value="search">
    Search</button>
</form>

    <tr>
        <td>id_b</td>
        <td>date_b</td>
        <td>time_b</td>
        <td>id_card</td>
        <td>Name_b</td>
        <td>Name_checkpoint</td>
        <td> update</td>
        <td> delete </td>
    </tr>
    
 <?php foreach($booking_list as $booking)
 {
     echo "<tr>
     <td>$booking->id_b</td>
     <td>$booking->date_b</td>
     <td>$booking->time_b</td>
     <td>$booking->id_card</td>
     <td>$booking->Name_b</td>
     <td>$booking->Name_checkpoint</td>
     <td><a href=?controller=booking&action=updateForm&id_b=$booking->id_b>update</a></td>
     <td><a href=?controller=booking&action=deleteConfirm&id_b=$booking->id_b>delete</a> </td> </tr>" ;
 }    

 echo "</table>";
 ?>