<?php

include 'functions.php';


$nameTodo = $_POST["todo_name"] ?? '';
$nameTodo = trim($nameTodo);
if ($nameTodo) {

    $jsonContentArray = getTasxs();

    $jsonContentArray[$nameTodo] = ["completed" => false];

    // convert array t ojson object to add tasx in my file
    file_put_contents("todo.json", json_encode($jsonContentArray));
}

header("location: index.php");