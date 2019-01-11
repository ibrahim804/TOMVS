<?php

include('db.php');
include("carfunction.php");

if(isset($_POST["car_id"]))
{
 $image = get_image_name($_POST["car_id"]);
 if($image != '')
 {
  unlink("car/" . $image);
 }
 $statement = $connection->prepare(
  "DELETE FROM cars WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["car_id"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}

?>
   