<?php
include 'connect.php';



$delete = $conn->prepare("DELETE FROM users WHERE user_id=:id ");
                $delete->execute(array(
                  "id" => $_GET['id']
                ));

header("Location: index.php");
 
 ?>