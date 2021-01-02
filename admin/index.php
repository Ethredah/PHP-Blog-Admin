
<?php

ob_start();
require_once "functions/db.php";

// Initialize the session

session_start();

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['email']) || empty($_SESSION['email'])){

header("location: login.php");

exit;
}

$email = $_SESSION['email'];

$sql_posts = "SELECT * FROM posts";
$query_posts = mysqli_query($connection, $sql_posts);

$sql_contacts = "SELECT * FROM contacts";
$query_contacts = mysqli_query($connection, $sql_contacts);

$sql_subscribers = "SELECT * FROM subscribers";
$query_subscribers = mysqli_query($connection, $sql_subscribers);

$sql_comments = "SELECT * FROM comments";
$query_comments = mysqli_query($connection, $sql_comments);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/icon.png">
<title>Website Admin</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/blue.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
<div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
<?php 
 // <!-- Navigation -->
    include_once 'includes/navbar.php';
// <!-- Left navbar-header -->
    include_once 'includes/sidebar.php';
// <!-- Left navbar-header end -->
 ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?php echo $email;?></h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Home</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <?php 

         if (isset($_GET['set'])) {
            echo'<div class="alert alert-success" >
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>DONE!! </strong><p> Your password has been successfully updated.</p>
             </div>';
                }


        ?>

        <!-- /.row -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Company Blog Posts</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger"><?php echo mysqli_num_rows($query_posts);?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">Blog Comments</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna"><?php echo mysqli_num_rows($query_comments);?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">Contact Messages</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary"><?php echo mysqli_num_rows($query_contacts);?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6  b-0">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
                                    <h5 class="text-muted vb">Company Subscribers</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-success"><?php echo mysqli_num_rows($query_subscribers);?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--row -->
     
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Recent Comments</h3>
                    <div class="comment-center">
                        <div class="comment-body">
                            <div class="mail-contnet">
                              <?php
                                     if (mysqli_num_rows($query_comments)==0) {
                                         echo "<i style='color:brown;'>There are no comments yet :( </i> ";
                                            }
                                            else{

                            $counter = 0;
                            $max = 3;

                            while ($row2 = mysqli_fetch_array($query_comments)) {
                            $blogid = $row2["blogid"];
                               $sql2 = "SELECT * FROM posts WHERE id='$blogid'";
                                    $query2 = mysqli_query($connection, $sql2);

                               while (($row3 = mysqli_fetch_assoc($query2)) and ($counter < $max)) {
                                
                            echo '                
                            
                                <b>'.$row2["name"].'</b>
                                <h5>Blog Title : '.$row3["title"].'</h5>
                                <span class="mail-desc">
                                '.$row2["comment"].'
                                </span> <span class="time pull-right">'.$row2["date"].'</span>
                            ';
                            $counter++;
                                } } }
                            ?>
                            <hr>
                             <a href="comments.php" class="btn btn-info btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">View All Comments</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="white-box">
                    <!-- <h3 class="box-title">Recent Blog Posts
                      <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                          <option>March 2018</option>
                          <option>April 2018</option>
                          <option>May 2018</option>
                          <option>June 2018</option>
                          <option>July 2018</option>
                        </select>
                      </div>
                    </h3> -->
                    <div class="row sales-report">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h2>Company 2018</h2>
                            <p>Blog Posts</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 ">
                            <h1 class="text-right text-success m-t-20"><?php echo mysqli_num_rows($query_posts);?></h1> </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table ">

                            <?php
                                     if (mysqli_num_rows($query_posts)==0) {
                                         echo "<i style='color:brown;'>No Posts Yet :( Upload Company's first blog post today! </i> ";
                                            }
                                            else
                                                
                                            {
                                                echo '
                                                     <thead>
                                                    <tr>
                                                        <th>TITLE</th>
                                                        <th>DATE</th>
                                                        <th>COMMENTS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                ';
                                            }
                                                $counter = 0;
                                                $max = 3;

                                        while (($row = mysqli_fetch_array($query_posts)) and ($counter < $max) )
                                        {
                                            $postid = $row["id"];
                                            $sql2 = "SELECT * FROM comments WHERE blogid=$postid";
                                            $query2 = mysqli_query($connection, $sql2);

                                      echo '
                                <tr>
                                    <td class="txt-oflo">'.$row["title"].'</td>
                                   <td class="txt-oflo">'.$row["date"].'</td>
                                    <td><span class="text-success">'.mysqli_num_rows($query2).'</span></td>
                                </tr>
                            ';
                            $counter++;
                                }
                            ?>

                            </tbody>

                        </table> 
                               <a href="posts.php" class="btn btn-info btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">View All Posts</a>
                             </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    
        <!-- .right-sidebar -->
        <?php include_once 'includes/theme_setting.php'; ?>
        <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <?php include_once 'includes/footer.php'; ?>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Counter js -->
<script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="../plugins/bower_components/raphael/raphael-min.js"></script>
<script src="../plugins/bower_components/morrisjs/morris.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="js/dashboard1.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$.toast({
    heading: 'Welcome to Company admin',
    text: 'view, edit and upload new posts to keep your users engaged.',
    position: 'top-right',
    loaderBg: '#ff6849',
    icon: 'info',
    hideAfter: 3700,
    stack: 6
})
});
</script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
