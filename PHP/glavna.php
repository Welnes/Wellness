<?php
session_start();
       echo "dobro dosao".$_SESSION['ussername'];
      echo "<br><a href='logout.php'>Logout</a>";
?>


<html>
<form action='glavna.php' >
<button type="button"><a href="sesija1.php">Prodaj sesiju clanu</a></button><br>
  <button type="button"><a href="strana3.php">Novi korisnik</a></button><br>
<button type="button"><a href="sesija4.php">Tretmani</a></button><br>
<button type="button"><a href="spa.php">Spa usluge</a></button><br>
 <button type="button"><a href="izvjestaji1.php">Izvještaji</a></button><br>
  <button type="button"><a href="proizvodi.php">Prodaja proizvoda</a></button><br>
</form>
</html>
