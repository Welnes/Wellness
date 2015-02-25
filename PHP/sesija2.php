<?php
 require("connect.php");
 $naziv=$_GET['naziv'];
 $ime=$_GET['ime'];
 $cijena=$_GET['cijena'];
 
 $query2=mysql_query("SELECT trajanje,naziv FROM cjenik_usluga WHERE naziv LIKE '%".mysql_real_escape_string($naziv)."%'");
 $num=mysql_num_rows($query2);
 if($num!=0){
  while($row=mysql_fetch_assoc($query2)){
   $trajanje=$row['trajanje'];
  }
 }
 if($naziv&&$ime&&$cijena){
 $query=mysql_query("INSERT INTO tretmani (usluga,radnik,cijena,trajanje)
 VALUES('{$naziv}','{$ime}','{$cijena}','{$trajanje}')");

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
