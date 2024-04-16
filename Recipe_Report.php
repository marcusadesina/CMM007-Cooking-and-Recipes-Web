<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Yummy's Recipes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: black; /* Set page content background color to black */
            margin: 0;
            padding: 0;
        }

        #sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            left: 0;
            background-color: white; /* Set sidebar background color to white */
            transition: 0.3s;
            overflow-y: auto;
        }

        #content {
            margin-left: 250px; /* Adjusted margin to create space */
            transition: 0.3s;
            padding: 15px;
            background-color: black; /* Set page content background color to black */
            color: white; /* Set text color to white */
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: black; /* Set sidebar text color to black */
            display: block;
            transition: 0.3s;
        }

        #sidebar a i {
            margin-right: 10px;
            color: black; /* Set sidebar icon color to black */
        }

        #toggle-btn {
            position: fixed;
            left: 10px;
            top: 10px;
            z-index: 2;
            cursor: pointer;
            font-size: 20px;
            color: black; /* Set toggle button color to black */
        }

        #toggle-btn:hover {
            color: #ccc;
        }
        tr{
            color:white;
        }

        #sidebar a:hover {
            background-color: #ddd; /* Set hover background color for sidebar */
        }
    </style>
</head>
<body>
    <div id="sidebar">
   
    <a href="homepage.php"><i class="fas fa-home"></i>Home</a>
        <a href="User_Report.php"><i class="fas fa-book"></i>Users Reports</a>
        <a href="Recipe_Report.php"><i class="fas fa-info-circle"></i> Recipes Report</a>
        <a href="homepage.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="content">
        <!-- Your main content goes here -->

        <h1>Welcome to Admin Dashboard</h1>
      
        <!-- Display the table here -->
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Recipe Name</th>
                    <th>Category</th>
                    <th>Ingredients</th>
                    <th>Instructions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Your PHP code here
                // Your server config and database connection
                $server = "localhost";
                $username = "root";
                $password = "";
                $dbname = "foodrecipessystem";
                $conn = mysqli_connect($server, $username, $password, $dbname);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch recipes from the database
                $query = "SELECT * FROM tblrecipes_info";
                $result = mysqli_query($conn, $query);

                // Check for query execution errors
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }

                // Display the fetched data in a table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['RecipesName'] . "</td>";
                    echo "<td>" . $row['RecipeCategories'] . "</td>";
                    echo "<td>" . $row['Used_Ingredients'] . "</td>";
                    echo "<td>" . $row['Instructions'] . "</td>";
                    echo "</tr>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <div id="toggle-btn">
        <i class="fas fa-bars"></i>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('toggle-btn').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');

            if (sidebar.style.left === '0px') {
                sidebar.style.left = '-250px';
                content.style.marginLeft = '10px'; /* Adjusted margin to create space */
            } else {
                sidebar.style.left = '0px';
                content.style.marginLeft = '250px';
            }
        });
    </script>
</body>
</html>