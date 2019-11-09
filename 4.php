<?php 
	
	$text = "ARKADEMY";
//conversi text ke array
$converArray = str_split($text);

foreach ($converArray as $row) {
 if(preg_match('/^[AIUEO]/', $row[0]))
  {
   echo $row[0] ." = vokal <br >" ;
  }
  else
  {
  echo $row[0] ." = konsonan <br >";
 }
}




 ?>