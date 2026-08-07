<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $website = trim($_POST["website"] ?? "");
    $comment = trim($_POST["comment"] ?? "");
    $gender = trim($_POST["gender"] ?? "");


    // Name Validation
    if(!empty($name))
    {
        // echo "Name: ".$name;
    }
    else
    {
        echo "Name is required<br>";
    }


    // Email Validation
    if(!empty($email))
    {
        // echo "Email: ".$email;
    }
    else
    {
        echo "Email is required<br>";
    }


    // Website Optional
    if(!empty($website))
    {
        // echo "Website: ".$website;
    }


    // Comment Optional
    if(!empty($comment))
    {
        // echo "Comment: ".$comment;
    }


    // Gender Validation
    if(!empty($gender))
    {
        // echo "Gender: ".$gender;
    }
    else
    {
        echo "Gender is required<br>";
    }

}

?>