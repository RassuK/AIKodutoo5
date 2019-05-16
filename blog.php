
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blogi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
	<script type="text/javascript" src="dygraph.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
	<a class="navbar-brand" href="#">Asjade Internet</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Graafikud</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.php">Blogi</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
					Rühma liikmed
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Rasmus Kello</a>
					<a class="dropdown-item" href="#">Tim Jaanson</a>
					<a class="dropdown-item" href="#">Jaroslava Koger</a>
				</div>
			</li>
		</ul>
	</div>
</div>
</nav>


<div class="container-fluid row">


<?php
require("config.php");
$database = "if17_kellrasm";

$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

$sql = "SELECT id, screenshot FROM savedGraphs";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"col-12 col-lg-6 crop\">"."</span><span>id: ". $row["id"].'<img class="img-fluid" src="'.$row["screenshot"].'" />'. "</div>";
    }
} else {
    echo "Sisestatud graafikud puuduvad";
}

$mysqli->close();

?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



