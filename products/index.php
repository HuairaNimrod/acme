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

 $categoryList='<option value="none">Select a category</option>';
 foreach ($categories as $category) {
  $categoryList .= "<option value='$category[categoryName]' >$category[categoryName]</option>";
 }

 
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
default:
include '../view/prod-mgmt.php';
}