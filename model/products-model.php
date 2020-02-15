<?php

/*
* Products Model
*/

function newCategory($categoryName){
// Create a connection object using the acme connection function
$db = acmeConnect();
$sql = 'INSERT INTO categories (categoryName)
        VALUES (:categoryName)';
// Create the prepared statement using the acme connection
$stmt = $db->prepare($sql);
// The next line replace the placeholders in the SQL
// statement with the actual values in the variables
// and tells the database the type of data it is
$stmt->bindValue(':categoryName', $categoryName, PDO::PARAM_STR);
// Insert the data
$stmt->execute();
// Ask how many rows changed as a result of our insert
$rowsChanged = $stmt->rowCount();
// Close the database interaction
$stmt->closeCursor();
// Return the indication of success (rows changed)
return $rowsChanged;

}

function newProduct($categoryId, $invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $invVendor, $invStyle) {
        // Create a connection object using the acme connection function
        $db = acmeConnect();
        // SQL statement for database
        $sql = 'INSERT INTO inventory (invName, invDescription, invImage, invThumbnail, invPrice, invStock, invSize, invWeight, invLocation, categoryId, invVendor, invStyle)
               VALUES (:invName, :invDescription, :invImage, :invThumbnail, :invPrice, :invStock, :invSize, :invWeight, :invLocation, :categoryId, :invVendor, :invStyle)';
        // Create the prepared statement using the acme connection
        $stmt = $db->prepare($sql);
        // The next 12 lines replace the placeholders in the SQL
        // statement with the actual values in the variables
        // and tells the database the type of data it is
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_STR);
        $stmt->bindValue(':invName', $invName, PDO::PARAM_STR);
        $stmt->bindValue(':invDescription', $invDescription, PDO::PARAM_STR);
        $stmt->bindValue(':invImage', $invImage, PDO::PARAM_STR);
        $stmt->bindValue(':invThumbnail', $invThumbnail, PDO::PARAM_STR);
        $stmt->bindValue(':invPrice', $invPrice, PDO::PARAM_STR);
        $stmt->bindValue(':invStock', $invStock, PDO::PARAM_INT);
        $stmt->bindValue(':invSize', $invSize, PDO::PARAM_INT);
        $stmt->bindValue(':invWeight', $invWeight, PDO::PARAM_INT);
        $stmt->bindValue(':invLocation', $invLocation, PDO::PARAM_STR);
        $stmt->bindValue(':invVendor', $invVendor, PDO::PARAM_STR);
        $stmt->bindValue(':invStyle', $invStyle, PDO::PARAM_STR);
        // Insert the data
        $stmt->execute();
        // Ask how many rows changed as a result of our insert
        $rowsChanged = $stmt->rowCount();
        // Close the database interaction
        $stmt->closeCursor();
        // Return the indication of success (rows changed)
        return $rowsChanged;
    }