<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['date_of_birth']);
unset($_SESSION['contact_details']);
unset($_SESSION['address']);
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();
header('location:index.php');
?>