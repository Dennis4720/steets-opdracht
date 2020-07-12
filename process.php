<?php

require './core/bootstrap.php';
use App\PrimeYear;

$jaar = $_POST['jaar'];

// check if input is a valid year number
if(!is_numeric($jaar) || strlen($jaar) < 4 || strlen($jaar) > 4) {
    echo 'Invalid input!';
    die;
}

$x = $jaar;
$array = array();

// get list of 30 last prime years based on input.
while ( sizeof($array) < 30 ) {
    $checkPrime = PrimeYear::isPrime($x);

    if($checkPrime)
    {
        $data = new PrimeYear(
            $x,
            DateTime::createFromFormat('Ymd', $x.'1225')->format('l'),
            ceil($x / 100)
        );
        // push results to array
        array_push($array, $data);

    }
    $x--;
}

// check if input already exists in our records
$query = $database->PDO->prepare("SELECT * FROM years WHERE `year` = ?");
$query->execute(array($jaar));

if($query->rowCount() > 0) {
    // row exists, pull data from database and decrypt christmas day.
    $sql = $database->PDO->prepare("SELECT * FROM years WHERE `year` = ? LIMIT 1");
    $sql->execute(array($jaar));
    while($result = $sql->fetch(PDO::FETCH_OBJ)){
        $data = new PrimeYear(
            $result->year,
            $cryptor->decrypt($result->christmas_day),
            $result->century
        );

        if(PrimeYear::isPrime($jaar))
        {
            unset($array[0]);
            array_unshift($array, $data);
        }
    }
} else {
    // year does not exist in our database ( yet! ), insert...
    $statement = $database->PDO->prepare('INSERT INTO years (`year`, `christmas_day`, `century`) VALUES (?, ?, ?)');
    $statement->execute([
            $jaar,
            $cryptor->encrypt(DateTime::createFromFormat('Ymd', $jaar.'1225')->format('l')),
            ceil($jaar / 100)
    ]);
}

// array to JSON.
echo(json_encode($array));

