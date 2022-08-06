<?php 
include 'connect.php';



try{
$insert = $conn->prepare("INSERT INTO users SET 

  user_name=:frm_user_name,
  user_pass=:frm_user_pass


");
        $insert = $insert->execute(array(
                  
                  "frm_user_name" =>  @$_POST['frm_user_name'],
                  "frm_user_pass" =>  @$_POST['frm_user_pass']
        ));
                 header('Location: index.php');
} catch ( PDOException $e ){
     print $e->POSTMessage(); 
     echo  "operation failed";

}
     ?>