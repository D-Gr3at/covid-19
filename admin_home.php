<?php
ob_start();
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL); 
if (!isset($_SESSION['full_name'])) {
    header("Location: login.php");
}
include("lib/dbfunctions.php");
$query = "SELECT * FROM user_info ORDER BY id ASC";
$resource = pg_query($query);
$users = pg_fetch_all($resource);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-105158148-2"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script> -->
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
        if(isset($_SESSION['full_name'])){
            echo "<div class='row'>
                    <div class='container-fluid header' style='background-color: azure'>
                        <h class='display-4 font-weight-normal'>Welcome ".$_SESSION['full_name']."</h1>
                        <a type='button' class='btn btn-primary float-right mx-5 my-5' href='logout.php'>logout</a>
                    </div>
                </div>";
        }
    ?>
    <!-- <div class="container mt-2">
        <form action="" method="post" id="search-form">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email-search">Email:</label>
                        <input type="text" name="email-search" id = "email-search" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="result-search">Result:</label>
                        <input type="text" name="result-search" id = "result-search" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone-search">Phone:</label>
                        <input type="text" name="phone-search" id = "phone-search" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Search<i class="fa fa-search"></i></button>
            </div>
        </form>
        
    </div> -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-light rounded my-2 py-2">
                <h4 class="text-center text-dark pt-2">User Test Results</h4>
                <hr>
                <table class="table table-bordered table-striped container table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Result</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($users as $user){
                                $query = "SELECT * FROM user_data WHERE user_id=".$user['id']."";
                                $data_resource = pg_query($query);
                                $data = pg_fetch_row($data_resource);
                            echo "<tr>
                                    <td>".$user['id']."</td>
                                    <td>".$user['full_name']."</td>
                                    <td>".$user['email']."</td>
                                    <td>".$user['phone']."</td>
                                    <td>".$data[13]."</td>
                                    <td>"."<a type='button' class='btn btn-primary btn-sm text-white' data-toggle='modal' data-target='#staticBackdrop' 
                                    onClick='getDetails(".$user['id'].")'>View</a>"."</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">USER RESULT:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="display-details modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
