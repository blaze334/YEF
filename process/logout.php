<?php
//Start session
session_start();

session_destroy();
header("location: http://localhost/YEF/index.php");
exit();