<?php
include('db.php');
include('bikefunction.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["bike_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO bikes (brand_name, model_name,oby,fuel,capacity,price_condition,color,status,price, image) 
   VALUES (:brand_name,:model_name,:oby,:fuel,:capacity,:price_condition,:color,:status, :price, :image)
  ");
  $result = $statement->execute(
   array(
    ':brand_name' => $_POST["brand_name"],
    ':model_name' => $_POST["model_name"],
    ':oby' => $_POST["oby"],
    ':fuel' => $_POST["fuel"],
    ':capacity' => $_POST["capacity"],
    ':price_condition' => $_POST["price_condition"],
    ':color' => $_POST["color"],
    ':status' => $_POST["status"],
    ':price' => $_POST["price"],
    ':image'  => $image
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["bike_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_bike_image"];
  }
  $statement = $connection->prepare(
   "UPDATE bikes 
   SET brand_name = :brand_name,
   model_name = :model_name,
   oby = :oby,
   fuel = :fuel,
   capacity = :capacity,
   price_condition = :price_condition,
   color = :color,
   status = :status,
    price = :price,
    image = :image  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':brand_name' => $_POST["brand_name"],
    ':model_name' => $_POST["model_name"],
    ':oby' => $_POST["oby"],
    ':fuel' => $_POST["fuel"],
    ':capacity' => $_POST["capacity"],
    ':price_condition' => $_POST["price_condition"],
    ':color' => $_POST["color"],
    ':status' => $_POST["status"],
    ':price' => $_POST["price"],
    ':image'  => $image,
    ':id'   => $_POST["bike_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>
   