

<?php 

 
require_once "db.php";

if (isset($_POST["id"])) {

	$id = $_POST["id"];

	$sql = "DELETE FROM contacts WHERE id=?";

$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$id]);
      header('Location:../inbox.php?deleted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}
else {
	header('Location:../inbox.php?del_error');
}

	

?>