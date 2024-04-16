<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy's Recipes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <a class="nav-link" href="userpage.php">Back to User Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Logout</a>
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
        <h2>Add Recipe</h2>
        <br>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Recipe Category</label>
                <select class="form-control textheight" name="dprCat">
                <option>Select Category</option>
                <option>Dessert</option>
                    <option>Salads</option>    
                    <option>Soup & Stew</option>          
                    <option>Beverages</option>
                    <option>International Cuisine</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipe_title">Recipe Name:</label>
                <input type="text" class="form-control textheight" id="recipe_title" name="txtrecipe_title" required>
            </div>
            <div class="form-group">
                <label for="recipeImage">Recipe Picture:</label>
                <input type="file" class="form-control-file" id="recipeImage" name="recipeImage" accept="image/*" onchange="previewSelectedImage(this)">
                <img id="previewImage" style="max-width: 100px; max-height: 100px; display: none;" alt="Preview Image">
            </div>
            <div class="form-group">
                <label for="video">Video File (IF ANY):</label><br>
                <input type="file" id="video" accept="video/*" required>
            </div>
            <div class="form-group">
                <label for="ingredients"> Used Ingredients:</label>
                <textarea class="form-control" id="ingredients" name="txtingredients" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="instructions">Instructions:</label>
                <textarea class="form-control" id="instructions" name="txtinstructions" rows="6" required></textarea>
            </div>
            <button type="submit" name="btnAddRecipes" class="btn btn-primary">Add Recipe</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Yummy's Recipes. All rights reserved.</p>
    </footer>

    <script>
        function previewSelectedImage(input) {
            const preview = document.getElementById("previewImage");
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = "block"; // Show the preview image
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>