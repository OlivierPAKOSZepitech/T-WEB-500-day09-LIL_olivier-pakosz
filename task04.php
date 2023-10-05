<?php

function whoami()
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    if ($name == "" || $age == "" || $age == null)
        echo "Hi, I have no name.";    
    else if ($age == "" || $age == null)
        echo "Hi, my name is $name.";
    else if ($name == "")
        echo "Hi, I have no name and I'm $age years old.";
    else echo "Hi, my name is $name and I'm $age years old.";
}
