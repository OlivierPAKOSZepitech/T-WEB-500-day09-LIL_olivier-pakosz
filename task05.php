<?php

function form_is_submitted()
{
    return isset($_POST["submit"]);
}

function whoami()
{
    $format = [
        "pge" => "PGE (Programme Grande Ecole",
        "msc" => "MSc Pro",
        "coding" => "Coding Acadamy",
        "wac" => "Web@cademy",
    ];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $curriculum = $_POST["curriculum"];
    if ($name == "" && ($age == "" || $age == null))
        $text = "Hi, I have no name.";
    else if ($age == "" || $age == null)
        $text = "Hi, my name is $name.";
    else if ($name == "" || $name == null)
        $text = "Hi, I have no name and I'm $age years old.";
    else   $text = "Hi, my name is $name and I'm $age years old.";

    if ($curriculum != "" && $curriculum != null)
        $text .= " I'm a student of $format[$curriculum].";
    echo $text;
}
