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
            background-color: #f8f8f8; /* Light gray background color */
            color: #000; /* Black text color */
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

        .jumbotron {
            background-size: cover;
            background-position: center;
            color: #fff; /* White text color */
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <a href="homepage.php"><i class="fas fa-home"></i> Home</a>
        <a href="search_recipes.php"><i class="fas fa-book"></i> Search Recipes</a>
        <a href="add_recipe.php"><i class="fas fa-info-circle"></i> Add Recipes</a>
            <a href="homepage.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="content">
        <!-- Your main content goes here -->

        <h1>Welcome to Yummy's Recipes!</h1>

        <div class="jumbotron" style=" background-color: black">
            <div class="container">
                <h1 class="display-4">Mouthwatering Delights</h1>
                <p class="lead">Indulge in a tantalizing journey of flavor with our exquisite array of "Mouthwatering Delights." Picture this: as you take your first bite into a decadent slice of velvety chocolate cake, your taste buds awaken to a symphony of rich cocoa notes dancing across your palate. Each forkful is a delightful revelation, as the moist cake melts in your mouth, leaving behind a lingering sweetness that leaves you craving more.</p>
               
                <p>For those with a penchant for the exotic, our "Mouthwatering Delights" offer a passport to global gastronomy. From the creamy indulgence of Italian tiramisu to the fragrant spices of Indian kulfi, each dessert tells a story of culture and tradition, inviting you to savor the diverse flavors of the world</p>
                <a class="btn btn-danger btn-lg" href="#" role="button">Indulge Yourself</a>
            </div>
        </div>

        <div class="jumbotron" style=" background-color: black">
            <div class="container">
                <h1 class="display-4">Green Garden Delicacies</h1>
                <p class="lead">Immerse yourself in a garden of culinary delights with our sensational selection of "Green Garden Delicacies." Picture a vibrant medley of fresh vegetables, lovingly harvested from the earth and transformed into mouthwatering masterpieces that will tantalize your taste buds and nourish your body.</p>
                <hr class="my-4">
                <p>Indulge in the guilt-free pleasure of knowing that each bite you take is a step towards a healthier, more sustainable future. From farm to table, we prioritize quality and freshness, ensuring that every dish is bursting with flavor and nutritional goodness.</p>
                <a class="btn btn-danger btn-lg" href="#" role="button">Indulge Yourself</a>
            </div>
        </div>

       
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