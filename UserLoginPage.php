<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', true);
$server = "localhost";
$username = "root";
$password = "";
$dbname = "foodrecipessystem";
$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btnlogin'])) {
    $usernameOrEmail = mysqli_real_escape_string($conn, $_POST['login_username']);
    $password = mysqli_real_escape_string($conn, $_POST['login_password']);

    // Hash the password for comparison
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM tblregister_user WHERE Username = '$usernameOrEmail' AND Passwords = '$hashedPassword'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usernameOrEmail;
            echo '<script>window.location.href = "welcome.php";</script>';

            exit();
        } else {
            $loginError = "Invalid password";
        }
    } else {
        $loginError = "Invalid username or error in database";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy's Recipes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        nav {
            background-color: #32CD32; /* Leaf Green */
            text-align: center;
            padding: 10px 0;
        }

        .navbar-brand {
            color: #fff;
            margin-left: 20px; /* Add margin to push it from the left */
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-link {
            color: #fff;
            margin: 0 10px;
            border-radius: 0;
            background-color: #32CD32; /* Matching navbar background color */
            transition: background-color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            background-color: #3CB371; /* Lighter shade of Leaf Green */
        }

        .carousel-item img {
            max-width: 100%;
            height: auto;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }
        .textheight{
            height: 50px;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Yummy's Recipes</a> <!-- Add the navbar brand on the left -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"> <!-- Align navbar items to the right -->
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Back to Home Page</a>
                </li>
               
               
            </ul>
        </div>
    </nav>

    <section>
       
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="login_username">Username or Email:</label>
                <input type="text" class="form-control" id="login_username" name="login_username" required>
            </div>
            <div class="form-group">
                <label for="login_password">Password:</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="login_password" name="login_password" required>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-eye" id="toggleLoginPassword"></i>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit" name="btnlogin" class="btn btn-primary">Login</button>
            <label> <a href="register.php">Not Registered Yet?</a></label>
        </form>
    </section>

    <!-- Remaining Sections... -->

    <footer>
        <p>© 2024 Yummy's Recipes. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>