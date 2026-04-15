<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $attending = $_POST['attending'];

    $file = fopen("responses.txt", "a");

    fwrite($file, "Name: $name | Email: $email | Attending: $attending\n");

    fclose($file);

    echo "<h2 style='text-align:center;'>Thank you, $name!</h2>";
    echo "<p style='text-align:center;'>Your response has been recorded.</p>";
    echo "<div style='text-align:center;'><a href='index.html'>Go Back</a></div>";
}

?>