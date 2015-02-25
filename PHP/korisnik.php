<?php
session_start();
     require ("connect.php");
       $datum1=date("Y-m-d");
       $danas=strtotime($datum1);
     if(isset($_POST["trazi"])){
         $trazi= htmlentities($_POST["trazi"]); }
         if(!empty($trazi)){
      $query ="SELECT ime,prezime,tip,datum_unosa FROM clan WHERE ime LIKE '%".mysql_real_escape_string($trazi)."%'";
      $run= mysql_query($query);
         $count=mysql_num_rows($run);
         }
     if($count>=1){
       while($query_row=mysql_fetch_assoc($run)){
        echo $query_row['ime'];echo" ";
         echo $query_row['prezime']; echo" ";
         echo $query_row['tip'];echo" ";
         $clanarina=$query_row['tip'];
         $datum=$query_row['datum_unosa'];
$bronze = strtotime(date("Y-m-d", strtotime($datum)) . " +1 month");
$silve =   strtotime(date("Y-m-d", strtotime($datum)) . " +3 month");
$gold =    strtotime(date("Y-m-d", strtotime($datum)) . " +6 month");
       }
     }
       if($clanarina="Bronze"){
       if($bronze>$danas){
          echo "važi bree";
     }else {echo "nevazi clanarina";}
       }elseif($clanarina="Silver"){
        if($silve>$danas){
          echo "važeća";
       }else {echo "nevažeća";}
        }elseif($clanarina="Gold"){
        if($gold>$danas){
          echo "važeća";
       }else{ echo "nevažeća";}
        }
?>

<form action="korisnik.php" method="POST">
Ime: <input type="text" name="trazi"> <input type="submit" value="Trazi">
<button type="button"><a href="logout.php">Odlogirajte se</a></button>
 <button type="button"><a href="glavna.php">Povratak na glavnu</a></button>
</form>
