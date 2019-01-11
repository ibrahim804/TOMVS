<?php

$db = mysqli_connect("localhost", "root", "", "tomvs");

if($db === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 


$first_name = mysqli_real_escape_string($db, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($db, $_REQUEST['lastname']);
$user_name = mysqli_real_escape_string($db, $_REQUEST['username']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$address = mysqli_real_escape_string($db,$_REQUEST['address']);
$mobile = mysqli_real_escape_string($db,$_REQUEST['mobile']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$password = md5($password);
$hash = (md5(rand(0,1000)));
// Escape user inputs for security



// attempt insert query execution

$sql1 = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($db, $sql1);

if (( $result->num_rows) > 0 ) {
    
    
    //$_SESSION['message'] = 'User with this email already exists!';
    echo "use another email. this email is already used.";
    //header("location: loginerror.php");
    
}
else{
    $sql = "INSERT INTO users (first_name, last_name, user_name,email,address,mobile,password,hash) VALUES ('$first_name', '$last_name','$user_name' ,'$email', '$address', '$mobile', '$password', '$hash')";

    if(mysqli_query($db, $sql)){
    
        echo "data inserted";
    } else{
    
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    
    }
    


}

 

// close connection

mysqli_close($db);

?>

