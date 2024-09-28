<?php
function getTasxs()
{
    if (file_exists("todo.json")) {
        // get content and add new tasx to it
        $jsonContent = file_get_contents("todo.json");
        $Array = json_decode($jsonContent, true);
    } else {
        $Array = [];
    }

    return $Array;

}