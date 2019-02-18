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
                   <?php echo $navList; ?>
            </nav> 
            <div class="content">
                <h1> Add Product </h1>
                <p>Add a new product below. All fields are required!</p>
                
                <div class="product_box">   
                   <?php 
                        if(isset($message)){
                            echo $message;
                        }
                   ?>
                   
                   <form method="post" action="/acme/accounts/index.php">
                       <p>Category</p> 
                           <select name="invName">
                                <?php echo $categoryList; ?>
                           </select>
                       <p>Product Name</p>
                             <input type="text" name="invName" id="invName">
                             <br>
                       <p>Product Description</p>
                             <input type="text" name="invDescription" id="invDescription">
                             <br>
                       <p>Product Image(Path to image)</p>
                            <input type="text" name="invImage" id="invImage">
                             <br>
                       <p>Product Thumbnail(path to thumbnail)</p>
                             <input type="text" name="invThumbnail" id="invThumbnail">
                             <br>
                       <p>Product Price</p>
                             <input type="number" name="invPrice" id="invPrice">
                             <br>
                       <p>Product Stock</p>
                            <input type="number" name="invStock" id="invStock">
                             <br>
                       <p>Product Size</p>
                            <input type="number" name="invSize" id="invSize">
                             <br>
                       <p>Product Weight</p>
                             <input type="number" name="invWeight" id="invWeight">
                             <br>
                       <p>Product Location</p>
                            <input type="text" name="invLocation" id="invLocation">
                             <br>
                       <p>Product Vendor</p>
                            <input type="text" name="invVendor" id="invVendor">
                             <br>
                       <p>Product Style</p>
                            <input type="text" name="invStyle" id="invStyle">
                             <br><br>
                       <button class="button_form" type="submit" name="submit" value="register">Submit</button> 
                         
                   </form> 
               </div>
                
                
                
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