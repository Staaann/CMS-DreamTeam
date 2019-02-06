	<?php
//simon
require('connect.php');

// Unset all of the session variables.
$_SESSION = array();
// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
    $loginMessage = 'You have been logged out.';
      //  include 'index.php';
        header("location: index.php");
}
session_destroy();
// Finally, destroy the session.
 ?>
