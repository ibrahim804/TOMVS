<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
$db = mysqli_connect('localhost', 'root', '', 'tomvs');
// Set session variables to be used on profile.php page
//$_SESSION['email'] = $_POST['email'];
//$_SESSION['first_name'] = $_POST['firstname'];
//$_SESSION['last_name'] = $_POST['lastname'];

// Escape all $_POST variables to protect against SQL injections
$first_name = mysqli_real_escape_string($db,$_POST['firstname']);
$last_name = mysqli_real_escape_string($db, $_POST['lastname']);
$user_name = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
$password = mysqli_real_escape_string(password_hash($db,($_POST['password'], PASSWORD_BCRYPT)));
$hash =mysqli_real_escape_string( md5( rand(0,1000) ) );


// Check if user with that email already exists
//$email_query = "SELECT * FROM users WHERE email='$email'";
//$result = mysqli_query($db, $email_query);

// We know user email exists if the rows returned are more than 0
//if ( $result->num_rows > 0 ) {
    
 //   $_SESSION['message'] = 'User with this email already exists!';
 //   header("location: loginerror.php");
    
//}
//else { // Email doesn't already exist in a database, proceed...

    $query = "INSERT INTO users (first_name, last_name, user_name,email, address, mobile,password,hash) 
    VALUES('$first_name', '$last_name','$user_name','$email', '$address','$mobile','$password','$hash')";
    mysqli_query($db, $query);


    // active is 0 by DEFAULT (no need to include it here)
    //$sql = "INSERT INTO users (first_name, last_name, user_name ,email, address, mobile,password, hash) " 
    //        . "VALUES ('$first_name','$last_name',$user_name,'$email',$address,$mobile,'$password', '$hash')";

    // Add user to the database
   // if ( mysqli_query($db, $query) ){
/*
        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";
        /*
        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( tomvs.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/test/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); */

   // }

    //else {
     //   $_SESSION['message'] = 'Registration failed!';
    //    header("location: loginerror.php");
    //}

//}
?>