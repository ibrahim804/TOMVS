<?php 
/* Main page with two forms: sign up and log in */
require 'logindb.php';
require 'signin_auth.php';
session_start();
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['signin'])) { //user logging in

        require 'signin_auth.php';
        
    }
    
    elseif (isset($_POST['signup'])) { //user registering
        
        require 'signup_auth.php';
        
    }
}
?>
