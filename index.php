<?php

//Create or acces a Session
session_start();

                    // Get the database connection file
    require_once 'library/connections.php';
                    // Get the acme model for use as needed
    require_once 'model/acme-model.php';
                    //get the functions library
    require_once 'library/functions.php';

// Get the array of categories
$categories = getCategories();
$navigationList = newNavBar($categories);



 //echo $navList;
 //exit;

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
$action = filter_input(INPUT_GET, 'action');
}

//check if the firstname cookie exits
if(isset($_COOKIE['firstname'])){
    $cookieFirstname= filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}

switch ($action){
case 'something':
break;
default:
include 'view/home.php';
}