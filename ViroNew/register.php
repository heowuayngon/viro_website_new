<?php
define('VIRO_ACCOUNT_KIT_REGISTER_API', 'http://digital.sembangchat.com/api/user/login/sms');

// function to verify session status
function is_session_started() {
    if (php_sapi_name() !== 'cli') {
        if (version_compare(phpversion(), '5.4.0', '>=')) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// verifying POST data and adding the values to session variables
if (isset($_POST["code"])) {
    try {

        session_start();
        $_SESSION["code"] = $_POST["code"];
        $_SESSION["csrf_nonce"] = $_POST["csrf_nonce"];
        $ch = curl_init();
        // Set url elements
//        $fb_app_id = '161126540969132';
//        $ak_secret = 'a841e84ea91154acbbff72e8b1dd5524';
        $fb_app_id = '1609896245963521';
        $ak_secret = 'fd94dd455a5b2232ae8b99d7c6bb1409';
        $token = 'AA|' . $fb_app_id . '|' . $ak_secret;
        // Get access token
        $url = 'https://graph.accountkit.com/v1.0/access_token?grant_type=authorization_code&code=' . $_POST["code"] . '&access_token=' . $token;

        $postData = array(
            'facebook_auth_token' => $_POST["code"],
            'device_type' => "0"
        );
        $url = 'http://digital.sembangchat.com/api/user/login/sms';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
//        echo '<pre>';
//        print_r($result);
    } catch (Exception $ex) {
        
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Viro</title>   
        <meta charset="utf-8">
        <meta name="description" content="Viro Job, Internship, Part-Time, Full-Time App is a platform where you can earn money by sharing your job offer to their social media network.">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS
  ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--        <link rel="stylesheet" href="css/chosen.css">-->
        <!--        <link rel="stylesheet" href="css/jquery.bxslider.css">-->
        <!--        <link rel="stylesheet" href="css/flexslider.css">-->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!--<link rel="stylesheet" href="css/jscrollpane.css">-->
        <!--        <link rel="stylesheet" href="css/jslider.css">-->
        <!--<link rel="stylesheet" href="css/style-page.css">-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom-style.css">
        <!--<link rel="stylesheet" href="css/animate.css"  type="text/css" />-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>-->            
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

        <!-- FONTS
  ================================================== -->
        <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
        <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>-->
        <!--+++++++++++++++++OWL CAROUSEL+++++++++++++++++++++ -->

        <!--<link href="./owl-carousel/owl.carousel.css" rel="stylesheet">-->
        <!--<link href="./owl-carousel/owl.theme.css" rel="stylesheet">-->
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <script src="./js/jquery-1.9.1.min.js"></script> 

        <!-- HTTPS required. HTTP will give a 403 forbidden response -->
        <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
        <script type="text/javascript">
            (function () {
                var link_element = document.createElement("link"),
                        s = document.getElementsByTagName("script")[0];
                if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                    link_element.href = "http:";
                }
                link_element.href += "//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900";
                link_element.rel = "stylesheet";
                link_element.type = "text/css";
                s.parentNode.insertBefore(link_element, s);
            })();
        </script>
    </head>
    <body>
        <form action="" method="POST" id="my_form">
            <input type="hidden" name="code" id="code">
            <input type="hidden" name="csrf_nonce" id="csrf_nonce">
        </form>

        <script type="text/javascript">
            // initialize Account Kit with CSRF protection
            AccountKit_OnInteractive = function () {
                AccountKit.init(
                        {
                            appId: '1609896245963521',
                            state: "adsfds",
                            version: "v1.0"
                        }
                );
            };

            // login callback
            function loginCallback(response) {
                console.log(response);
                if (response.status === "PARTIALLY_AUTHENTICATED") {
                    document.getElementById("code").value = response.code;
                    document.getElementById("csrf_nonce").value = response.state;
                    document.getElementById("my_form").submit();
                } else if (response.status === "NOT_AUTHENTICATED") {
                    // handle authentication failure
                } else if (response.status === "BAD_PARAMS") {
                    // handle bad parameters
                }
            }

            // phone form submission handler
            function phone_btn_onclick() {
                var country_code = null;//document.getElementById("country_code").value;
                var ph_num = null;//document.getElementById("phone_num").value;
                AccountKit.login('PHONE',
                        {countryCode: country_code, phoneNumber: ph_num}, // will use default values if this is not specified
                        loginCallback);
            }


            // email form submission handler
            function email_btn_onclick() {
                var email_address = document.getElementById("email").value;

                AccountKit.login('EMAIL', {emailAddress: email_address}, loginCallback);
            }

        </script>



        <header>
            <div class="container clearfix">
                <h1><a href="index.html"><img src="images/ico_viro_black.png" alt="img" id="logo"></a></h1>
                <nav>
                    <ul>
                        <li><a class="" href="index.php">Home</a></li>
                        <li><a href="employer-advertiser.php">Employer/ Advertiser</a></li>
<!--                        <li class="dropdown"><a class="disabled">Services</a>
                            <ul class="sub_menu">
                                <li><a href="#home-block2" >Viral Your Products/Services</a></li>
                                <li><a href="#home-block3">Retail Outlet Sales Alerts</a></li>
                                <li><a href="#home-block4">Hire University Interns</a></li>
                                <li><a href="#home-block5">Business Chat Customer Service</a></li>
                            </ul>
                        </li>-->
                        <li><a href="javascript:void(0)">About Us</a></li>
                        <!--<li><a href="register.php" class="fancybox btn_signup">SIGN UP</a></li>-->
                        <li><a href="javascript:void(0)" class="fancybox btn_get_app">GET THE APP</a></li>
                    </ul>
                </nav>
                <a class="menu-btn"></a>
            </div>
        </header>


        <div id="wrapper" class="wrap_home register">
            <section class="heading" id="home-block1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xs-5 center center1">
                            <div class="viro_image1">
                                <img class="img-responsive" src="images/iPhone-5C-Multicolors-Mock-up.png" alt="img" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-7">
                            <div class="viro_block1_text">
                                <p>Our app users <i>share</i> your products/services to their <i>social media</i>, increasing the <i>exposure</i>
                                    and <i>outreach</i> of your products/ services
                                </p>
                                
                                
                                <div class="wrap_btn_viro">
                                    <?php if (isset($result)): ?>
                                        <a class="btn btn-viro" onclick="phone_btn_onclick()">SUCCESS</a>
                                    <?php else: ?>
                                        <a class="btn btn-viro" onclick="phone_btn_onclick()">JOIN VIRO TODAY</a>
                                    <?php endif; ?>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="js/blur.js"></script>
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/prettyCheckbox.js"></script>
        <!--<script src="js/infinitescroll.js"></script>-->
        <!--<script src="js/TweenMax.min.js"></script>-->
        <!--<script src="js/jquery.scrollmagic.min.js"></script>-->
        <!--<script src="js/jquery.knob.js"></script>-->
        <!--<script src="js/jquery.fileupload.js"></script>-->
        <!--<script src="js/upload.js"></script>-->
        <!--<script src="js/range-slider.js"></script>-->
        <!--<script src="js/jquery.downCount.js"></script>-->
        <script src="js/animations.js"></script>
        <script src="js/yappie.js"></script>
        <script src="js/my-custom.js"></script>
    </body>
</html>