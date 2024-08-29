<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=primoschema", "spoolyy", "pass1234");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //var_dump($_POST);
    $make = htmlspecialchars($_POST["make"]);
    $model = htmlspecialchars($_POST["model"]);
    $modelspecific = htmlspecialchars($_POST["modelspecific"]);
    $year = htmlspecialchars($_POST["year"]);
    $horsepower = htmlspecialchars($_POST["horsepower"]);
    $retail = htmlspecialchars($_POST["retailprice"]);

    $query = "INSERT INTO cars (make, model, modelspecific, year, horsepower, retailprice) VALUES (:make, :model, :modelspecific, :year, :horsepower, :retailprice)";
    $parameters = ["make" => $make, "model" => $model, "modelspecific" => $modelspecific, "year" => $year, "horsepower" => $horsepower, "retailprice" => $retail,];
    $statement = $pdo->prepare($query);
    $result2 = $statement->execute($parameters);
    if ($result2 == false) {
        die("The Query did not execute");
    }
} catch (PDOException $e) {
    die("ERRORE: Impossibile stabilire una connessione al database");
}
header("Location: create.html");
