 <?php
$suma=1;

if (($_POST["uno"])) {
   $sum1=$_POST["uno"];
  $suma=$sum1;
  }

  if ($_POST["dos"]!=null) {
   $sum2=$_POST["dos"];
   $suma=$suma*$sum2;
  }

    if ($_POST["tres"]!=null) {
          $sum3=$_POST["tres"];
   $suma=$suma*$sum3;
  } 

   if ($_POST["cuatro"]!=null) {
       $sum4=$_POST["cuatro"];
  $suma=$suma*$sum4;
  } 
   if ($_POST["cinco"]!=null) {
        $sum5=$_POST["cinco"];
   $suma=$suma*$sum5;
  } 
    if ($_POST["seis"]!=null) {
          $sum6=$_POST["seis"];
   $suma=$suma*$sum6;
  } 
    if ($_POST["siete"]!=null) {
         $sum7=$_POST["siete"];
  $suma=$suma*$sum7;
  } 
    if ($_POST["ocho"]!=null) {
          $sum8=$_POST["ocho"];
   $suma=$suma*$sum8;
  } 
    if ($_POST["nueve"]!=null) { 
   $sum9=$_POST["nueve"];
   $suma=$suma*$sum9;
  } 
   if ($_POST["diez"]!=null) {
   $sum0=$_POST["diez"];
   $suma=$suma*$sum0;
  }        
    
   echo $suma;
      
   
   ?>