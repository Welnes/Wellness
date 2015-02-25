<?php
    session_start();
    require("connect.php");

     $vrsta= htmlentities($_GET['vrsta']);

    if($vrsta){
    $query="SELECT naziv,vrsta,cijena FROM cjenik_usluga WHERE cjenik_usluga.vrsta LIKE '%".mysql_real_escape_string($vrsta)."%'";
    $run=mysql_query($query);

   $query1="SELECT ime FROM radnik";
   $run1=mysql_query($query1);

    }

?>
<html>

 <form action="sesija2.php" method="GET">
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

Upišite cijenu: <input type="number" name="cijena">
<input type="submit" value="Zapocni">
</form>
</html>
