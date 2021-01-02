
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

        if (isset($_GET['id'])) {
        $postid = $_GET['id'];
      }
      else {
        header('Location:posts.php');
      }

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
    <title>Company Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
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
                        <a href="posts.php" class="waves-effect "><i data-icon="&#xe020;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Go Back</span></a>
                        <h4 class="page-title"><?php echo $email;?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Blog Post Detail</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">

                                <?php 

                                    $sql="SELECT * FROM posts WHERE id='$postid'";

                                     $query = mysqli_query($connection, $sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            $postid = $row["id"];
                                                    $sql2 = "SELECT * FROM comments WHERE blogid=$postid";
                                                    $query2 = mysqli_query($connection, $sql2);
                                            echo 
                              
                                '<div class="col-lg-12 col-md-9 col-sm-8 col-xs-12 mail_listing">
                                    <div class="media m-b-30 p-t-20">
                                    	<h4 class="font-bold m-t-0">'.$row["title"].'
                                        <i style="float:right; font-size:15px; color:orange;">Comments: '.mysqli_num_rows($query2).'</i>
                                        </h4>
                                        <hr>
                                        <a class="pull-left" href="#"></a>
                                        <div class="media-body"> <span class="media-meta pull-right">'.$row["date"].'</span>
                                            <h4 class="text-danger m-0">'.$row["author"].'</h4></div>
                                    </div>
                                    <p>'.$row["content"].'</p>
                                    <hr>
                                    <div class="b-all p-20">
                                       <a href="#" class="btn btn-danger btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" data-toggle="modal" data-target="#responsive-modal'.$row["id"].'">Delete This Post</a>
                                    </div>
                                </div>

                                <!-- /.modal -->
                                            <div id="responsive-modal'.$row["id"].'" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title">Are you sure you want to delete this post?</h4></div>
                                                        <div class="modal-footer">
                                                        <form action="functions/del_post.php" method="post">
                                                        <input type="hidden" name="id" value="'.$row["id"].'"/>
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- End Modal -->

                                '

                                ;}

                                ?>

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
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
