<?php
<<<<<<< HEAD
    if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /acme/');
    exit;
=======
if ($_SESSION['clientData']['clientLevel'] < 2) {
 header('location: /acme/');
 exit;
>>>>>>> fffaf6c8620be67f9b92616bb7c359d38fa9730d
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACME</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/mobile.css">
        <link rel="stylesheet" media="screen and (min-width: 600px)" href="../css/style.css" />
       
    </head>
    <body>
        <div class="webPage">
        <header>
            <div class="leftIcon"><img src="../images/site/logo.gif" alt="page logo"/></div>
            <div class="rightLink"><a href="/acme/accounts/index.php?action=Login"><img src="../images/site/account.gif" alt="account logo"/>My Account </a></div>
        </header>
        
            
            <nav>
                   <?php echo $navigationList; ?>
            </nav> 
            <div class="content">
                <h1> Product Management </h1>
                
                <p>Welcome to the product management page. Please choose and option below:</p>
                <ul>
                    
                    <li><a href='/acme/products/index.php?action=NewCategory' title='View the new category page'>create a new category</a></li>
                    <li><a href='/acme/products/index.php?action=NewProduct' title='View the new product page'>create a new product</a></li>
                    
                 
                </ul>
                
<<<<<<< HEAD
                <?php
                    if (isset($messageDefault)) {
                     echo $messageDefault;
                    } if (isset($prodList)) {
                     echo $prodList;
                    }
                 ?>
=======
                
                <?php
                    if (isset($message)) {
                     echo $message;
                    } if (isset($prodList)) {
                     echo $prodList;
                    }
                  ?>
>>>>>>> fffaf6c8620be67f9b92616bb7c359d38fa9730d
                
                <hr>
                
            </div>
            
        
        <footer>
            <div class="footer">
                    <p> &copy; ACME, All rights reserved. </p>
                    <p>All images used are beleived to be in "Fair Use". Please notify the author if any are not and they will be removed.</p>
                    <p>Last Updated: 24 January, 2019</p> 
            </div>
        </footer>
        </div>
    </body>
</html>