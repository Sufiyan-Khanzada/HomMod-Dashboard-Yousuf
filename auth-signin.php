<!doctype html>
<?php
 session_start();
?>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HomMod Admin Signin  </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>

<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://homemod.code7labs.com/api/";
$url = $baseurlapi."login";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];



$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
    "email":"$email",
    "password":"$password"
    
  
  
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

// print_r($obj);
// $obj = json_decode($resp,true);
if($obj['status']){
//   ini_set('session.cookie_domain','.domain.com');

// echo ini_get('session.cookie_domain');
// session_set_cookie_params( 0, "/", ".domain.com", false, false); 

 //  session_start();
   
    // $_SESSION['favcolor'] = "green";
    //  $_SESSION['userId'] = $obj['data']['userId'];
    //  $_SESSION['userFullName'] = $obj['data']['userFullName'];
    //  $_SESSION['userEmail'] = $obj['data']['userEmail'];
    //  $_SESSION['userPhoneNumber'] = $obj['data']['userPhoneNumber'];
    //  $_SESSION['address'] = $obj['data']['address'];
    //  $_SESSION['userImage'] = $obj['data']['userImage'];
    //  $_SESSION['remember_token'] = $obj['data']['remember_token'];
    //  $_SESSION['device_type'] = $obj['data']['device_type'];
    //  $_SESSION['device_token'] = $obj['data']['device_token'];
    //  $_SESSION['isSocial'] = $obj['data']['isSocial'];
    //  $_SESSION['provider'] = $obj['data']['provider'];
    //  $_SESSION['longitude'] = $obj['data']['longitude'];
    //  $_SESSION['latitude'] = $obj['data']['latitude'];
    //  $_SESSION['address_type'] = $obj['data']['address_type'];
    //  $_SESSION['user_city'] = $obj['data']['user_city'];
    //  $_SESSION['address1'] = $obj['data']['address1'];
    // $_SESSION['cart_item'] = array();
  // print_r( $obj['message']);


$context = stream_context_create($options);
$json_data = file_get_contents($url, false, $context);

$obj1 = json_decode($json_data,true);

   
    //  $_SESSION['id'] = $obj1['data']['id'];
    //  $_SESSION['name'] = $obj1['data']['name'];
    //  $_SESSION['email'] = $obj1['data']['email'];
    //  $_SESSION['lastname'] = $obj1['data']['lastname'];
    //  $_SESSION['username'] = $obj1['data']['username'];
    //  $_SESSION['city'] = $obj1['data']['city'];
    //  $_SESSION['state'] = $obj1['data']['State'];
    //  $_SESSION['country'] = $obj1['data']['County'];
    //  $_SESSION['postalcode'] = $obj1['data']['postalcode'];
    //  $_SESSION['address'] = $obj1['data']['address'];
    //  $_SESSION['phone'] = $obj1['data']['phone'];
    //  $_SESSION['insuretype'] = $obj1['data']['insuretype'];
    //  $_SESSION['payement'] = $obj1['data']['payement'];
    //  $_SESSION['image'] = $obj1['data']['profile'];

     
     // $_SESSION['payement'] = $obj1['data']['id'];
     // $_SESSION['p'] = $obj1['data']['id'];
     



     



          
   // echo $obj1['data']['id'];



  $token="Bearer ".$obj['token'];

//echo $token;







    $msg='<div class="alert alert-success" role="alert">
  Login SuccessFully Done
</div>';
//echo $msg;
?>
<script type="text/javascript">window.location.replace("index.php");
</script>



<?php



    //header("Location:index.php");
}
else{
   //header("Location:login.php");
$msg='<div class="alert alert-danger" role="alert">
  Login Failed
</div>';
//echo $msg;
    
}


curl_close($curl);

}
?>

<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">
            
            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                                </div>
                                <div class="mb-5">
                                    <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="assets/images/login-img.svg" alt="login-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Form -->
                                <form class="row g-1 p-3 p-md-4" method="post" action="">
                                    <div class="col-12 text-center mb-5">
                                        <h1>Sign in</h1>
                                        <span>Administration Access on HomeMod.</span>
                                    </div>
                                    <!--<div class="col-12 text-center mb-4">-->
                                    <!--    <a class="btn btn-lg btn-light btn-block" href="#">-->
                                    <!--        <span class="d-flex justify-content-center align-items-center">-->
                                    <!--            <img class="avatar xs me-2" src="assets/images/google.svg" alt="Image Description">-->
                                    <!--            Sign in with Google-->
                                    <!--        </span>-->
                                    <!--    </a>-->
                                    <!--    <span class="dividers text-muted mt-4">OR</span>-->
                                    <!--</div>-->
                                    <?php echo $msg; ?>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control form-control-lg" name="email" >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                    <a class="text-secondary" href="auth-password-reset.html">Forgot Password?</a>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg" name="password" >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" >SIGN IN</button>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span>Don't have an account yet? <a href="auth-signup.html" class="text-secondary">Sign up here</a></span>
                                    </div>
                                </form>
                                <!-- End Form -->
                                
                            </div>
                        </div>
                    </div> <!-- End Row -->
                    
                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
</body>
</html>