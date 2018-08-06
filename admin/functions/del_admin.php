
<?php 

 
require_once "db.php";

if (isset($_POST["id"])) {

	$id = $_POST["id"];

	$sql = "DELETE FROM admin WHERE id=?";

$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$id]);
      header('Location:../users.php?deleted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}
else {
	header('Location:../users.php?del_error');
}

	

?>