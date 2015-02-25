<?php
 require("connect.php");
 $naziv=$_GET['naziv'];
 $ime=$_GET['ime'];
 $cijena=$_GET['cijena'];
  $kol=$_GET['kolicina'];

 if($naziv&&$ime&&$cijena){
 $query=mysql_query("INSERT INTO proizvodi (ime,radnik,cijena,kolicina)
 VALUES('{$naziv}','{$ime}','{$cijena}','{$kol}')");

  if($query){
  echo "suces";
}else{
 echo "error".mysql_error();
}
  }
?>
<html>
   <a href="glavna.php">Nazad na glavnu</a>
</html>
