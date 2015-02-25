<?php
session_start();
require("connect.php");
       $vrsta="Proizvod";
   $query="SELECT naziv,vrsta,cijena FROM cjenik_usluga WHERE vrsta LIKE '%".mysql_real_escape_string($vrsta)."%'";
    $run=mysql_query($query);
     $query2="SELECT cijena,vrsta FROM cjenik_usluga WHERE vrsta LIKE '%".mysql_real_escape_string($vrsta)."%'";
   $query1="SELECT ime FROM radnik";
   $run1=mysql_query($query1);
     $run2=mysql_query($query2);


?>
    <html>

 <form action="proizvodi2.php" method="GET">
Odaberite uslugu <?php echo "<select name='naziv'>";
while ($row = mysql_fetch_array($run)) {
    echo "<option value='" . $row['naziv'] . "'>" . $row['naziv'] . "</option>";
}
echo "</select>"; ?><br>


Odaberite zaposlenika <?php
echo "<select name='ime'>";
while ($row1 = mysql_fetch_array($run1)) {
    echo "<option value='" . $row1['ime'] . "'>" . $row1['ime'] . "</option>";
}
echo "</select>";  ?><br>
      Odaberite cijenu <?php
echo "<select name='cijena'>";
while ($row2 = mysql_fetch_array($run2)) {
    echo "<option value='" . $row2['cijena'] . "'>" . $row2['cijena'] . "</option>";
}
echo "</select>";  ?><br>
 Upisite kolicinu:<input type="number" name="kolicina"><br>

<input type="submit" value="Zapocni">
</form>
</html>
