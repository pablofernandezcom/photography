<?php
// COPYRIGHT 2016 www.pablofernandez.com
// SCRIPT CALCULATES THE LOCATION OF THE CORRECT PHOTO GALLERY IT SHOULD GENERATE
$Calculate_Include  = $_SERVER['PHP_SELF'];
$Calculate_Include = str_replace("GENERATE_ALBUM_DYNAMICALLY.php","",$Calculate_Include);
$Calculate_Include_Count = substr_count($Calculate_Include,"/");
$Base_Directory = "../GENERATE_ALBUM_DYNAMICALLY.php";

while($Calculate_Include_Count!=0) 
{
  if($Calculate_Include_Count>3)
  {
    $Base_Directory = "../".$Base_Directory;
  }
  $Calculate_Include_Count--;
}
// SCRIPT CALCULATES THE CORRECT LOCATION OF THE FILE IT SHOULD GENERATE
include $Base_Directory;
?>
