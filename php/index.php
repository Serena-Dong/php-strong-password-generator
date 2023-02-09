<?php
// Function 
include './partials/function.php';

// 
if (isset($_GET['lenght'])){
    $result = password_generator($_GET['lenght']);

    if ($result === true ) header('Location: ./partials/success.php');
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
            <?php if($result === false) : ?>
            <div class="alert alert-info col-7">
                <p>Inserisci un valore valido</p>
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