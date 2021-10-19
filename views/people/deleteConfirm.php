<?php echo "<br>Are you sure to delete this People? <br>
            <br> $people->id_card $people->Name $people->lastname $people->Address $people->county $people->Province $people->Phone <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="people"/>
    <input type="hidden" name="QID" value="<?php echo $people->id_card;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>