

<?php

require_once "../admin/functions/db.php";

$blogid = $_POST['blogid'];
$name = $_POST['name'];
$comment = $_POST['comment'];

if (isset($_POST['submit'])) {
	
	$sql = "INSERT INTO comments(name, comment, blogid)
    VALUES (?,?,?)";

    $stmt = $db->prepare($sql);


    try {
      $stmt->execute([$name, $comment, $blogid]);
      header('Location:../blog.php');
      // echo "DONE!!";

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }	

}







?>