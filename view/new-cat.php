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
                <h1> New Category </h1>
                
                <div class="product_box">
                    
                    <?php 
                        if(isset($messageNewCategory)){
                            echo $messageNewCategory;
                        }
                   ?>
                    
                 <form method="post" action="/acme/products/index.php">
                         <p>New category Name:<p>
                             <input name="categoryName" id="categoryName" type="text">
                             
                             <br><br>
                             
                         <button class="button_form" type="submit" name="submit" value="registerCategory">Add Category</button> 
                         <!--   <input type="submit" name="submit" id="regbtn" value="register">  -->                                          
                        
                          <!-- Add the action name - value pair-->
                          <input type="hidden" name="action" value="registerCategory">
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