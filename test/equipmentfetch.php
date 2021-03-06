<?php
include('db.php');
include('equipmentfunction.php');
$query = '';
$output = array();
$query .= "SELECT * FROM equipments ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE equipment_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR quantity LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR unit_price LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR price_condition LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR status LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR date LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR time LIKE "%'.$_POST["search"]["value"].'%"';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["image"] != '')
 {
  $image = '<img src="equipment/'.$row["image"].'" class="img-thumbnail" width="200" height="80" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["equipment_name"];
 $sub_array[] = $row["quantity"];
 $sub_array[] = $row["unit_price"];
 $sub_array[] = $row["price_condition"];
 $sub_array[] = $row["status"];
 $sub_array[] = $row["date"];
 $sub_array[] = $row["time"];
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>