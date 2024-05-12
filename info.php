<?php
// Include your database connection configuration file
require_once 'config.php';

// Query to fetch data from the accordionctn table
try {
    $sql = "SELECT id, question, answer, definition FROM accordionctn";
    $stmt = $pdo->query($sql);
} catch(PDOException $e) {
    // Handle error if connection fails
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>ASSESSMENT 3 AGILE WEB DEV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 6px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 200px 80px;
	padding-bottom: 20px; /* Adjust this value as needed */
    position: relative;
    min-height: 100vh; /* Ensure the container takes
	font-size: 20px;
  }
  .accordion {
    position: fixed;
    bottom: 50px; /* Adjust this value as needed to ensure it's above the footer */
    width: 100%;
    max-height: calc(100vh - 100px); /* Adjust this value to leave space for the footer */
    overflow-y: auto; /* Add scroll bar if content exceeds max-height */
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #31493B;
    border: 0;
    font-size: 18px !important;
    letter-spacing: 5px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #C69B32 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: #59A992  !important;
  }
  footer {
    background-color: #31493B;
    color: #f5f5f5;
    padding: 30px;
	margin-top: 0px; /* Adjust this value as needed */
	position: floor;
    bottom: 0;
    width: 100%;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
.table-container {
    display: flex;
    justify-content: center;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">ASSESSMENT 3 AGILE WEB DEV</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="#">QUESTION & ANSWERS</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Dropdown list1</a></li>
            <li><a href="#">Dropdown list2</a></li>
            <li><a href="#">Dropdown list3</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<--! TABLE -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Definition</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'config.php'; // Include your database connection configuration

                    try {
						// Query to select data from the accordionctn table
						$sql = "SELECT * FROM accordionctn";
						$stmt = $pdo->query($sql);

						// Check if there are rows returned
						if ($stmt->rowCount() > 0) {
							// Loop through each row of the result set
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
								// Output each row as a table row
								echo "<tr>";
								echo "<th scope='row'>" . htmlspecialchars($row['id']) . "</th>";
								echo "<td>" . htmlspecialchars($row['question']) . "</td>";
								echo "<td>" . htmlspecialchars($row['answer']) . "</td>";
								echo "<td>" . htmlspecialchars($row['definition']) . "</td>";
								echo "</tr>";
							}
						} else {
							// Output a message if no rows are found
							echo "<tr><td colspan='4'>No data found</td></tr>";
						}
					} catch(PDOException $e) {
						// Handle error if connection fails
						echo "Query failed: " . $e->getMessage();
						exit();
					}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <p>This website has been made by Berlan Binenggar.<a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"> Powered by w3schools.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  
})
</script>

</body>
</html>
