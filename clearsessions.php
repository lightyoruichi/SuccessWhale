<?php
/**
 * @file
 * Clears PHP sessions and redirects to the connect page.
 */
 
/* Load and clear sessions */
session_start();
session_destroy();

// Destroy cookies
setcookie('access_token', '', mktime()-1);
setcookie('facebook', '', mktime()-1);
 
/* Redirect to page with the connect to Twitter option. */
header('Location: ./connect.php');
die();
