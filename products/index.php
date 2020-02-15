<?php
/*
* Products Controller
*/

// Get the database connection file
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the products model for use as needed
require_once '../model/products-model.php';


// Get the array of categories
$categories = getCategories();

// var_dump($categories);
// echo '<pre>' . print_r($categories, true) . '</pre>';
// exit;

// Build a navigation bar using the $categories array
$navList = '<ul>';
$navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
 $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

//  echo $navList;
//  exit;

// Build a category dropdown list 
$catList = '<select>';
$catList .= '<option>Select Category</option>';
foreach ($categories as $category) {
 $catList .= '<option value="' . $category['categoryId']. '">' . $category['categoryName'] . '</option>';
}
$catList .= '</select>';


//Action
$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action){
  case 'newCat':
    include '../view/new-cat.php';
    break;

    case'addCat':
      $categoryName = filter_input(INPUT_POST, 'categoryName');

      if(empty($categoryName)){
        $message = '<p>*Please provide information for all empty form fields.*</p>';
        include '../view/new-cat.php';
        exit;
      }
    
      // Send the data to the model
      $regOutcome = newCategory($categoryName);
      
      // Check and report the result
      if($regOutcome === 1){
        header("location:/acme/products/index.php");
        exit;
      } else {
        $message = "<p>Sorry $categoryName, but there wasn't possible to add a new category</p>";
        include '../view/new-cat.php';
        exit;
      }
    

    break;

    case 'newProduct':
      include '../view/new-product.php';

    break;

    case'newProduct':
      $invName = filter_input(INPUT_POST, 'invName');
      $invDescription = filter_input(INPUT_POST, 'invDescription');
      $invImage = filter_input(INPUT_POST, 'invImage');
      $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
      $invPrice = filter_input(INPUT_POST, 'invPrice');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');
      $invName = filter_input(INPUT_POST, 'invName');

      if(empty($categoryName)){
        $message = '<p>*Please provide information for all empty form fields.*</p>';
        include '../view/new-cat.php';
        exit;
      }
    
      // Send the data to the model
      $regOutcome = newCategory($categoryName);
      
      // Check and report the result
      if($regOutcome === 1){
        header("location:/acme/products/index.php");
        exit;
      } else {
        $message = "<p>Sorry $categoryName, but there wasn't possible to add a new category</p>";
        include '../view/new-cat.php';
        exit;
      }
    

    break;

 
 default:
  include '../view/product-mgmt.php';
}