
<?php 

require_once "db.php";


  // session_start();

  // // If session variable is not set it will redirect to login page

  // if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  //     header('Location:../login.php');
  //   exit;

  // }

  // $email = $_SESSION['email'];
  $author = $_POST['author'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  

  if (isset($_POST["submit"])) {
    // Add task to DB
    $sql = "INSERT INTO posts(author, title, content)
    VALUES (?,?,?)";

    $stmt = $db->prepare($sql);


    try {
      $stmt->execute([$author, $title, $content]);
      header('Location:../posts.php?posted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }
  }













?>