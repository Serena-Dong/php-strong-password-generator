<?php
session_start();
// Recupero il dato
$password_lenght = $_GET['password'] ?? '';
// Creo funzione per generare la password
function passwordGenerator($password_lenght){
    $pass = [];

    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $letters_upperCase = array_map('strtoupper', $letters);
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $symbols = ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];


    // Merge
    $tot = array_merge($letters, $letters_upperCase, $numbers, $symbols);
    // Counting
    $tot_lenght = count($tot);

    for($i = 0; $i < $password_lenght ; $i++){
        $n = rand(0, $tot_lenght);
        $password = $tot($n);
    }
    return implode($pass);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
       <div class="titles mb-4">
       <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
       </div>
    </header>
    <main>
        <div class="container d-flex justify-content-center">

            <div class="form-container">
                <form action="" method="GET">
                    <!-- Input -->
                    <div class="password-form mb-3 d-flex justify-content-center align-items-center ">
                        
                        <div class="div">
                            <p class="mx-4">Lunghezza Password: </p>
                        </div>
                        <div class="input-container">
                            <input type="number" class="form-control" name="password">
                        </div>
                        
                    </div>
                    
                    <!-- Buttons -->
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>