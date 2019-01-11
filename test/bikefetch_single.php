<?php
include('db.php');
include('bikefunction.php');
if(isset($_POST["bike_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM bikes 
  WHERE id = '".$_POST["bike_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["brand_name"] = $row["brand_name"];
  $output["model_name"] = $row["model_name"];
  $output["oby"] = $row["oby"];
  $output["fuel"] = $row["fuel"];
  $output["capacity"] = $row["capacity"];
  $output["price_condition"] = $row["price_condition"];
  $output["color"] = $row["color"];
  $output["status"] = $row["status"];
  $output["price"] = $row["price"];
  if($row["image"] != '')
  {
   $output['bike_image'] = '<img src="bike/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_bike_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['bike_image'] = '<input type="hidden" name="hidden_bike_image" value=" " />';
  }
 }
 echo json_encode($output);
}
?>