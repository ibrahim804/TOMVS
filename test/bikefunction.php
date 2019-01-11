<?php

function upload_image()
{
 if(isset($_FILES["bike_image"]))
 {
  $extension = explode('.', $_FILES['bike_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './bike/' . $new_name;
  move_uploaded_file($_FILES['bike_image']['tmp_name'], $destination);
  return $new_name;
 }
}

function get_image_name($bike_id)
{
 include('db.php');
 $statement = $connection->prepare("SELECT image FROM bikes WHERE id = '$bike_id'");
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
 $statement = $connection->prepare("SELECT * FROM bikes");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
   