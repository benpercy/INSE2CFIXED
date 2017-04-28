<?php
//Starts a new session
session_start();
//Destroys current session
session_destroy();
//Redirects the user to the index page
header("Location: ../index.php");
