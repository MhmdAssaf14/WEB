<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <style>
        body {
            background: linear-gradient(to right, #141e30, #243b55);
        }

        .gradient-custom {
            background: linear-gradient(45deg, #141e30, #243b55) !important;
        }

        .card {
            border: none;
        }

        .form-outline {
            position: relative;
        }

        .form-control {
            background-color: transparent;
            color: #fff;
            border: 1px solid #fff;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #fff;
        }

        .form-label {
            color: #fff;
            font-weight: 300;
        }

        .btn-outline-light {
            border-color: #fff;
            color: #fff;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: #243b55;
        }

        .fab {
            margin-right: 10px;
            color: #fff;
        }

        .text-white-50 {
            color: #fff;
        }

        .text-white-50:hover {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
session_start();
if (isset($_SESSION["ERROR"]))
    echo "<span style='color:red;'>" . $_SESSION["ERROR"] . "</span><br/>";
?>

<section class="min-vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <form method="post" action="LoginAction.php">
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="Username" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Username</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="Pass" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Login">Login</button>
                            </form>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="fab fa-facebook-f fa-lg"></a>
                                <a href="#!" class="fab fa-twitter fa-lg mx-4 px-2"></a>
                                <a href="#!" class="fab fa-google fa-lg"></a>
                            </div>
                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="Register.php" class="text-white-50 fw-bold">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
