<!--
author: Ethredah
author URL: http://ethredah.github.io
-->



<?php

  require_once "admin/functions/db.php";

    $sql = 'SELECT * FROM posts';

    $query = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Company</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<?php include_once 'includes/banner.php'; ?>
<!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="w3l_head w3l_head1">Blog</h2>
			<div class="wthree_gallery_grids">
				
				<div class="row">

						<?php 
                            if (mysqli_num_rows($query)==0) {
                              echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
                              }
                            
                          
                          else
                          {

                          	while ($row=mysqli_fetch_array($query)) {
                          	
                    echo
					'<div class="col-md-4">
						<a href="single.php?id='.$row["id"].'"><h4>'.$row["title"].'</h4></a>
						<br>
						<p>
							'.substr($row["content"], 0, 200).'...
						</p>
						<br>
						<h6 style="color: orange;">'.$row["author"].' <b style="color: #000;">|</b> '.$row["date"].'</h6>
						<hr>
					</div>';
								}
							}
						?>
				

				</div>

				<div class="row">
					<!-- <h5>Comments</h5> -->

				</div>
                
			</div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
<!-- //gallery -->
<!-- footer -->
	
	<?php 
		include_once 'includes/footer.php';
	?>
