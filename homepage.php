<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yummy Recipes</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #4CAF50; /* Leaf green background color */
      color: #ffffff; /* White text color */
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .menu-bar {
      background-color: #3d8c40; /* Darker green for menu bar */
      padding: 10px 0;
      text-align: center;
      overflow: hidden;
    }
    .menu-bar .nav-brand {
      float: left;
      font-size: 24px;
      margin-left: 20px;
    }
    .menu-bar .signup-btn {
      float: right;
      margin-right: 20px;
      border-radius: 20px;
      background-color: #ff5722; /* Orange button color */
      padding: 10px 20px;
      text-decoration: none;
      color: #ffffff;
    }
    .menu-bar .signup-btn:hover {
      background-color: #ff7043; /* Darker orange on hover */
    }
    .menu-bar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: inline;
    }
    .menu-bar ul li {
      display: inline;
      margin-right: 20px;
    }
    .menu-bar ul li a {
      color: #ffffff;
      text-decoration: none;
      font-size: 18px;
      padding: 5px 10px;
    }
    .menu-bar ul li a:hover {
      background-color: #555555; /* Darker gray on hover */
      border-radius: 5px;
    }
    .jumbotron {
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
      border-radius: 20px; /* Rounded corners */
      padding: 50px;
      margin-bottom: 20px;
      border-top-left-radius: 20px; /* Curved top-left corner */
      border-top-right-radius: 20px; /* Curved top-right corner */
      border-bottom-left-radius: 20px; /* Curved bottom-left corner */
      border-bottom-right-radius: 20px; /* Curved bottom-right corner */
    }
    .jumbotron h1, .jumbotron p {
      color: #ffffff; /* White text color */
    }
    .left-column, .right-column {
      width: calc(50% - 20px); /* Adjusted width for margin */
      float: left;
      padding: 20px;
      box-sizing: border-box;
    }
    .left-column {
      border-radius: 20px; /* Curve edges on the left side */
      margin-right: 40px; /* Increase margin between columns */
    }
    .right-column {
      border-radius: 0 20px 20px 0; /* Curve edges on the right side */
      background-color: #fff59d; /* Milk-yellow background color */
      display: flex;
      flex-wrap: wrap;
    }
    .right-column .row {
      width: 100%;
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    .right-column .row .column {
      width: calc(50% - 20px);
      border-radius: 20px;
      overflow: hidden;
    }
    .right-column .row .column img {
      width: 100%;
      border-radius: 20px;
    }
    .get-started-btn {
      display: inline-block;
      background-color: green;
      color: #fff;
      padding: 10px 20px;
      border: none; /* Remove border */
      text-decoration: none;
      font-size: 18px;
      transition: background-color 0.3s ease;
      height: 40px;
    }

    .get-started-btn:hover {
      background-color: lightslategrey; /* Darker orange on hover */
    }
    footer {
      text-align: center;
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      width: 100%;
    }
    @media (max-width: 768px) {
      .left-column, .right-column {
        width: 100%;
        float: none;
        border-radius: 20px; /* Remove curve edges on smaller screens */
        margin-right: 0; /* Remove margin on smaller screens */
      }
      .menu-bar .nav-brand {
        float: none;
        margin: 0 auto;
        display: block;
      }
      .menu-bar .signup-btn {
        float: none;
        margin: 10px auto;
      }
      .right-column .row .column {
        width: 100%;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

<div class="menu-bar">
  <div class="nav-brand">Yummy Recipes, Inc</div>
  <a href="Register.php" class="signup-btn">Sign Up</a>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="UserLoginPage.php">Login</a></li>
    <li><a href="AdminPage.php">Admin</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div>

<div class="container">
  <div class="left-column">
    <div class="jumbotron">
      <h2>Welcome to Our Website</h1>
      <p>Step into a world of culinary delight as you enter our website. Here, we invite you to embark on a gastronomic journey filled with flavor, creativity, and endless inspiration.
      Welcome to a place where food is more than just sustenance it's a celebration of life's simple pleasures. Whether you're a seasoned chef or a novice in the kitchen, our website is your gateway to exploring the world of cooking and baking in all its delicious glory.
      From mouthwatering recipes and helpful cooking tips to vibrant food photography and captivating culinary stories, our website is a treasure trove of resources designed to ignite your passion for food and empower you to unleash your inner chef.
      So come on in, take a seat at our virtual table, and let your taste buds be your guide. Whether you're here to discover new recipes, sharpen your cooking skills, or simply indulge in a little foodie escapism, we're thrilled to have you join us on this delicious adventure. Welcome to our website—where every visit is a feast for the senses.</p>
      <a href="#" class="get-started-btn">Get Started</a>
    </div>
  </div>
  <div class="right-column">
    <div class="row">
      <div class="column">
        <img src="images/desert.jpg" height="200" width="200" alt="Placeholder Image 1">
      </div>
      <div class="column">
        <img src="images/Ofe-Okazi-4.jpg" height="200" width="200" alt="Placeholder Image 2">
      </div>
    </div>
    <div class="row">
      <div class="column">
        <img src="images/hq720.jpg" height="200" width="200" alt="Placeholder Image 3">
      </div>
      <div class="column">
        <img src="images/Egusi-soup-Recipe-2.jpg" height="200" width="200" alt="Placeholder Image 4">
      </div>
    </div>
  </div>
  <div style="clear:both;"></div>
  <br>
  <div class="jumbotron" id="new">
    <!-- Picture Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/desert.jpg" class="d-block w-100" alt="Carousel Image 1">
        </div>
        <div class="carousel-item">
          <img src="images/hq720.jpg" class="d-block w-100" alt="Carousel Image 2">
        </div>
        <div class="carousel-item">
          <img src="images/vegetarian.jpg" class="d-block w-100" alt="Carousel Image 3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<footer>
  &copy; 2024 Yummy Recipes, Inc. All rights reserved.
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
