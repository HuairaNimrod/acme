<?php

                    // Get the database connection file
require_once '../library/connections.php';
                    // Get the acme model for use as needed
require_once '../model/acme-model.php';
                    // Get the products model
require_once '../model/products-model.php';

// Get the array of categories
$categories = getCategories();
//var_dump($categories);
//exit;

// Build a navigation bar using the $categories array
 $navList = '<ul class="navigation">';
 $navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
 foreach ($categories as $category) {
  $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
 }
 $navList .= '</ul>';

 //echo $navList;
 //exit;
 
 
 //build a category form list
$catList = "<select id='categoryId' name='categoryId'>";
$catList .= "<option selected disabled>Select a category</option>";
foreach ($categories as $category) {
  $catList .= "<option id='$category[categoryId]' value='$category[categoryId]'";
  if(isset($categoryId)){
    if($category['categoryId'] === $categoryId){
      $catList .= ' selected ';
    }
  }
  $catList .= ">$category[categoryName]</option>";
}
$catList .='</select>';
 
 
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
        $categoryName = filter_input(INPUT_POST, 'categoryName');
        
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
     
        $invName = filter_input(INPUT_POST, 'invName');
        $invDescription = filter_input(INPUT_POST, 'invDescription');
        $invImage = filter_input(INPUT_POST, 'invImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invSize = filter_input(INPUT_POST, 'invSize');
        $invWeight = filter_input(INPUT_POST, 'invWeight');
        $invLocation = filter_input(INPUT_POST, 'invLocation');
        $invVendor = filter_input(INPUT_POST, 'invVendor');
        $invStyle = filter_input(INPUT_POST, 'invStyle');
        $categoryId = filter_input(INPUT_POST, 'categoryId');
            
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