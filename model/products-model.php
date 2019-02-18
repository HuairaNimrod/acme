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