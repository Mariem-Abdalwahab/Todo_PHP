<?php
include 'functions.php';

$taskName = $_POST['todo_name'];
print_r($_POST);
$jsonContentArray = getTasxs();

unset($jsonContentArray[$taskName]);

file_put_contents("todo.json", json_encode($jsonContentArray));

header("location: index.php");