<?php
require "config.php";
$database = "if17_kellrasm";

//Get the base-64 string from data
$filteredData = substr($_POST['img_val'], strpos($_POST['img_val'], ",") + 1);

//Decode the string
$unencodedData = base64_decode($filteredData);

//Save the image
file_put_contents('img.png', $unencodedData);

//Show the image
echo "graafik salvestatud!";
echo '<img src="' . $_POST['img_val'] . '" />';

$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
if (isset($_POST['img_val'])) {

    $stmt = $mysqli->prepare("INSERT INTO savedGraphs (screenshot) VALUES (?)");
    echo $mysqli->error;
    $stmt->bind_param("s", $_POST['img_val']);
    $stmt->execute();
    echo $stmt->error;

    $stmt->close();
    $mysqli->close();
}
