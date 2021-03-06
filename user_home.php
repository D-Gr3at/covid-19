﻿<?php
session_start();
$email=$_SESSION['email'];
$full_name=$_SESSION['full_name'];
$user_id = $_SESSION['user_id'];
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-105158148-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-105158148-2');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="img/coro.png" rel="icon">
    <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>COVID-19 SELF TEST</title>
    <style>
        .previous-tab,
        .next-tab {
            display: inline-block;
            border: 1px solid #444348;
            border-radius: 3px;
            margin: 5px;
            color: #444348;
            font-size: 14px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .card{
            background-color:azure;
        }

        @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {

            /* Styles */
            .lefter {
                margin-left: 33% !important;
            }
        }
    </style>
</head>
<body onload="tester()">
    <form id="form1" method="POST">
        <div class="container-fluid">
            <div class="row" style='background-color: azure'>
                <div class="col-md-8">
                    <?php
                        echo "<div class='row'>
                                <div class='container-fluid header'>
                                    <h class='display-4 font-weight-normal'>Welcome, ".$_SESSION['full_name']."</h1>
                                </div>
                            </div>";
                    ?>
                </div>
                <!-- <div class="col-md-2"></div> -->
                <div class="col-md-4">
                    <div class="d-flex justify-content-end mt-2 mr-5">
                        <a type='button' class='btn btn-primary float-right' href='logout.php'>logout</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center  mt-2">
                <div class="row">
                    <div class="col-md-5">
                        <img src="img/coro.png" class="img-fluid  float-sm-right   mt-3 lefter ">
                    </div>
                    <div class="col-md-7">
                        <h1 class="text-left">COVID-19 SELF TEST</h1>
                    </div>
                </div>
            </div>
            <span id="clicks" class="invisible"></span>
            <span id=""></span>
            <ul class="nav nav-tabs " id="myTab" role="tablist" style="display: none">
                <li class="nav-item  invisible">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                        aria-controls="messages" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings" aria-selected="false">Settings</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="bobypains-tab" data-toggle="tab" href="#bobypains" role="tab"
                        aria-controls="bobypains" aria-selected="false">bobypains-tab</a>
                </li>

                <li class="nav-item invisible">
                    <a class="nav-link" id="headache-tab" data-toggle="tab" href="#headache" role="tab"
                        aria-controls="headache" aria-selected="false">headache-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="fever-tab" data-toggle="tab" href="#fever" role="tab" aria-controls="fever"
                        aria-selected="false">bfever-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="breathing-tab" data-toggle="tab" href="#breathing" role="tab"
                        aria-controls="breathing" aria-selected="false">breathing-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="fatigue-tab" data-toggle="tab" href="#fatigue" role="tab"
                        aria-controls="fatigue" aria-selected="false">fatigue-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="traveled-tab" data-toggle="tab" href="#traveled" role="tab"
                        aria-controls="traveled" aria-selected="false">traveled-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="infected-tab" data-toggle="tab" href="#infected" role="tab"
                        aria-controls="infected" aria-selected="false">infected-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="sick-tab" data-toggle="tab" href="#sick" role="tab" aria-controls="sick"
                        aria-selected="false">sick-tab</a>
                </li>
                <li class="nav-item invisible">
                    <a class="nav-link" id="diagnosis-tab" data-toggle="tab" href="#diagnosis" role="tab"
                        aria-controls="diagnosis" aria-selected="false">diagnosis-tab</a>
                </li>
            </ul>
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id?>"/>
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">
                                <center><img src="img/coughing.png" class=" img-circle" width="250" height="180"></center>
                                <h2 class="mb-5 text-center">Do you have cough?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="cough[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="cough[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">
                                <center><img src="img/cold.jpg" class=" img-circle" width="250" height="180"></center>
                                <h2 class="mb-5 text-center">Do you have a cold?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="cold[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="cold[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/diarrhea.jpg" class=" img-circle" width="280" height="180"></center>
                                <h2 class="mb-4 text-center">Are you having
                                    <br>
                                    Diarrhea?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="diarrhea[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="diarrhea[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <div style="text-align: center;"><img src="img/sorethroat.jpg" class="img-circle" width="300" height="200"></div>
                                <h2 class="mb-4 text-center">Are you having
                                    <br>
                                    sorethroat?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="sorethroat[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="sorethroat[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="bobypains" role="tabpanel" aria-labelledby="bobypains-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/pain1.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Are you having body
                                    <br>
                                    aches?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="bodyache[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="bodyache[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="headache" role="tabpanel" aria-labelledby="headache-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/headache.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Are you having a
                                    <br>
                                    headache?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="headache[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="headache[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="fever" role="tabpanel" aria-labelledby="fever-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/fever.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Do you have fever<br>
                                    (Temperature 37.8°C
                                    <br>
                                    and above)?
                                </h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="temperature[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClick()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="temperature[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="breathing" role="tabpanel" aria-labelledby="breathing-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/breathe.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Are you having difficulty<br>
                                    breathing?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="breathing[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClickdouble()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="breathing[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="fatigue" role="tabpanel" aria-labelledby="fatigue-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">
                                <center><img src="img/fatigue.jpg" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Are you experiencing
                                    <br>
                                    fatigue?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="fatigue[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClickdouble()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="fatigue[]" class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="traveled" role="tabpanel" aria-labelledby="traveled-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/14days2.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Have you traveled
                                    <br>
                                    recently during the past
                                    <br>
                                    14 days?
                                </h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="traveled[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClicktriple()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="traveled[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="infected" role="tabpanel" aria-labelledby="infected-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">
                                <center><img src="img/history_infected.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Do you have a history of
                                    <br>
                                    traveling to an area infected
                                    with
                                    <br>
                                    COVID-19 ?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="infected[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClicktriple()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="infected[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="sick" role="tabpanel" aria-labelledby="sick-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/doctor.png" class=" img-fluid"></center>
                                <h2 class="mb-4 text-center">Do you have direct contact<br>
                                    with or are you taking care
                                    of a<br>
                                    positive COVID-19 PATIENT?</h2>
                                <div class="input-group mb-3">
                                    <input type="button" value="YES" name="sick[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="onClicktriple()">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="button" value="NO" name="sick[]"
                                        class="nexttab btn btn-primary btn-lg form-control form-control-lg"
                                        onclick="noClick()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="diagnosis" role="tabpanel" aria-labelledby="diagnosis-tab">
                    <div class="d-flex justify-content-center m-3">
                        <div class=" card shadow shadow-sm">
                            <div class="card-body">

                                <center><img src="img/answer.png" class=" img-fluid"></center>
                                <hr style="border-top: 4px solid #000000; margin-bottom: 0px;">
                                <h5 class="mb-1  text-left">RESULT:</h5>
                                <h6 class="mb-1  text-left">Your risk of
                                    <br>
                                    having COVID-19 is</h6>
                                <h2 id="holder"></h2>
                                <p id="resulthold" class="  font-weight-bold" style="color: #000000;"></p>
                                <div class="input-group mb-3">
                                    <input type="submit" name="Button1" value="RESTART TEST" id="Button1"
                                        class=" btn btn-primary btn-lg form-control form-control-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" 
                 style="display: none;">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom: 3px solid #007bff">
                            <img src="img/coro.png" class="img-fluid " height="60">
                            <h5 class="modal-title" id="exampleModalLabel">COVID-19 SELF TEST</h5>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class=" card shadow">
                                    <div class="card-body">
                                        <p>This is a covid-19 self assessment tool that it is not a diagnostic tool
                                            <b>was calibrated based on WHO guidelines.</b>
                                            <br/>
                                            <b>Please take a test</b>
                                        </p>
                                        <div class="d-flex justify-content-center ml-5">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">take test</button>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                                <button type="button" class="btn btn-primary btn-sm" id="statistics">statistics</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top: 3px solid #007bff">
                            <p style="margin-right:16%">&copy;Powered By <b>NDC, Nigeria</b>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="d-flex justify-content-center">
        <span class="text-center">Powered by<br>
            <a href="https://web.facebook.com/ndcnigeria/">
                <img src="img/ndc-clinic.jpeg" class="img-circle" width="70" height="70">
            </a>
        </span>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
        <script>
            function ShowPopup(title, body) {
                $("#exampleModal").modal("show");
            }
            function tester() {
                $("#exampleModal").modal("show");
            }
        </script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
