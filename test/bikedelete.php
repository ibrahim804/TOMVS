<?php

include('db.php');
include("bikefunction.php");

if(isset($_POST["bike_id"]))
{
 $image = get_image_name($_POST["bike_id"]);
 if($image != '')
 {
  unlink("bike/" . $image);
 }
 $statement = $connection->prepare(
  "DELETE FROM bikes WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["bike_id"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}

?>
   