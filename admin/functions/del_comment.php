

<?php 

 
require_once "db.php";

if (isset($_POST["id"])) {

	$id = $_POST["id"];

	$sql = "DELETE FROM comments WHERE id=?";

$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$id]);
      header('Location:../comments.php?deleted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}
else {
	header('Location:../comments.php?del_error');
}

	

?>