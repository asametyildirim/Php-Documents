<?php 
include 'connect.php';


try{
$update = $conn->prepare("UPDATE users SET 

  user_name=:frm_user_name,
  user_pass=:frm_user_pass

  WHERE user_id=:iid ");


                $update = $update->execute(array(
                  "iid" =>  $_GET['frm_id'],
                  "frm_user_name" =>  $_GET['frm_user_name'],
                  "frm_user_pass" =>  $_GET['frm_user_pass']
                 
                ));
                echo  "Transaction successful";
                header('Location: user_panel.php');
} catch ( PDOException $e ){
     print $e->getMessage(); 
     echo  "Transaction failed";
}
                
?>