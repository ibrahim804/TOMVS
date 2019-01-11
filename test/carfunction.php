<?php

function upload_image()
{
 if(isset($_FILES["car_image"]))
 {
  $extension = explode('.', $_FILES['car_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './car/' . $new_name;
  move_uploaded_file($_FILES['car_image']['tmp_name'], $destination);
  return $new_name;
 }
}

function get_image_name($car_id)
{
 include('db.php');
 $statement = $connection->prepare("SELECT image FROM cars WHERE id = '$car_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

function get_total_all_records()
{
 include('db.php');
 $statement = $connection->prepare("SELECT * FROM cars");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
   