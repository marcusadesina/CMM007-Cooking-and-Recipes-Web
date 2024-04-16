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
            background-color: #000; /* Black background color */
            color: #fff; /* White text color */
            margin: 0;
            padding: 0;
        }

        #sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            left: 0;
            top: 0;
            background-color: #fff; /* White sidebar background color */
            overflow-y: auto;
        }

        #content {
            margin-left: 250px; /* Adjusted margin to create space */
            padding: 15px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #000; /* Black text color */
            display: block;
            transition: 0.3s;
        }

        #sidebar a i {
            margin-right: 10px;
            color: #000; /* Black color */
        }

        #sidebar a:hover {
            background-color: #777;
        }

        .table-container {
            margin-top: 20px;
            border: none; /* Remove border */
        }

        .table td {
            color: #fff; /* White color for table data */
        }

        .edit-btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <a href="home.php"><i class="fas fa-home"></i>Home</a>
        <a href="User_Report.php"><i class="fas fa-book"></i>Users Reports</a>
        <a href="Recipe_Report.php"><i class="fas fa-info-circle"></i> Recipes Report</a>
        <a href="#"><i class="fas fa-envelope"></i> Contact</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="content">
        <!-- Your main content goes here -->

        <h1>Welcome to Admin Dashboard</h1>
      
        <!-- Display the table here -->
        <div class="table-container">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
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

                    // Fetch users from the database (replace 'tblusers' with your actual users table name)
                    $query = "SELECT * FROM tblregister_user";
                    $result = mysqli_query($conn, $query);

                    // Check for query execution errors
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    // Display the fetched user data in a table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['Username'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>
                                <a href='edit_user.php?id=" . $row['id'] . "' class='btn btn-primary edit-btn'>Edit User</a>
                            </td>";
                        echo "</tr>";
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>