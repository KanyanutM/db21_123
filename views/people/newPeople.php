<form method="get" action="">
    
    <label>หมายเลขบัตรประชาชน <input type="text" name="id_card" /> </label><br>
    <label>ชื่อ <input type="text" name="NamePeople" /> </label><br>
    <label>นามสกุล <input type="text" name="LastnameP" /> </label><br>
    <label>ที่อยู่ <input type="text" name="Address" /> </label><br>
    <label>เขต <input type="text" name="County" /> </label><br>
    <label>จังหวัด <input type="text" name="Province" /> </label><br>
    <label>เบอร์โทรศัพท์ <input type="text" name="Phone" /> </label><br>
    
    <input type="hidden" name="controller" value="people"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPeople">Save</button>
</form>
