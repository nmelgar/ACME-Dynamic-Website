<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ACME | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/acme/css/style.css">
</head>

</html>
<?php

/**
 * This is my helper function file. Do not confuse with the model functions.
 * These functions do not deal with the database as the MODEL folder files
 */

// check email
function checkEmail($clientEmail)
{
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($clientPassword)
{
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
    return preg_match($pattern, $clientPassword);
}

// Build a navigation bar using the $categories array
// This will build the navigation list for all controllers
function navList()
{
    $categories = getCategories();
    $navList = '<ul>';
    $navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
    foreach ($categories as $category) {
        $navList .= "<li><a href='/acme/products/index.php?action=category&categoryName=" . urlencode($category['categoryName']) . "' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
    }
    $navList .= '</ul>';

    return $navList;
}

// Build the categories select list 
function buildCategoryList($categories)
{
    $catList = '<select name="categoryId" id="categoryList">';
    $catList .= "<option>Choose a Category</option>";
    foreach ($categories as $category) {
        $catList .= "<option value='$category[categoryId]'>$category[categoryName]</option>";
    }
    $catList .= '</select>';
    return $catList;
}

function buildProductsDisplay($products)
{
    $pd = '<ul id="prod-display">';
    foreach ($products as $product) {
        $pd .= '<li>';
        $pd .= "<img src='$product[invThumbnail]' alt='Image of $product[invName] on Acme.com'>";
        $pd .= '<hr>';
        $pd .= "<h2>$product[invName]</h2>";
        $pd .= "<span>$product[invPrice]</span>";
        $pd .= '</li>';
    }
    $pd .= '</ul>';
    return $pd;
}

//Details for a sigle product
function buildProductDisplay($productInfo)
{
    $prodinfo = $productInfo;
    $dd = '<ul id="detail-display">';
    $dd .= '<li>';
    $dd .= "<img src='$prodinfo[invImage]' alt='Image of $prodinfo[invName] product on Acme.com'>";
    $dd .= '</li>';
    $dd .= '<li id="detail-description">';
    $dd .= '<ul>';
    $dd .= "<li id='detailDesc'> $prodinfo[invDescription]</li>";
    $dd .= "<li id='detailVendor'>$prodinfo[invVendor]</li>";
    $dd .= "<li id='detailStyle'>$prodinfo[invStyle]</li>";
    $dd .= "<li id='detailWeight'>$prodinfo[invWeight]</li>";
    $dd .= "<li id='detailSize'>$prodinfo[invSize]</li>";
    $dd .= "<li id='detailLocation'>$prodinfo[invLocation]</li>";
    $dd .= "<li id='detailStock'>$prodinfo[invStock]</li>";
    $dd .= "<li id='detailPrice'>$prodinfo[invPrice]</li>";
    $dd .= '</ul>';
    $dd .= '</li>';
    $dd .= '</ul>';
    return $dd;
}
