<html lang="en">
<head>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-105158148-2"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
    <script>
        function phoneCheck() {
            if ($("#phone").val() == "") {
                $("#phone").addClass("is-invalid");
                return false;
            } else {
                var regPhone = /^[0]\d{10}$/;
                if (!regPhone.test($("#phone").val())) {
                    $("#phone").addClass("is-invalid");
                    return false;
                } else {
                    $("#phone").removeClass("is-invalid");
                    $("#next-form").collapse("show");
                }
            }
        }
        function validation() {
            if ($("#full_name, #email").val() == "") {
                $("#full_name, #email").addClass("is-invalid");
                return false;
            } else {
                $("#full_name, #email").removeClass("is-invalid");
            }
        }
        $(document).ready(function(e) {
            $("#full_name").on("keyup", function() {
                if ($("#full_name").val() == "") {
                    $("#full_name").addClass("is-invalid");
                    return false;
                } else {
                    $("#full_name").removeClass("is-invalid");
                }
            });
            $("#email").on("keyup", function() {
                if ($("#email").val() == "") {
                    $("#email").addClass("is-invalid");
                    return false;
                } else {
                    $("#email").removeClass("is-invalid");
                }
            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link href="img/coro.png" rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
    <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>WELCOME | COVID-19 SELF TEST</title>
</head>
<body>
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
                    <h1 class="display-4 font-weight-normal mt-2" style="font-size:2vw;">Register with us:</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-end">
                    <a type='button' class='btn btn-primary btn-xs mt-2 mb-2 ml-5'  style="font-size:1vw;" href='login.php'>login</a>
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
                    <form method="post" id="singnupFrom" action="utilities.php" onSubmit="return validation();">
                        <div id="server-results" class="text-danger" style="font-size: 0.8rem;"></div>
                        <div class="form-group">
                            <label class="font-weight-bold">Phone #</label>
                            <div class="input-group">
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter valid phone number">
                                <div class="input-group-append"><button type="button" class="btn btn-primary" onClick="phoneCheck()"><i class="fa fa-phone"></i></button></div>
                            </div>
                        </div>
                        <div id="next-form" class="collapse">
                            <div class="form-group">
                                <label class="font-weight-bold">Full Name <small class="text-danger"><em>Your first and last name!</em></small></label>
                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Sign Up" class="btn btn-block btn-danger">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>