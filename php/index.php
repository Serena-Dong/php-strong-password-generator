<?php
// Creo funzione per generare la password
function password_generator($lenght){

    // Password Deposit
    $password = '';

    // Characters
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!"£$%&/()=+,.-*§?^';

    // Merge
    $characters = $letters .  strtoupper($letters) .  $numbers .  $symbols;
    // Counting
    $characters_lenght = mb_strlen($characters);

    // Until it reaches the user's password lenght
    while (mb_strlen($password) < $lenght){
        // Random Index
        $random_index = rand( 0, $characters_lenght - 1 );
        // Picking a character w/ a random index 
        $random_character= $characters[$random_index];

        // Passing the data to the deposit
        $password .= $random_character;
    }

    return $password;

}

if (isset($_GET['lenght'])){
    $result = password_generator($_GET['lenght']);
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
        <div class="container d-flex justify-content-center align-items-center flex-column">

            <!-- Alert -->
            <?php if(isset($result)) : ?>
            <div class="alert alert-info col-7">
            <?= $result ?>
            </div>
            <?php endif ?>

            <!-- Form -->
            <div class="form-container col-1">
                <form action="" method="GET">
                    <!-- Input -->
                    <div class="password-form  mb-3 d-flex justify-content-center align-items-center ">
                        
                        <div class="div">
                            <p class="mx-4">Lunghezza Password: </p>
                        </div>
                        <div class="input-container">
                            <input type="number" class="form-control" name="lenght" id="lenght">
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