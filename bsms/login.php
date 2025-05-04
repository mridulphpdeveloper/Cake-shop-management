<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {
    header("Location: dashboard.php");
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Validate username and password (simplified example, should be improved for real usage)
    if ($username == 'your_username' && $password == 'your_password') {
        // Successful login
        $_SESSION['user_id'] = 1; // Example user ID, you should fetch real user data here
        header("Location: dashboard.php");
        exit;
    } else {
        // Login failed
        $login_error = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Cake Shop Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: url('https://images.unsplash.com/photo-1587241321921-91a834d6d191?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJha2VyeXxlbnwwfHwwfHw%3D&w=1000&q=80');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .blinking-text {
            font-size: 3em;
            font-weight: bold;
            color: #ffffff;
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }
        h2#sys_title {
            text-shadow: 3px 3px 10px #000000;
        }
        @media (max-width: 700px) {
            h2#sys_title {
                font-size: 2em; /* Adjust for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="h-100 d-flex justify-content-center align-items-center">
        <div class='w-100'>
            <h2 class="py-5 text-center blinking-text px-4" id="sys_title">Yammi Delights Cake Shop</h2>
            <h3 class="py-5 text-center text-black px-4">Prepared By: Osman Gani Mridul</h3>
            <div class="card my-3 col-md-4 offset-md-4">
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <center><small>Please Enter Username and Password</small></center>
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" autofocus name="username" class="form-control form-control-sm rounded-0" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-sm rounded-0" required>
                        </div>
                        <div class="form-group d-flex w-100 justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary rounded-0 my-1">Login</button>
                        </div>
                        <?php if (isset($login_error)): ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <?php echo $login_error; ?>
                            </div>
                        <?php endif; ?>
                        <div class="text-center mt-3">
                            <p>If you don't have an account yet, <strong><a href="signup.php">create an account</a></strong>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
