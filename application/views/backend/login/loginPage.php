<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <!-- Custom styles (optional) -->
    <style>
        .login-container {
            max-width: 400px;
            margin: 50px auto;
        }
    </style>
</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>APMC</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form id="loginForm" method="POST" action="<?php echo base_url('admin_panel/auth/login_process'); ?>" onsubmit="return validateLoginForm(event);">

                            <div class="form-floating mb-3">
                                <input type="test" class="form-control" id="username" name="username" placeholder="username" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>
                        <p class="text-center mb-0">Don't have an Account? <a href="<?php echo base_url('admin_panel/auth/register'); ?>">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- Include Bootstrap JS and validation script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript validation for login form
        function validateLoginForm(event) {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Basic client-side validation
            if (username.trim() === "") {
                alert("Please enter your username.");
                event.preventDefault();
                return false;
            }

            if (password.trim() === "") {
                alert("Please enter your password.");
                event.preventDefault();
                return false;
            }

            return true;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/chart/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>js/main.js"></script>

</body>

</html>