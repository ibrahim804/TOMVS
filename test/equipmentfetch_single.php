<?php
include('db.php');
include('equipmentfunction.php');
if(isset($_POST["equipment_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM equipments 
  WHERE id = '".$_POST["equipment_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["equipment_name"] = $row["equipment_name"];
  $output["quantity"] = $row["quantity"];
  $output["unit_price"] = $row["unit_price"];
  $output["price_condition"] = $row["price_condition"];
  $output["status"] = $row["status"];
  $output["date"] = $row["date"];
  $output["time"] = $row["time"];
  if($row["image"] != '')
  {
   $output['equipment_image'] = '<img src="equipment/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_equipment_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['equipment_image'] = '<input type="hidden" name="hidden_equipment_image" value=" " />';
  }
 }
 echo json_encode($output);
}
?>