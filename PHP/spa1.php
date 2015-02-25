<?php

    session_start();
    require("connect.php");

    $query="SELECT naziv,vrsta,cijena FROM cjenik_usluga WHERE cjenik_usluga.vrsta LIKE '%".mysql_real_escape_string("Spa")."%'";
    $run=mysql_query($query);

   $query1="SELECT ime FROM radnik";
   $run1=mysql_query($query1);



?>
<html>

 <form action="spa2.php" method="GET">
Odaberite uslugu <?php echo "<select name='naziv'>";
while ($row = mysql_fetch_array($run)) {
    echo "<option value='" . $row['naziv'] . "'>" . $row['naziv'] . "</option>";
}
echo "</select>"; ?>


Odaberite zaposlenika <?php
echo "<select name='ime'>";
while ($row1 = mysql_fetch_array($run1)) {
    echo "<option value='" . $row1['ime'] . "'>" . $row1['ime'] . "</option>";
}
echo "</select>";  ?><br>
 Upišite cijenu:<input type="number" name="cijena"><br>
Upišite broj dolazaka: <input type="number" name="brd"><br>
<input type="submit" value="Zapocni">
</form>
</html>
