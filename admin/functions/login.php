
<?php  

//Start the Session
session_start();
 require('db.php');

//If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
//Assigning posted values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['email'] = $email;
}else{
//If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//if the user is logged in Greets the user with message
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
echo "Hello " . $email . "
";
echo "This is the Adminea
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
	echo "string";
// When the user visits the page first time, simple login form will be displayed.

?>
