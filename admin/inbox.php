
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

    $sql = 'SELECT * FROM contacts';

    $query = mysqli_query($connection, $sql);

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
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                 <div class="top-left-part"><a class="logo" href="index.php"><b><img src="../plugins/images/icon.png" style="width: 30px; height: 30px;" alt="home" /></b><span class="hidden-xs"><b>Company</b></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    
                    <!-- /.dropdown -->
                    
                  
                   
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                       <a href="#" class="waves-effect"><img src="../plugins/images/user.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Account<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="settings.php"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </a>
                    </li>
                   
                    
                  <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Blog<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="posts.php">All Posts</a></li>
                            <li><a href="new-post.php">Create Post</a></li>
                            <li><a href="comments.php" class="waves-effect">Comments</a>
                            </li>
                        </ul>
                    </li>
                   
                   <li><a href="inbox.php" class="waves-effect active"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Messages</span></a>
                    </li>
                    
                    <li><a href="subscribers.php" class="waves-effect"><i data-icon="n" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Subscribers</span></a>
                    </li>
                    
                     <li class="nav-small-cap">--- Other</li>
                    <li> <a href="#" class="waves-effect"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Access<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="users.php">Administrators</a></li>
                            <li><a href="new-user.php">Create Admin</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a href="login.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                   
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $email;?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Inbox</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                            <!-- row -->
                            <div class="row">
                               
                                <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 mail_listing">
                                    <div class="inbox-center">


                                        <?php
                                    if (isset($_GET["deleted"])) {
                                        echo 
                                        '<div class="alert alert-warning" >
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                             <strong>DELETED!! </strong><p> The message has been successfully deleted.</p>
                                        </div>'
                                        ;
                                    }
                                    elseif (isset($_GET["del_error"])) {
                                        echo 
                                        '<div class="alert alert-danger" >
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                             <strong>ERROR!! </strong><p> There was an error during deleting this record. Please try again.</p>
                                        </div>'
                                        ;
                                    }
                                ?>  



                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <h4>Recent Messages(<b style="color: orange;"><?php echo mysqli_num_rows($query);?></b>)</h4>
                                                        <?php 
                                                             if (mysqli_num_rows($query)==0) {
                                                    echo "<i style='color:brown;'>No messages Yet :( </i> ";}
                                                        ?>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                while ($row = mysqli_fetch_array($query))
                                                {
                                              echo
                                              '
                                                <tr>
                                                   <td class="hidden-xs"><a href="inbox-detail.php?id='.$row["id"].'" />'.$row["names"].'</td>
                                                    <td class="max-texts"><a href="inbox-detail.php?id='.$row["id"].'" />'.$row["message"].'</td>
                                                    <td class="text-right">'.$row["date"].'</td>
                                                </tr>';
                                            }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 m-t-20"> Showing 1 - <?php echo mysqli_num_rows($query);?> </div>
                                        <div class="col-xs-5 m-t-20">
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Company Admin </footer>
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
