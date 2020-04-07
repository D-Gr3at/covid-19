<?php
include("lib/dbConnection.inc.php");
include("utilities.php");
?>
<html lang="en">
<head>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-105158148-2"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/coro.png" rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
    <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>LOGIN | COVID-19 SELF TEST</title>
</head>
<body>
<?php
if (isset($_POST['phone_or_email'])) {   
    $email_phone = $_POST['phone_or_email'];
    $query = "SELECT * FROM user_info WHERE email='$email_phone' OR phone='$email_phone'";
    $user_resource = pg_query($query);
    $logging_in_user_name = pg_fetch_result($user_resource, 0, "full_name");
    $logging_in_user_count = pg_num_rows($user_resource);
    if($logging_in_user_count == 1){
        session_start();
        $_SESSION['email'] = $email_phone;
        $_SESSION['full_name'] = $logging_in_user_name;
        $_SESSION['user_id'] = pg_fetch_result($user_resource, 0, 'id');
        header("Location:user_home.php");
    }else if($_POST['phone_or_email'] == "admin@ndc.com") {
        session_start();
        $_SESSION['full_name'] = "admin@ndc.com";
        echo $_SESSION['full_name'];
        header("Location:admin_home.php");
    }else{
        header("Location:login.php");
    }
}
?>
    <div class="container mt-2 mb-4">
        <div class="d-flex justify-content-center  mt-2">
            <div class="row">
                <div class="col-md-5 ">
                    <img src="img/coro.png" class="img-fluid  float-sm-right   mt-3 lefter">
                </div>
                <div class="col-md-7 ">
                    <h1 class="text-left">COVID-19 SELF TEST</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center">
                    <h1 class="display-4 font-weight-normal mt-2" style="font-size:2vw;">Sign In</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-end">
                    <a type='button' class='btn btn-primary btn-xs mt-2 mb-2 ml-5'  style="font-size:1vw;" href='index.php'>register</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm-4 border border-primary shadow rounded pt-2">
                <div class="text-center">
                    <img src="img/login.png" rel="nofollow" class="img-fluid rounded-circle border p-1">
                    <!-- <span>https</span><span>://</span><span>placehold</span><span>.</span><span>it</span><span>/</span><span>80x80</span></a>" class="rounded-circle border p-1"> -->
                </div>
                <div class="col-sm-12">
                    <form method="post" id="signinForm" onSubmit="return validation();">
                        <div id="server-results" class="text-danger" style="font-size: 0.8rem;"></div>
                        <div class="form-group">
                            <label class="font-weight-bold">Phone or Email</label>
                            <div class="input-group">
                                <input type="text" name="phone_or_email" id="phone_or_email" class="form-control" placeholder="Enter phone number or email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-primary" onClick="javascript:doRedirect('user_home.php')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="">

        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>

