<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
    header("Location: dashboard.php");
    exit;
}

// Initialize variables to store input data and error messages
$username = $email = $password = $phone = '';
$username_err = $email_err = $password_err = $phone_err = '';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate phone number
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Please enter phone number.";
    } else {
        $phone = trim($_POST["phone"]);
    }

    // Check if there are no validation errors
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($phone_err)) {
        // Example: Insert into database (replace with your database logic)
        // For demonstration, simply displaying the input values
        echo "<h2>Signup Successful</h2>";
        echo "<p>Username: $username</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        // Redirect to login page after successful signup
        // header("Location: login.php");
        // exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Cake Shop Management System</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        html, body{
            height:100%;
        }
        body{
            background-image:url('https://images.unsplash.com/photo-1587241321921-91a834d6d191?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJha2VyeXxlbnwwfHwwfHw%3D&w=1000&q=80') !important;
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center center;
        }
        h1#sys_title {
            font-size: 6em;
            text-shadow: 3px 3px 10px #000000;
        }
        @media (max-width:700px){
            h1#sys_title {
                font-size: inherit !important;
            }
        }
    </style>
</head>
<body class="">
   <div class="h-100 d-flex justify-content-center align-items-center">
       <div class='w-100'>
        <h2 class="py-5 text-center text-light px-4" id="sys_title">Yammi Delights Cake Shop</h2>
        <h3 class="py-5 text-center text-black px-4" id="sys_title">Prepared By: Osman Gani Mridul </h3>
        <div class="card my-3 col-md-4 offset-md-4">
            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <center><small>Sign Up with Username, Email, Password, and Phone</small></center>
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" id="signup-username" autofocus name="username" class="form-control form-control-sm rounded-0" required>
                        <span class="text-danger"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" id="signup-email" name="email" class="form-control form-control-sm rounded-0" required>
                        <span class="text-danger"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" id="signup-password" name="password" class="form-control form-control-sm rounded-0" required>
                        <span class="text-danger"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label">Phone</label>
                        <input type="text" id="signup-phone" name="phone" class="form-control form-control-sm rounded-0" required>
                        <span class="text-danger"><?php echo $phone_err; ?></span>
                    </div>
                    <div class="form-group d-flex w-100 justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary rounded-0 my-1">Sign Up</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>If you already have an account, <strong><a href="login.php">login here</a></strong>.</p>
                    </div>
                </form>
				
            </div>
        </div>
       </div>
   </div>
</body>
</html>
