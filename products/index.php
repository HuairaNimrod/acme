<?php

//Create or acces a Session
session_start();

                    // Get the database connection file
require_once '../library/connections.php';
                    // Get the acme model for use as needed
require_once '../model/acme-model.php';
                    // Get the products model
require_once '../model/products-model.php';
                    //get the functions library
require_once '../library/functions.php';

// Get the array of categories
$categories = getCategories();
$navigationList = newNavBar($categories);


 
 
// //build a category form list
//$catList = "<select id='categoryId' name='categoryId'>";
//$catList .= "<option selected disabled>Select a category</option>";
//foreach ($categories as $category) {
//  $catList .= "<option  value='$category[categoryId]'>
//  $category[categoryName]</option>";
//  }
//$catList .='</select>';



 
 
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
$action = filter_input(INPUT_GET, 'action');
}

switch ($action){
case 'NewCategory':
        include '../view/new-cat.php';
        break;
case 'NewProduct':
        include '../view/new-prod.php';
        break;
    
case 'registerCategory':
        // Filter and store the data
        $categoryName = filter_input(INPUT_POST, 'categoryName',FILTER_SANITIZE_STRING);
        
        // Check for missing data
        if(empty($categoryName)){
         $messageNewCategory = '<p class="warning">Please enter a category name!</p>';
         include '../view/new-cat.php';
         exit; 
        }
    
        // Send the data to the model
         $regOutcome = createCategory($categoryName);
        
        // Check and report the result
        if($regOutcome === 1){
         header('location: /acme/products/index.php');
         exit;
        } else {
         $messageNewCategory = "<p>Sorry, category no created</p>";
         include '../view/new-cat.php';
         exit;
        }
    
        break;
        
        
        
 case 'registerProduct':

      // Filter and store the data
     
        $invName = filter_input(INPUT_POST, 'invName',FILTER_SANITIZE_STRING);
        $invDescription = filter_input(INPUT_POST, 'invDescription',FILTER_SANITIZE_STRING);
        $invImage = filter_input(INPUT_POST, 'invImage',FILTER_SANITIZE_STRING);
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail',FILTER_SANITIZE_STRING);
        $invPrice = filter_input(INPUT_POST, 'invPrice',FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invStock = filter_input(INPUT_POST, 'invStock',FILTER_SANITIZE_NUMBER_INT);
        $invSize = filter_input(INPUT_POST, 'invSize',FILTER_SANITIZE_NUMBER_INT);
        $invWeight = filter_input(INPUT_POST, 'invWeight',FILTER_SANITIZE_NUMBER_INT);
        $invLocation = filter_input(INPUT_POST, 'invLocation',FILTER_SANITIZE_STRING);
        $invVendor = filter_input(INPUT_POST, 'invVendor',FILTER_SANITIZE_STRING);
        $invStyle = filter_input(INPUT_POST, 'invStyle',FILTER_SANITIZE_STRING);
        $categoryId = filter_input(INPUT_POST, 'categoryId',FILTER_SANITIZE_NUMBER_INT);
            
        // Check for missing data
        if(empty($invName) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) ||  empty($invStock) || empty($invSize) || empty($invWeight) || empty($invLocation) || empty($invVendor) ||  empty($invStyle) || empty($categoryId)){
         $messageNewProduct = '<p class="warning">Please provide information for all empty form fields.</p>';
         include '../view/new-prod.php';
         exit; 
        }
        
     
        //send the data to the model
    $newProductOutcome = createProduct($categoryId, $invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $invVendor, $invStyle);
 
        // Check and report the result
        if($newProductOutcome === 1){
         $messageNewProduct = '<p class="success"> New product added</p>';
         include '../view/new-prod.php';
         exit;
        } else {
         $messageNewProduct = '<p class="warning">Sorry, product no created</p>';
         include '../view/new-prod.php';
         exit;
        }
        
         exit;
    
        break;
     
     
     
     
default:
include '../view/prod-mgmt.php';
}