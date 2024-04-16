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
            margin-bottom: 20px;
        }

        nav {
            background-color: #78AB46; /* Leaf green background color */
            text-align: right; /* Align navigation items to the right */
            padding: 10px 0;
        }

        .navbar-brand {
            color: #fff;
            margin-right: auto; /* Move to the left */
            margin-left: 20px; /* Add margin to the left */
        }

        .navbar-nav .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #78AB46; /* Leaf green background color */
            transition: background-color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            background-color: #96CC68; /* Lighter green on hover */
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
    </style>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Yummy's Recipes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="userpage.php">Back to User Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_recipe.php">Recipes</a>
                </li>
              
            </ul>
        </div>
    </nav>

    <section>
        <h2>Search Recipes</h2>
        <form action="" method="post">
            <label for="searchRecipe">Search by Name:</label>
            <input type="text" id="searchRecipe" class="form-control" name="searchRecipe" required>
            <button type="submit" name="btnSearch" class="btn btn-primary">Search</button>
        </form>

        <?php
        // Your server config and database connection
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "foodrecipessystem";
        $conn = mysqli_connect($server, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Search functionality
        if (isset($_POST["btnSearch"])) {
            $searchRecipe = $_POST["searchRecipe"];
            $query = "SELECT * FROM tblrecipes_info WHERE RecipesName LIKE '%$searchRecipe%'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<h3>Search Results:</h3>";
                    echo "<table class='table table-bordered'>";
                    echo "<tr><th>Recipe Title</th><th>Ingredients</th><th>Instructions</th><th>Image</th><th>Action</th></tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['RecipesName'] . "</td>";
                        echo "<td>" . $row['Used_Ingredients'] . "</td>";
                        echo "<td>" . $row['Instructions'] . "</td>";
                        echo "<td><img src='" . $row['ImagePath'] . "' alt='Recipe Image' style='max-width: 100px; max-height: 100px;'></td>";
                        echo "<td><a href='view_recipe.php?id=" . $row['id'] . "' class='btn btn-info'>View Details</a></td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No recipes found.";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
        ?>
    </section>

    <!-- Remaining Sections... -->

    <footer>
        <p>© 2024 Yummy's Recipes. All rights reserved.</p>
    </footer>

    <!-- Add your scripts and other footer content here -->

</body>
</html>
