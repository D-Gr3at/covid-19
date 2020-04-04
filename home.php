<?php
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
    // $query = 
include("/lib/dbfunctions.php");
$cough_query = "SELECT cough FROM user_data WHERE cough='YES'";
$cough_resource = pg_query($cough_query);
$cough_cases_result = pg_fetch_all($cough_resource);
$cough_cases = count($cough_cases_result);

$cold_query = "SELECT cold FROM user_data WHERE cold='YES'";
$cold_resource = pg_query($cold_query);
$cold_cases_result = pg_fetch_all($cold_resource);
$cold_cases = count($cold_cases_result);

$diarrhea_query = "SELECT cough FROM user_data WHERE cough='YES'";
$diarrhea_resource = pg_query($diarrhea_query);
$diarrhea_cases_result = pg_fetch_all($diarrhea_resource);
$diarrhea_cases = count($diarrhea_cases_result);

$sore_throat_query = "SELECT sore_throat FROM user_data WHERE sore_throat='YES'";
$sore_throat_resource = pg_query($sore_throat_query);
$sore_throat_cases_result = pg_fetch_all($sore_throat_resource);
$sore_throat_cases = count($sore_throat_cases_result);

$body_ache_query = "SELECT body_aches FROM user_data WHERE body_aches='YES'";
$body_ache_resource = pg_query($body_ache_query);
$body_ache_cases_result = pg_fetch_all($body_ache_resource);
$body_ache_cases = count($body_ache_cases_result);

$headache_query = "SELECT headache FROM user_data WHERE headache='YES'";
$headache_resource = pg_query($headache_query);
$headache_cases_result = pg_fetch_all($headache_resource);
$headache_cases = count($headache_cases_result);

$temperature_query = "SELECT temperature FROM user_data WHERE temperature='YES'";
$temperature_resource = pg_query($temperature_query);
$temperature_cases_result = pg_fetch_all($temperature_resource);
$temperature_cases = count($temperature_cases_result);

$breathing_query = "SELECT breathing FROM user_data WHERE breathing='YES'";
$breathing_resource = pg_query($breathing_query);
$breathing_cases_result = pg_fetch_all($breathing_resource);
$breathing_cases = count($breathing_cases_result);

$fatigue_query = "SELECT fatigue FROM user_data WHERE fatigue='YES'";
$fatigue_resource = pg_query($fatigue_query);
$fatigue_cases_result = pg_fetch_all($fatigue_resource);
$fatigue_cases = count($fatigue_cases_result);

$traveled_query = "SELECT traveled FROM user_data WHERE traveled='YES'";
$traveled_resource = pg_query($traveled_query);
$traveled_cases_result = pg_fetch_all($traveled_resource);
$traveled_cases = count($traveled_cases_result);

$traveled_area_query = "SELECT traveled_area FROM user_data WHERE traveled_area='YES'";
$traveled_area_resource = pg_query($traveled_area_query);
$traveled_area_cases_result = pg_fetch_all($traveled_area_resource);
$traveled_area_cases = count($traveled_area_cases_result);

$contact_query = "SELECT contact FROM user_data WHERE contact='YES'";
$contact_resource = pg_query($contact_query);
$contact_cases_result = pg_fetch_all($contact_resource);
$contact_cases = count($contact_cases_result);

$low_query = "SELECT result FROM user_data WHERE result='LOW'";
$low_resource = pg_query($low_query);
$low_cases_result = pg_fetch_all($low_resource);
$low_cases = count($low_cases_result);

$medium_query = "SELECT result FROM user_data WHERE result='MEDIUM'";
$medium_resource = pg_query($medium_query);
$medium_cases_result = pg_fetch_all($medium_resource);
$medium_cases = count($medium_cases_result);

$high_query = "SELECT result FROM user_data WHERE result='HIGH'";
$high_resource = pg_query($high_query);
$high_cases_result = pg_fetch_all($high_resource);
$high_cases = count($high_cases_result);

$severe_query = "SELECT result FROM user_data WHERE result='SEVERE'";
$severe_resource = pg_query($severe_query);
$severe_cases_result = pg_fetch_all($severe_resource);
$severe_cases = count($severe_cases_result);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-105158148-2"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
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
    <title>COVID-19 | STATISTICS</title>
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
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <?php
        if(isset($_SESSION['username'])){
            echo "<div class='row'>
                    <div class='container-fluid header' style='background-color: azure'>
                        <h class='display-4 font-weight-bold'>Welcome ".$_SESSION['username']."</h1>
                        <a type='button' class='btn btn-primary float-right mx-5 my-5' href='logout.php'>logout</a>
                    </div>
                </div>";
        }
    ?>
    <section class="wrapper">
        <div class="container-fostrap">
            <div>
                <img src="img/ndc-clinic.jpeg" class="fostrap-logo"/>
                <h1 class="heading">
                    Users and statistics
                </h1>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">COUGH CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="cough-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $cough_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">COLD CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="cold-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $cold_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">DIARRHEA CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="diarrhea-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $diarrhea_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">SORETHROAT CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="sorethroat-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $sore_throat_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">BODY ACHES CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="body-aches-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $body_ache_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">HEADACHE CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="headache-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $headache_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">HIGH TEMPERATURE CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="temperature-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $temperature_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">BREATHING DIFFICULTY</a>
                                </h4>
                                <div class="card-content">
                                    <div class="breath-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $breathing_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">FATIGUE CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="fatigue-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $fatigue_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">LAST TRAVELLED CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="traveled-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $traveled_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">AREAS VISITED BY USERS</a>
                                </h4>
                                <div class="card-content">
                                    <div class="diarrhea-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $traveled_area_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <h4 class="card-title">
                                    <a href="#">DIARRHEA CASES</a>
                                </h4>
                                <div class="card-content">
                                    <div class="diarrhea-result py-4 bg-light text-center">
                                        <div class="lead">
                                            <p class=""><span class="heading display-2 p-3"><?php echo $contact_cases ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mb-5">
        <div class="display-3 text-center">Overall Statistics</div>
        <table style="width: 100%; text-align: center;">
            <colgroup span="4"></colgroup>
            <tr class="my-5">
                <th class="display-4">Cases</th>
                <th class="display-4">Values</th>
            </tr>
            <tr class="my-5">
                <td class="display-5">SEVERE</td>
                <td class="severe display-5"><?php echo $severe_cases ?></td>
            </tr>
            <tr class="my-5">
                <td class="display-5">HIGH</td>
                <td class="severe display-5"><?php echo $high_cases ?></td>
            </tr>
            <tr class="my-5">
                <td class="display-5">MEDIUM</td>
                <td class="severe display-5"><?php echo $medium_cases ?></td>
            <tr class="my-5">
                <td class="display-5">LOW</td>
                <td class="severe display-5"><?php echo $low_cases ?></td> 
            </tr>
            <hr>
            <tr class="my-5">
                <td class="display-5 font-weight-bold">TOTAL USAGE</td>
                <td class="severe display-5"><?php echo $severe_cases+$low_cases+$high_cases+$medium_cases ?></td> 
            </tr>  
        </table>
    </div>
    
</body>
</html>