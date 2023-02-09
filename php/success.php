<?php
session_start();
if(empty($_SESSION['password'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Finale</title>

        <!-- BS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="alert alert-info">
                    La password generata è: <strong> <?= $password ?> </strong>
                </div>
            </div>
        </div>
    </div>
</body>
</html>