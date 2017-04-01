<?php $base_url =  "https://" . $_SERVER['SERVER_NAME'] . "/"; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/icon96.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Viro</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="description" content="Download viroapp for latest News, Events, Promotions and Services. You can post and share your business' news, events, promotion and services into our categories. ">
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url; ?>assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo $base_url; ?>assets/css/demo.css" rel="stylesheet" />
    <script src="<?php echo $base_url; ?>assets/js/modernizr.custom.97074.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    
    <!--   Core JS Files   -->
    <script src="<?php echo $base_url; ?>assets/js/jquery.min.js" type="text/javascript"></script>
    
    
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/tilthover/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/tilthover/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/tilthover/pater.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/tilthover/component.css" />
        <script>
            document.documentElement.className = 'js';
        </script>
</head>


<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-fixed-top navbar-color-on-scroll">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="<?php echo $base_url; ?>assets/img/viroapp-black.png" alt="Creative Tim Logo" >
                        </div>
                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-index">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo $base_url; ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>press">
                            Press
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>payment">
                            Payment
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>faq">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>register">
                            Signup
                        </a>
                    </li>

                    <li>
                        <a href="" data-toggle="modal" data-target="#mygetApp" class="btn btn-get-app">
                            Get App
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->