<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NOODP">
    <meta name="description" content="It's going to get a little crazy on this blog! I am a new father, loving husband, and stay at home 'fommy.' Join me on my journey as I discuss hot-button topics and re-tell the mostly humourous side of being a family-mant.">
    <meta name="keywords" content="giggles, shit, giggles n shit, blog, parent, father, fommy, stay at home, funny, humour, dad, newborn, baby, nursery, web development, tech">
    <meta name="author" content="Evan Marshall">
    <link rel="icon" href="#">

    <title>Giggles N Shit Blog</title>
    
    <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
	<script type="application/ld+json">
		[ {
		  "@context" : "http://schema.org",
		  "@type" : "Product",
		  "name" : "Giggles N Shit Blog",
		  "url" : "http://www.gigglesnshit.com/"
		},
		  "@context" : "http://schema.org",
		  "@type" : "Product",
		  "name" : "Giggles N Shit",
		  "image" : [ "http://www.google.com/img/portfolio/hospital.jpg", "http://www.google.com/img/portfolio/family.jpg", "http://www.google.com/img/portfolio/poo-chair.jpg", "http://www.google.com/img/portfolio/daddys-girl.jpg", "http://www.google.com/img/portfolio/football.jpg", "http://www.google.com/img/portfolio/playpin.jpg" ],
		  "description" : "It&#39;s going to get a little crazy on this blog! I am a new father, loving husband, and stay at home &#39;fommy.&#39; Join me on my journey as I discuss hot-button topics and re-tell the mostly humourous side of being a family-man.",
		  "url" : "http://www.gigglesnshit.com/"
		} ]
	</script>

<!-- MINIFIED BOOTSTRAP CSS ====================================================================================================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

<!-- CUSTOM FONTS ================================================================================================================================================ -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    
<!-- FONT-AWESOME ================================================================================================================================================ -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">

<!-- PLUGIN CSS ================================================================================================================================================== -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

<!-- CUSTOM CSS ================================================================================================================================================== -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
       		<a class="navbar-brand page-scroll" href="../index.html">Giggles N Shit Blog</a>
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <aside>
        <div class="container text-center">
            <div class="call-to-action">
                <h2>To Change Password Fill Out Form</h2>
                
                <!-- Button trigger modal -->
				<button type="button" class="btn btn-default btn-xl wow tada" data-toggle="modal" data-target="#myModal">
  					Click Here!
				</button>
                
                <br><br>
                
                <p style="color:black;">Click <a href='../index.html' style='color:#5763AC;'>HERE</a> to be redirected to the homepage.</p>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  					<div class="modal-dialog" role="document">
    					<div class="modal-content">
      						<div class="modal-header">
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        						<h4 style="color:#5763AC;" class="modal-title" id="myModalLabel">Please Fill Out All Boxes to Change Password</h4>
      						</div><!-- ./header -->
                            <form action="password.php" method="post">
                            	<div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputName">Full Name</label>
                                        <input class="form-control text-center" id="inputName" type="text" name="cname" placeholder="Please type your full name" maxlength="50" value="<?php if(isset($_POST['cname'])){echo $_POST['cname'];} ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input class="form-control text-center" id="inputEmail" type="email" name="cemail" placeholder="Use format of example@example.com" maxlength="50" value="<?php if(isset($_POST['cemail'])){echo $_POST['cemail'];} ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Current Password</label>
                                        <input class="form-control text-center" id="inputCurrentPassword" type="password" name="current" placeholder="For better security please use alphanumeric characters" maxlength="50" value="<?php if(isset($_POST['current'])){echo $_POST['current'];} ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">New Password</label>
                                        <input class="form-control text-center" id="inputNewPassword" type="password" name="newp" placeholder="Please enter new password" maxlength="50" value="<?php if(isset($_POST['newp'])){echo $_POST['newp'];} ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Confirm New Password</label>
                                        <input class="form-control text-center" id="inputConfirmNewPassword" type="password" name="cnewp" placeholder="Both your passwords need to match" maxlength="50" value="<?php if(isset($_POST['cnewp'])){echo $_POST['cnewp'];} ?>">
                                    </div>
                                </div><!-- ./body -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-default">Change Password</button>
                                </div><!-- ./footer -->
                            </form>
    					</div><!-- ./content -->
  					</div><!-- ./dialog -->
				</div><!-- ./modal -->
            </div>
        </div>
    </aside>
    
    <?php
	
/// UPDATE PASSWORD //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
		//check if user submitted form
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			//connect to database
			include('connect.php');
			
			//create an array for errors
			$errors = array();//new variable to initiate array
			
			//check for name
			if(empty($_POST['cname'])){
				
				$errors[] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Please enter your full name</div>';//error message and stored in errors array
				
			}else{
				$p = mysqli_real_escape_string($dbc, trim($_POST['cname']));//new var $e holds security escape string
			}
			
			//check for email address
			if(empty($_POST['cemail'])){
				
				$errors[] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Please enter your email</div>';//error message and stored in errors array
				
			}else{
				$e = mysqli_real_escape_string($dbc, trim($_POST['cemail']));//new var $e holds security escape string
			}
			
			//check current password
			if(empty($_POST['current'])){
				
				$errors[] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Please enter your current password</div>';//error message and stored in errors array
				
			}else{
				$p = mysqli_real_escape_string($dbc, trim($_POST['current']));//new var $e holds security escape string
			}
			
			//check for new password and compare 
			if(!empty($_POST['newp'])){
				if($_POST['newp'] != $_POST['cnewp']){
					$errors[] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Please make sure your new password matches confirmed new password</div>';
				}else{
					$np = mysqli_real_escape_string($dbc, trim($_POST['newp']));
				}
			}else{
				$errors[] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Please enter a new password</div>';
			}
			
			//check if there are no errors
			if(empty($errors)){
				
				//check that the user entered the correct email and pass combo
				$q = "SELECT id FROM userdata WHERE (email = '$e' AND password = '$p')";//mysql database headers email and password
				$r = mysqli_query($dbc, $q);
				$num = mysqli_num_rows($r);
				
				//get user id
				if($num == 1){
					$row = mysqli_fetch_array($r, MYSQLI_NUM);
					
					//make the update query
					$q = "UPDATE userdata SET password = '$np' WHERE id = '$row[0]'";//mysql database header password
					$r = mysqli_query($dbc, $q);
					
					//if everything is ok
					if(mysqli_affected_rows($dbc) == 1){
						
						//ok message
						echo '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>You have updated your password!</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Your password could not be changed.</div>';
					}
					
					//close connection
					mysqli_close($dbc);
				}else{
					echo '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>The email and password do not match our records.</div>';
				}
				
			}else{
				echo '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>Error! The following error(s) occurred:</div> <br>';
				foreach($errors as $msg){
					echo '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>'.$msg.'</div><br>';
				}
			}
			
		}

	?>

    <section id="contact" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Drop me a Line</h2>
                    <hr class="light">
                    <p>Feel free to contact me anytime, anyday via my personal email or social media accounts.</p>
                </div>
                <div class="col-lg-12 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:evanmarshall1986@gmail.com" style="color:white;">EMAIL ME!</a></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="col-lg-3 text-center">
                        <a href="#" style="color:white;"><i class="fa fa-facebook fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                    </div>
                    <div class="col-lg-3 text-center">
                        <a href="#" style="color:white;"><i class="fa fa-instagram fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                    </div>
                    <div class="col-lg-3 text-center">
                        <a href="#" style="color:white;"><i class="fa fa-twitter fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                    </div>
                    <div class="col-lg-3 text-center">
                        <a href="#" style="color:white;"> <i class="fa fa-pinterest fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- MINIFIED BOOTSTRAP JQUERY ====================================================================================================================================--><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!--  MINIFIED BOOTSTRAP JAVASCRIPT ============================================================================================================================== --> 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<!--  PLUGIN JAVASCRIPT ========================================================================================================================================== -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.fittext.js"></script>
    <script src="../js/wow.min.js"></script>

<!--  CUSTOM THEME JAVASCRIPT ==================================================================================================================================== -->
    <script src="../js/creative.js"></script>

</body>

</html>


