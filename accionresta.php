 <?php

$auxiliar=0;

  $sum1=$_POST["uno"];
  $suma=$sum1;
  

  if ($_POST["dos"]!=null) {
    $auxiliar=1;
   $sum2=$_POST["dos"];
   $suma=$suma-$sum2;
  }

    if ($_POST["tres"]!=null) {
       $auxiliar=1;
   $sum3=$_POST["tres"];
   $suma=$suma-$sum3;
  } 

   if ($_POST["cuatro"]!=null) {
     $auxiliar=1;
  $sum4=$_POST["cuatro"];
  $suma=$suma-$sum4;
  } 
   if ($_POST["cinco"]!=null) {
     $auxiliar=1;
   $sum5=$_POST["cinco"];
   $suma=$suma-$sum5;
  } 
    if ($_POST["seis"]!=null) {
       $auxiliar=1;
   $sum6=$_POST["seis"];
   $suma=$suma-$sum6;
  } 
    if ($_POST["siete"]!=null) {
       $auxiliar=1;
  $sum7=$_POST["siete"];
  $suma=$suma-$sum7;
  } 
    if ($_POST["ocho"]!=null) {
       $auxiliar=1;
   $sum8=$_POST["ocho"];
   $suma=$suma-$sum8;
  } 
    if ($_POST["nueve"]!=null) { 
      $auxiliar=1;
   $sum9=$_POST["nueve"];
   $suma=$suma-$sum9;
  } 
   if ($_POST["diez"]!=null) {
    $auxiliar=1;
   $sum0=$_POST["diez"];
   $suma=$suma-$sum0;
  }        
    
     if ($auxiliar==0) {
       echo $auxiliar;
     }else
     {
      echo $suma;
     }
      
   
   ?>