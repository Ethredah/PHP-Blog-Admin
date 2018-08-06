
<?php 

 
require_once "db.php";

if (isset($_POST["id"])) {

	$id = $_POST["id"];

	$sql = "DELETE posts, comments FROM posts INNER JOIN comments WHERE posts.id=comments.blogid and posts.id=?";

$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$id]);
      header('Location:../posts.php?deleted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}
else {
	header('Location:../posts.php?del_error');
}

	

?>