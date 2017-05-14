<?php
  function add_user($name, $email, $phone){
    global $conn;
    $sql = "INSERT INTO user (name, email, phone) VALUES (:name, :email, :phone)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $result = $statement->execute();
    $id = $conn->lastInsertId();
    $statement->closeCursor();
    return array($result, $id);
  }

  function add_booking($room, $starttime, $endtime, $info, $userid){
    global $conn;
    $sql = "INSERT INTO booking (room, starttime, endtime, information, userid) VALUES (:room, :starttime, :endtime, :information, :userid)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':room', $room);
    $statement->bindValue(':starttime', $starttime);
    $statement->bindValue(':endtime', $endtime);
    $statement->bindValue(':information', $info);
    $statement->bindValue(':userid', $userid);
    $result = $statement->execute();
    $id = $conn->lastInsertId();
    $statement->closeCursor();
    return array($result, $id);
  }

?>
