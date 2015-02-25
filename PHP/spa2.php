<?php

 require("connect.php");
 $naziv=$_GET['naziv'];
 $brd=$_GET['brd'];
  $cijena=$_GET['cijena'];
  
  if($brd==10){
   $cijena=$cijena*8;
  }


 $query=mysql_query("INSERT INTO spa (naziv,clan,cijena)
 VALUES('{$naziv}','Jednokratan','{$cijena}')");

  if($query){
  echo "suces";
}else{
 echo "error".mysql_error();
}

?>
<html>
   <a href="glavna.php">Nazad na glavnu</a>
</html>
