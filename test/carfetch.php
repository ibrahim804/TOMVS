<?php
include('db.php');
include('carfunction.php');
$query = '';
$output = array();
$query .= "SELECT * FROM cars ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE brand_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR model_name LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR oby LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR fuel LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR capacity LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR price_condition LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR color LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR status LIKE "%'.$_POST["search"]["value"].'%"';
 $query .= 'OR price LIKE "%'.$_POST["search"]["value"].'%" ';
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
  $image = '<img src="car/'.$row["image"].'" class="img-thumbnail" width="300" height="80" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["brand_name"];
 $sub_array[] = $row["model_name"];
 $sub_array[] = $row["oby"];
 $sub_array[] = $row["fuel"];
 $sub_array[] = $row["capacity"];
 $sub_array[] = $row["price_condition"];
 $sub_array[] = $row["color"];
 $sub_array[] = $row["status"];
 $sub_array[] = $row["price"];
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