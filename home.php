<?php
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
    // $query = 
include("/lib/dbfunctions.php");
$db_object = new dao();
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                                            <p class=""><span class="heading display-2 p-3">0</span></p>
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
                <td class="severe display-5">0</td>
            </tr>
            <tr class="my-5">
                <td class="display-5">HIGH</td>
                <td class="severe display-5">0</td>
            </tr>
            <tr class="my-5">
                <td class="display-5">MEDIUM</td>
                <td class="severe display-5">0</td>
            <tr class="my-5">
                <td class="display-5">LOW</td>
                <td class="severe display-5">0</td> 
            </tr>
            <hr>
            <tr class="my-5">
                <td class="display-5 font-weight-bold">TOTAL USAGE</td>
                <td class="severe display-5">0</td> 
            </tr>  
        </table>
    </div>
    
</body>
</html>