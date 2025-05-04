<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Cake Shop Management System</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
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
        <h2 class="py-5 text-center text-light px-4" id="sys_title">Yamii Delights Cake Shop</h2>
        <h3 class="py-5 text-center text-black px-4" id="sys_title">Prepared By: Osman Gani Mridul </h3>
        <div class="card my-3 col-md-4 offset-md-4">
            <div class="card-body">
                <form action="" id="login-form">
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
                        <button class="btn btn-sm btn-primary rounded-0 my-1">Login</button>
					</div>
					<div class="text-center mt-3">
						<p>If you don't have an account yet, <strong><a href="#signup" data-toggle="tab" id="signup-link">create an account</a></strong>.</p>
					</div>
                </form>

                <!-- Signup Form -->
                <form action="signup_submit.php" id="signup-form" style="display: none;">
                    <center><small>Sign Up with Username, Email, Password, and Phone</small></center>
                    <div class="form-group">
                        <label for="signup-username" class="control-label">Username</label>
                        <input type="text" id="signup-username" autofocus name="username" class="form-control form-control-sm rounded-0" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-email" class="control-label">Email</label>
                        <input type="email" id="signup-email" name="email" class="form-control form-control-sm rounded-0" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-password" class="control-label">Password</label>
                        <input type="password" id="signup-password" name="password" class="form-control form-control-sm rounded-0" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-phone" class="control-label">Phone</label>
                        <input type="text" id="signup-phone" name="phone" class="form-control form-control-sm rounded-0" required>
                    </div>
                    <div class="form-group d-flex w-100 justify-content-end">
                        <button class="btn btn-sm btn-primary rounded-0 my-1">Sign Up</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>If you already have an account, <strong><a href="#login" data-toggle="tab">login here</a></strong>.</p>
                    </div>
                </form>
				
            </div>
        </div>
       </div>
   </div>

<script>
    $(function(){
        // Show/hide signup form on click
        $('#signup-link').on('click', function(e){
            e.preventDefault();
            $('#login-form').hide();
            $('#signup-form').show();
        });

        // Handle login form submission
        $('#login-form').submit(function(e){
            e.preventDefault();
            // Your AJAX login form handling code
        });

        // Handle signup form submission
        $('#signup-form').submit(function(e){
            e.preventDefault();
            // Your AJAX signup form handling code
        });
    });
</script>
</body>
</html>
