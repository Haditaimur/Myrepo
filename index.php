<?php
// Initialize the session
session_name('login1');
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: guest.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM guest_users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: guest.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Athena Hotel - Guest Login</title>
    <link rel="shortcut icon" href="YYY.PNG" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="transition.css">
    <style>
         .wrapper{ 
             padding: 20px; 
            width: 500px;
            border-radius: 20px;
            -webkit-box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);
            -moz-box-shadow:    0px 10px 20px 0px rgba(50, 50, 50, 0.52);
            box-shadow:         0px 10px 20px 0px rgba(50, 50, 50, 0.52)
        }
        .container{
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .text-center{
            margin-bottom: 30px;
            color: black;
        }
            
            .btn{
				color: #fff;
                background-color: #1e2761;
                width: 70px;
			}
		.btn:hover{
            color: #fff;
			background-color: #004999;
			}
    </style>
</head>
<body class="bg-light">
<header class="head">
    <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom border-[#F8F9FA] fixed-top">
  <div class="container-fluid" >
    <div class="img">
    <img src="YYY.PNG" alt="img"  class="img-fluid" width="70px" height="35px">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Admin</a>
        </li>
      </ul>
    </div>
  </div> 
</nav>
        </div>
    </header> 
    <section class="container-fluid" style="margin-top: 7rem;" >
    <div class="container flex justify-content-center">
    <div class="wrapper ">
        <h2 class= "text-center" >Guest</h2>
        

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="d-grid gap-4">
            <div class="form-group">
                <label class="mb-2">Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Username">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label class="mb-2">Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Password">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn w-100 text-center" value="Login">Login</button>
            </div>
            <!--<p>Create an account? <a href="guest_register.php">Sign up</a></p>-->
        </form>
    </div>
    </div>
    </section>
</body>
</html>