<?php
session_start();
 require("connect.php");
if(isset($_POST['ime'])AND ($_POST['prezime'])AND ($_POST['br'])AND ($_POST['mail'])AND ($_POST['datum'])AND ($_POST['mob'])){
 $ime=htmlentities($_POST['ime']);
 $prezime=htmlentities($_POST['prezime']);
 $br=htmlentities($_POST['br']);
 $mail=htmlentities($_POST['mail']);
 $datum=htmlentities($_POST['datum']);
 $mob=htmlentities($_POST['mob']);
 $clan=htmlentities($_POST['clan']);


  $query=mysql_query("INSERT INTO korisnik (Ime,Prezime,Broj_iskaznice,Mail,Datum,Broj_mob,clanarina)
 VALUES('{$ime}','{$prezime}','{$br}','{$mail}','{$datum}','{$mob}','{$clan}')");
   
   if($query){
  echo "suces";
}else{
 echo "error".mysql_error();
}



}



?>
<form action ="strana3.php" method="POST">
       Ime:<br><input type="text" name="ime"><br><br>
       Prezime:<br><input type="text" name="prezime"><br><br>
       Broj iskaznice:<br><input type="number" name="br"><br><br>
       Mail:<br><input type="text" name="mail"><br><br>
       Mobitel:<br><input type="number" name="mob"><br><br>
       clanarina:<br><input type="text" name="clan"><br><br>
       Datum:<br><input type="date" name="datum"><br><br>
       <input type="submit" value="spremi">
        <button type="button"><a href="karta.php">Prodaj kartu</a></button>
</form>
