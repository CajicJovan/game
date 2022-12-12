<?php
//KAD JE METOD POST ($_POST["firstName"])
// $_POST["lastName"] = ""
$data= [];
$data[] = $firstName = checkIfSet($_POST["firstName"]); // true ako je proslo, znaci nije prazna
$data[] = $lastName = checkIfSet($_POST["lastName"]); // true ako je proslo, znaci nije prazna
$data[] = $email = checkIfSet($_POST["email"]); // true ako je proslo, znaci nije prazna
function checkIfSet($input){
    return isset($input) && !empty($input) ? $input : $input." can not be null"; 
}