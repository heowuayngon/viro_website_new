<?php
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

$api_url = 'https://api.viroapp.com/';
//        $api_url = 'https://digital.sembangchat.com/';
if(isset($_GET['referrer_code']))
{
    $user_name_url = $api_url.'/api/user/display-name/%s';
    $user_name = file_get_contents(sprintf($user_name_url, $_GET['referrer_code']));
}

// verifying POST data and adding the values to session variables
if (isset($_POST["code"])) {
    try {
        #live
        $home = 'https://viroapp.com/';
        $welcome_page = 'https://viroapp.com/welcome';
        $url = $api_url.'api/user/login/sms';
        $fb_app_id = '737451986357659';
        $ak_secret = '1c03dca3d0b4827f43d94e1afb81bd41';
        
//        #dev
//        $home = 'http://viro.uas.sg.com/';
//        $home = 'http://viro.uas.sg.com/welcome';
//        $url = $api_url.'api/user/login/sms';
//        $fb_app_id = '1609896245963521';
//        $ak_secret = 'fd94dd455a5b2232ae8b99d7c6bb1409';

        session_start();
        $_SESSION["code"] = $_POST["code"];
        $_SESSION["csrf_nonce"] = $_POST["csrf_nonce"];
        $ch = curl_init();
        // Set url elements
//        $fb_app_id = '161126540969132';
//        $ak_secret = 'a841e84ea91154acbbff72e8b1dd5524';
        $token = 'AA|' . $fb_app_id . '|' . $ak_secret;
        // Get access token

        $postData = array(
            'facebook_auth_token' => $_POST["code"],
            'device_type' => "0",
            'referrer_code' => $_GET['referrer_code']
        );
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


<?php require_once '../header.php'; ?>
        <!-- HTTPS required. HTTP will give a 403 forbidden response -->
        <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
        <script src="<?php echo $base_url; ?>assets/js/jquery.cookie.js"></script>

        <form action="" method="POST" id="my_form">
            <input type="hidden" name="code" id="code">
            <input type="hidden" name="csrf_nonce" id="csrf_nonce">
        </form>
        <script type="text/javascript">
            // initialize Account Kit with CSRF protection
            AccountKit_OnInteractive = function () {
                AccountKit.init(
                        {
//                            appId: '1609896245963521', //dev
                            appId: '737451986357659',
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


 
        <div id="wrapper" class="wrap_home register">
            <section class="heading page-register" id="home-block1">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 center center1">
                            <div class="viro_image1">
                                <img class="img-responsive" src="<?php echo $base_url; ?>assets/img/iPhone-5C-Multicolors-Mock-up.png" alt="img" >
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="viro_block1_text">
                                <p>Viro Job, Internship, Part-Time, Full-Time App is a platform where you can <i>earn</i> money by <i>sharing</i> your job offer to their social media network.<br/>
                                    <?php if((string)@$user_name != ''):?>
                                        <span style="font-weight: bold; font-size: 12px">Your Affiliate Sponsor: <?php echo @$user_name?></span>
                                    <?php endif;?>
                                </p>
                                <div class="wrap_btn_viro">
                                    <?php if (isset($result)): ?>
                                    <script>
                                        window.location.replace('<?php echo $welcome_page?>');
                                    </script>
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

        <?php
        $ref = @$_GET['referrer_code'];
        ?>
    <?php if((string)$ref != ''):?>   
        <script type="text/javascript">
            $(document).ready(function(){
                $.cookie('ref_code', '<?php echo $ref?>', { path: '/' });
                $('#register-btn').attr('href', $('#register-btn').attr('href') + '/'+$.cookie('ref_code'));
            })
        </script>
    <?php endif;?>
    </body>
</html>
