<form method="get" action="">
    
    <label>id_atk <input type="text" name="id_atk" /> </label><br>
    <label>date_atk <input type="date" name="date_atk" /> </label><br>
    <label>time_atk <input type="time" name="time_atk" /> </label><br>
    <label>resulte <input type="text" name="resulte" /> </label><br>
    
    <label>id_b <select name="id_b">
        <?php foreach($booking_list as $booking){echo "<option value= $booking->id_b>$booking->id_b </option>";}?></select></label><br>

    <label>id_staff <select name="id_staff">
        <?php foreach($staff_list as $staff){echo "<option value= $staff->id_staff>$staff->id_staff </option>";}?></select></label><br>
    
    
    <input type="hidden" name="controller" value="ATKtest"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addATK">Save</button>
</form>
