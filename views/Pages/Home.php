<p>Welcome to our homepage </p>

<p>จำนวนในแต่ละจุด</p>
<table border = 1>
    
    <tr>
        <td><b>จุดตรวจ</b></td>
        <td><b>จำนวนคนจอง</b></td>
        <td><b>จำนวนคนติด</b></td>
        
    </tr>
    <br>
 <?php foreach($sum_list as $sum)
 {
     echo "<tr><td>$sum->name_checkpoint</td>
     <td>$sum->sum</td>
     <td>$sum->sum_result</td>
     </tr> ";
 }
 echo "</table>";
 ?>