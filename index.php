<?php

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$@&/+*?^.,:;-_#";

$pass = [];



$has_number = isset($_GET["lunghezza_password"]);

if ($has_number) {

    var_dump($has_number);

    $lung_pass = $_GET["lunghezza_password"];

    include __DIR__ . '/functions.php';

    $new_password = generate_password($chars, $lung_pass);

    session_start();

    $SESSION['$new_password'] = generate_password($chars, $lung_pass);

    if ($SESSION['$new_password']) {

        var_dump($SESSION['$new_password']);

        header('Location: ./show_password.php');

        //Va alla pagina show_password.php ma il risultato è null
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5">

        <form method="GET" action="">
            <label for="lunghezza_password">
                <h3>Lunghezza Password da 8 a 20 caratteri max: </h3>
            </label>
            <input type="number" min="8" max="20" name="lunghezza_password" id="lunghezza_password">

            <button class="btn btn-primary">Invia</button>
            <!-- <input class="btn btn-outline-secondary" type="reset" value="Reset"></input>  -->
        </form>


    </div>

</body>

</html>