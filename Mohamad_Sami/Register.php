<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
<body class="gradient-custom">

<section class="min-vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                            <p class="text-white-50 mb-5">Please enter your information to sign up!</p>

                            <form method="post" action="RegisterAction.php">
                                <?php
                                session_start();
                                if (isset($_SESSION["ERROR_Reg"]))
                                    echo "<span style='color:red;'>" . $_SESSION["ERROR_Reg"] . "</span><br/>";
                                ?>
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="Username" id="Username" class="form-control form-control-lg" />
                                    <label class="form-label" for="Username">Username</label>
                                    <label id="lblError"></label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="Pass" id="typePassword" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePassword">Password</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="Confirm" id="typeConfirmPassword" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeConfirmPassword">Confirm Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Save">Register</button>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0">Already have an account? <a href="Login.php" class="text-white-50 fw-bold">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $('#Username').blur(function() {
            $.ajax({
                type: "GET",
                url: 'username_validation.php',
                data: {
                    'name': this.value
                },
                success: function(response)
                {
                    $('#lblError').html(response);
                }
            });
        });
    });
</script>

</body>
</html>
