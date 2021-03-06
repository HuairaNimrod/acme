<?php

/* 
 *Product Model
 */

/* this function will handle site registrations*/
function createCategory($categoryName){

    // Create a connection object using the acme connection function
 $db = acmeConnect();
            // The SQL statement
 $sql = 'INSERT INTO categories (categoryName)
     VALUE (:categoryName)';
            // Create the prepared statement using the acme connection
 $stmt = $db->prepare($sql);
            // The next four lines replace the placeholders in the SQL
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


/* this function will handle site registrations*/
function createProduct($categoryId, $invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $invVendor, $invStyle){

    // Create a connection object using the acme connection function
 $db = acmeConnect();
            // The SQL statement
 $sql = 'INSERT INTO inventory (categoryId, invName, invDescription, invImage, invThumbnail, invPrice, invStock, invSize, invWeight, invLocation, invVendor, invStyle) VALUES (:categoryId, :invName, :invDescription, :invImage, :invThumbnail, :invPrice, :invStock, :invSize, :invWeight, :invLocation, :invVendor, :invStyle)';
              // Create the prepared statement using the acme connection
 $stmt = $db->prepare($sql);
  $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_STR);
  $stmt->bindValue(':invName', $invName, PDO::PARAM_STR);
  $stmt->bindValue(':invDescription', $invDescription, PDO::PARAM_STR);
  $stmt->bindValue(':invImage', $invImage, PDO::PARAM_STR);
  $stmt->bindValue(':invThumbnail', $invThumbnail, PDO::PARAM_STR);
  $stmt->bindValue(':invPrice', $invPrice, PDO::PARAM_STR);
  $stmt->bindValue(':invStock', $invStock, PDO::PARAM_STR);
  $stmt->bindValue(':invSize', $invSize, PDO::PARAM_STR);
  $stmt->bindValue(':invWeight', $invWeight, PDO::PARAM_STR);
  $stmt->bindValue(':invLocation', $invLocation, PDO::PARAM_STR);
  $stmt->bindValue(':invVendor', $invVendor, PDO::PARAM_STR);
  $stmt->bindValue(':invStyle', $invStyle, PDO::PARAM_STR);
  //this runs the statements above and inserts the data into the database
  $stmt->execute();
  //this checks to see how many rows were added as a result of the above statements
  $rowsChanged = $stmt->rowCount();
  //this closes the interaction between the function and the database server
  $stmt->closeCursor();
  //This sends the results from the rowCount above to the controller (used in showing a success message I assume)
  return $rowsChanged;
}

<<<<<<< HEAD
=======
//function that will get basic product informations form the inventory
>>>>>>> fffaf6c8620be67f9b92616bb7c359d38fa9730d

function getProductBasics() {
 $db = acmeConnect();
 $sql = 'SELECT invName, invId FROM inventory ORDER BY invName ASC';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $products;
<<<<<<< HEAD
}
=======
}
>>>>>>> fffaf6c8620be67f9b92616bb7c359d38fa9730d
