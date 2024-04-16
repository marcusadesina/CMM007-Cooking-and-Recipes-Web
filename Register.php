<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy Recipes</title>
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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <h2>User Registration</h2>
        <br>
        <form action="insert.php" method="post">
        <div class="form-group">
            <label for="usernameType">Username Type:</label>
            <select class="form-control textheight" name="dprCat">
                    <option>Select User Type</option>
                    <option>Chef/Cook</option>
                    <option>Learner</option>
            </select>

        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control textheight" id="username" name="txtusername" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control textheight" id="email" name="txtemail" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="txtpassword" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-eye" id="togglePassword"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="confirm_password" name="txtconfirm_password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-eye" id="toggleConfirmPassword"></i>
                    </span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success form-control textheight" name="btnRegister">Register</button>
    </form>
    </section>

    <!-- Remaining Sections... -->

    <footer>
        <p>© 2024 Yummy Recipes. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
    document.getElementById('toggleConfirmPassword').addEventListener('click', toggleConfirmPasswordVisibility);

    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        passwordInput.type = (passwordInput.type === 'password') ? 'text' : 'password';
    }

    function toggleConfirmPasswordVisibility() {
        const confirmPasswordInput = document.getElementById('confirm_password');
        confirmPasswordInput.type = (confirmPasswordInput.type === 'password') ? 'text' : 'password';
    }
</script>
</body>
</html>