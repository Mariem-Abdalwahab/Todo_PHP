<?php

include 'functions.php';

$taskName = $_POST['check'];
echo $taskName;
$jsonContentArray = getTasxs();

$jsonContentArray[$taskName]["completed"] = !$jsonContentArray[$taskName]["completed"];

file_put_contents('todo.json', json_encode($jsonContentArray));

header("location: index.php");