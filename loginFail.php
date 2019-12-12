<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Highscore Database | Login Failed</title>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Login Failed!</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <p>
                            Username/password was incorrect or the account does not exist.
                            </p>
                            
                            <!-- FORM -->
                            <form action="login.php" method="POST" class="tm-login-form">
                                <!-- Login Page BUTTON -->
                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto">Back to Login Page</button>
                                </div>
                                <div class="input-group mt-3">
                                <!-- Login Page BUTTON -->
                                
                                    <p><em></em></p>
                                </div>
                                
                            </form>
                            <!-- FORM -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light text-center">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 Jaysen Javier .
                </p>
            </div>
        </footer>
    </div>
</body>

</html>

