
<?php

$enroll = $_GET['enroll'];


    if (!empty($enroll)){ 
   include 'config.php';

  $sql=" delete from details where enroll=$enroll";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "could not delete ";
  }
}
 else {
   echo "id not found";
  }


 ?>

