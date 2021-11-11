<form method="get" action="">
    
    <label>หมายเลขการตรวจ <input type="text" name="id_atk" /> </label><br>
    <label>วันที่ตรวจ <input type="date" name="date_atk" /> </label><br>
    <label>เวลาที่ตรวจ <input type="time" name="time_atk" /> </label><br>
    <label>ผลการตรวจ <input type="text" name="results" /> </label><br>
    
    <label>หมายเลขการจอง <select name="id_b">
        <?php foreach($booking_list as $booking){echo "<option value= $booking->id_b>$booking->id_b </option>";}?></select></label><br>

    <label>หมายเลขผู้ตรวจ <select name="id_staff">
        <?php foreach($staffdetail_list as $staff){echo "<option value= $staff->id_staff_checkpoint>$staff->id_staff_checkpoint </option>";}?></select></label><br>
    
    
    <input type="hidden" name="controller" value="ATKtest"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addATK">Save</button>
</form>
