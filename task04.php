<?php

function whoami()
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    if ($name == "" && ($age == "" || $age == null))
        $text = "Hi, I have no name.";
    else if ($age == "" || $age == null)
        $text = "Hi, my name is $name.";
    else if ($name == "" || $name == null)
        $text = "Hi, I have no name and I'm $age years old.";
    else   $text = "Hi, my name is $name and I'm $age years old.";
    echo $text;
}
