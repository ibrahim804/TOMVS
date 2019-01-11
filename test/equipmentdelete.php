<?php

include('db.php');
include("equipmentfunction.php");

if(isset($_POST["equipment_id"]))
{
 $image = get_image_name($_POST["equipment_id"]);
 if($image != '')
 {
  unlink("equipment/" . $image);
 }
 $statement = $connection->prepare(
  "DELETE FROM equipments WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["equipment_id"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}

?>
   