
<?php

require_once "../admin/functions/db.php";

$names = $_POST['names'];
$email = $_POST['email'];
$message = $_POST['message'];

if (isset($_POST['submit'])) {
	
	$sql = "INSERT INTO contacts(names, email, message)
    VALUES (?,?,?)";

    $stmt = $db->prepare($sql);


    try {
      $stmt->execute([$names, $email, $message]);
      header('Location:../contact.php?sent');
      // echo "DONE!!";

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }	

}






?>