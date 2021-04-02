<?php
// Check for empty fields
if(empty($_POST['username'])      ||
   empty($_POST['password'])     ||
   !filter_var($_POST['username'],FILTER_VALIDATE_USERNAME))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$userName = strip_tags(htmlspecialchars($_POST['username']));
$password = strip_tags(htmlspecialchars($_POST['password']));