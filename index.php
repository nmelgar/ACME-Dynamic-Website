<?php
/*
* Acme Controller
*/

// Get the database connection file
require_once 'library/connections.php';
// Get the acme model for use as needed
require_once 'model/acme-model.php';

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

//Action
$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action){
 case 'something':
  
  break;
 
 default:
  include 'view/home.php';
}