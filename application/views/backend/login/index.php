<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for Registration</title>
    <!-- Bootstrap 5 CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <script>
        // JavaScript function to validate the form
        function validateForm(event) {
            // Username validation
            var username = document.getElementById('username').value;
            if (username === "") {
                alert("Username is required");
                event.preventDefault();
                return false;
            } 

            // Password validation
            var password = document.getElementById('password').value;
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()_+={}\[\]:;'"<>,.?/-]).{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Password must contain at least one letter, one number, and one special character");
                event.preventDefault();
                return false;
            }

            // Full Name validation
            var fullName = document.getElementById('fullname').value;
            if (fullName.length < 10) {
                alert("Full name must be at least 10 characters long");
                event.preventDefault();
                return false;
            }

            // Mobile Number validation
            var mobile = document.getElementById('mobile').value;
            var mobileRegex = /^[0-9]{10}$/;
            if (!mobileRegex.test(mobile)) {
                alert("Please enter a valid 10-digit mobile number");
                event.preventDefault();
                return false;
            }

            var type = document.getElementById('type').value;
            if (type === "") {
                alert("User Type is required");
                event.preventDefault();
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>

    <div class="container mt-5">
        <h2>Registration Form</h2>
        <?php echo form_open(base_url("admin_panel/auth/registerPro"), ['onsubmit' => 'return validateForm(event)']); ?>
        <!-- Username field -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <!-- Password field -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <small class="form-text text-muted">Password must contain at least 1 letter, 1 number, and 1 special
                character.</small>
        </div>

        <!-- Full Name field -->
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
            <small class="form-text text-muted">Full name must be at least 10 characters long.</small>
        </div>

        <!-- Mobile Number field -->
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" required>
            <small class="form-text text-muted">Enter a valid 10-digit mobile number.</small>
        </div>
        <!-- Mobile Number field -->
        <div class="mb-3">
            <label for="type" class="form-label">Login Type</label>
            <select class="form-select" id="type" name="type">
                <option selected>Select</option>
                <option value="Farmer">Farmer</option>
                <option value="Buyer">Buyer Login</option>
                <option value="Customer">Consumer</option>
            </select>
            <small class="form-text text-muted">Select Customer Type..!</small>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="<?php echo base_url() ?>js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>

</html>