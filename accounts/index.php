<?php

/*
    Accounts controller
 */

//Create or acces a Session
session_start();

                    // Get the database connection file
require_once '../library/connections.php'; 
                    // Get the acme model for use as needed
require_once '../model/acme-model.php';
                    // Get the account model
require_once '../model/accounts-model.php';
                    //get the functions library
require_once '../library/functions.php';


// Get the array of categories
$categories = getCategories();
$navigationList = newNavBar($categories);


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
$action = filter_input(INPUT_GET, 'action');
}

switch ($action){

case 'Login':
        include '../view/login.php';
        break;
case 'Registration':
        include '../view/registration.php';
        break;
case 'register':
    // Filter and store the data
        $clientFirstname = filter_input(INPUT_POST, 'clientFirstname', FILTER_SANITIZE_STRING);
        $clientLastname = filter_input(INPUT_POST, 'clientLastname', FILTER_SANITIZE_STRING);
        $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
        $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_STRING);
        //check if the email exists
        
        $existingEmail= checkExistingEmail($clientEmail);
        if($existingEmail){
            $message = '<p class="warning">Email already taken, choose another</p>';
            include '../view/registration.php';
            exit;
        }
        
        //back-end form validation
            $clientEmail = checkEmail($clientEmail);
            $checkPassword = checkPassword($clientPassword);
        

        // Check for missing data
        if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($checkPassword)){
         $message = '<p class="warning">Please provide information for all empty form fields.</p>';
         include '../view/registration.php';
         exit; 
        }
        // Hash the checked password
        $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
        // Send the data to the model
        $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);
        
        // Check and report the result
        if($regOutcome === 1){
           
                //create a coockie
                setcookie('firstname',$clientFirstname,strtotime('+1 year'),'/');
            
                //$message = "<p class='success' >Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
                $_SESSION['message'] = "<p class='success' >Thanks for registering $clientFirstname. Please use your email and password to login.</p>";      

                //include '../view/login.php';
                header('Location: /acme/accounts/?action=Login');

          exit;
        } else {
            $message = '<p class="warning">Sorry $clientFirstname, but the registration failed. Please try again.</p>';
            include '../view/registration.php';
            exit;
}
        break;
        
case 'LoginEnter':
        // Filter and store the data
            $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_STRING);
        // Validate the data entered   
            $clientEmail = checkEmail($clientEmail);
            $passwordCheck = checkPassword($clientPassword);
         
            
          // Check for missing data   
         if( empty($clientEmail) || empty($passwordCheck)){
         $message = '<p class="warning">Email or Password required!</p>';
         include '../view/login.php';
         exit; 
        }
        
            // A valid password exists, proceed with the login process
            // Query the client data based on the email address
            $clientData = getClient($clientEmail);
            // Compare the password just submitted against
            // the hashed password for the matching client
            $hashCheck = password_verify($clientPassword, $clientData['clientPassword']);
            // If the hashes don't match create an error
            // and return to the login view
            if(!$hashCheck) {
              $message = '<p class="warning">Please check your password and try again.</p>';
              include '../view/login.php';
              exit;
            }
            // A valid user exists, log them in
            $_SESSION['loggedin'] = TRUE;
            // Remove the password from the array
            // the array_pop function removes the last
            // element from an array
            array_pop($clientData);
            // Store the array into the session
            $_SESSION['clientData'] = $clientData;
            // Send them to the admin view
            include '../view/admin.php';
            exit;
         
    break;
    
    case 'Logout':
            session_destroy();
            header('Location: /acme/');
        
         setcookie('firstname', '', strtotime('-1 year'), '/');
         exit;
        break;
default:
}