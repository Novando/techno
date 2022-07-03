<?php
  session_start();
	include 'dbconnect.php';
  $id = ($_POST['userId']);
  mysqli_query($conn, "UPDATE login SET requestpartner=false, role='Partner' WHERE userid=$id");
  header('location:partner.php');
?>