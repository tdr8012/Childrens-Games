<?php
// Initialize session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the game-form.php page after logout
header("Location: http://localhost/WebServerProject_Winter2024/public/form/game-form.php");
exit();

