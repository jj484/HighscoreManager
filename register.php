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
    <title>Highscore Database | Register</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
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
                            <h2 class="tm-block-title mt-3">Register</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            
                            
                            <!-- FORM -->
                            <form action="registerAction.php" method="POST" class="tm-login-form">
                            
                                <!-- USERNAME -->
                                <div class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Username</label>
                                    <input name="username" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="username" required>
                                </div>
                                <!-- USERNAME -->                                
                                
                                <!-- PASSWORD LABEL -->
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" required>
                                </div>
                                <!-- PASSWORD LABEL -->
                                
                                
                                <!-- CONFIRM PASSWORD LABEL -->
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Confirm Password</label>
                                    <input name="confirmPassword" type="password" class="form-control validate" required>
                                </div>
                                <!-- CONFIRM PASSWORD LABEL -->
                                
                                
                                <!-- REGISTER BUTTON -->
                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto">Register</button>
                                </div>
                                <div class="input-group mt-3">
                                <!-- REGISTER BUTTON -->
                                
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


<?php
  require('config.php');
  $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
  $db = new PDO($conn_string, $username, $password);
  $stmt = $db->prepare("select id, username, password from `projectAccounts` where username = ");
  $stmt->execute();
  
  $results = $stmt->fetch(PDO::FETCH_ASSOC);
?>