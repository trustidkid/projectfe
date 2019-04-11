<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="ThemeBucket" />
    <link rel="shortcut icon" href="images/favicon.png" />

    <title>Profile</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-reset.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container">
<?php require 'php/header.php'; ?>
<!--header end-->
<?php /*?><?php require 'php/sidebar.php';?><?php */?>
<!--sidebar end-->
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-3">
                           <div class="profile-pic text-center">
                               <img src="images/lock_thumb.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="profile-desk">
                               <h3>Semiu Biliaminu</h3>
                               <h3>yemi.bili07@gmail.com</h3></br>
                               <h3>Male</h3>
                               
                               <!--<span class="text-muted">Male</span></br>
                               <p>
                                   yemi.bili07@gmail
                               </p>-->
<!--                               <a href="registration.php" class="btn btn-primary">View Profile</a>-->
                           </div>
                       </div>
                       <div class="col-md-3"></div>
                  </div>
                </section>
            </div>
            <div class="col-md-12"></div>
        </div>
        </section>
    </section>
  <!--right sidebar end-->
</section>

<?php require 'php/script.php'; ?>

</body>
</html>
