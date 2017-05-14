<?php
  //start session management
  session_start();
  //connect to the database
  require('../model/database.php');
  //retrieve the functions
  require('../model/functions.php');

  //retrieve the data entered into the form via the post method
  $room = $_POST['room'];
  $starttime = $_POST['startdate'] . " " . $_POST['starttime'];
  $bookinglength = $_POST['bookinglength'];
  $info = $_POST['info'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  //calculate the end time of the booking
  $timestamp = strtotime("$starttime") + 60*60*$bookinglength;
  $endtime = date('Y-m-d H:i', $timestamp);

  //SERVERSIDE FORM VALIDATION
  //check if all required fields have data
  if (empty($room) || empty($starttime) || empty($bookinglength) || empty($name) || empty($email) || empty($phone)){
    //if empty, initialise session called error with user message
    $_SESSION['error'] = "ALL *marked fields are required";
    //redirect to index.php
    header("location:../index.php");
    exit();
  } else {
    //END SERVERSIDE VALIDATION

    //call the add_user function
    $result = add_user($name, $email, $phone);

    if ($result[0] == true){
      $userid = $result[1];
      //add the booking to the database
      $result = add_booking($room, $starttime, $endtime, $info, $userid);
      if ($result){
        $_SESSION['success'] = "Your booking has successfully been added";
      } else {
        $_SESSION['error'] = "There has been an error";
      }
    } else {
      $_SESSION['error'] = "There has been an error";
    }
  }
?>
