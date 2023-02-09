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

    session_start();
    $_SESSION['password'] = $password;


    return true;

}
?>