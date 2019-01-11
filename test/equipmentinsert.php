<?php
include('db.php');
include('equipmentfunction.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["equipment_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO equipments (equipment_name, quantity,unit_price,price_condition,status,date,time, image) 
   VALUES (:equipment_name,:quantity,:unit_price,:price_condition,:status,:date,:time,:image)
  ");
  $result = $statement->execute(
   array(
    ':equipment_name' => $_POST["equipment_name"],
    ':quantity' => $_POST["quantity"],
    ':unit_price' => $_POST["unit_price"],
    ':price_condition' => $_POST["price_condition"],
    ':status' => $_POST["status"],
    ':date' => $_POST["date"],
    ':time' => $_POST["time"],
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
  if($_FILES["equipment_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_equipment_image"];
  }
  $statement = $connection->prepare(
   "UPDATE equipments 
   SET equipment_name = :equipment_name,
   quantity = :quantity,
   unit_price = :unit_price,
   price_condition = :price_condition,
   status = :status,
   date = :date,
   time = :time,
    image = :image  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':equipment_name' => $_POST["equipment_name"],
    ':quantity' => $_POST["quantity"],
    ':unit_price' => $_POST["unit_price"],
    ':price_condition' => $_POST["price_condition"],
    ':status' => $_POST["status"],
    ':date' => $_POST["date"],
    ':time' => $_POST["time"],
    ':image'  => $image,
    ':id'   => $_POST["equipment_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>
   