<?php
    require("connect.php");
   session_start();
   $username=htmlentities($_POST['username']);
   $lozinka=htmlentities($_POST['lozinka']);

   if($username&&$lozinka){

    $query=mysql_query("SELECT * FROM radnik WHERE ussername='$username'")or die(mysql_error());
    $numrows=mysql_num_rows($query);

    if($numrows!=0)
    {
      while($row=mysql_fetch_assoc($query)){
       $dbuser=$row['ussername'];
       $dbpas=$row['password'];
      }
      }
      else die('nema korisnika');

      if($username==$dbuser&&$lozinka==$dbpas){
        echo "<a href='glavna.php'>Udi u glavnu stranicu</a>";
        $_SESSION['ussername']=$dbuser;
      }else echo "de";

    }

   else{
   die("Upisite korisnicko ime i lozinku");
   }
?>
