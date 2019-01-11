<?
session_start();

$first_name = "";
$last_name = "";
$user_name = "";
$email = "";
$address = "";
$mobile = "";
$password = "";
$hash = "";

$errors = array();

$db = mysqli_connect('localhost', 'root','','tomvs');

if(isset($_POST['signup'])){
    $first_name = mysqli_real_escape_string($db, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($db, $_POST['lastname']);
    $user_name = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $mobile = mysqli_real_escape_string($db,$POST['mobile']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password = md5($password);
    $hash = mysqli_real_escape_string(md5(rand(0,1000)));

    $query = "INSERT INTO users (first_name, last_name, user_name, email,address, mobile,password,hash) 
	VALUES('$first_name', '$last_name','$user_name','$email', '$address','$mobile','$password','$hash')";
	if(mysqli_query($db, $query)){
        alert("data inserted into database.") ; 
        header('location: login.php'); 
    }
    else{
        alert("data not inserted.");
        header('location: index.php');
    }

}

?>