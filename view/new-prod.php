<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
 header('location: /acme/');
 exit;
}
?>
<?php
 //build a category form list
        $catList = "<select id='categoryId' name='categoryId'>";
        $catList .= "<option selected disabled>Select a category</option>";
        foreach ($categories as $category) {
          $catList .= "<option id='$category[categoryId]' value='$category[categoryId]'";
          if(isset($categoryId)){
            if($category['categoryId'] === $categoryId){
              $catList .= ' selected ';
            }
          }
          $catList .= ">$category[categoryName]</option>";
        }
        $catList .='</select>';
        
        
//add protection to the view
        if ($_SESSION['clientData']['clientLevel'] < 2) {
         header('location: /acme/');
         exit;
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
                <h1> Add Product </h1>
                <p>Add a new product below. All fields are required!</p>
                
                <div class="product_box">   
                   <?php 
                        if(isset($messageNewProduct)){
                            echo $messageNewProduct;
                        }
                   ?>
                   
                   <form method="post" action="/acme/products/index.php">
                       <p>Category</p> 
                                  <?php echo $catList; ?>
                           
                       <p>Product Name</p>
                             <input 
                                 type="text" 
                                 name="invName" 
                                 id="invName"
                                 <?php if(isset($invName)){echo "value='$invName'";}  ?>
                                 required >
                             
                       <p>Product Description</p>
                            <textarea 
                                  rows="5" cols="40"
                                 name="invDescription" 
                                 id="invDescription"
                                     required ><?php if(isset($invDescription)){echo $invDescription;}  ?></textarea>
                             
                       <p>Product Image(Path to image)</p>
                            <input 
                                type="text" 
                                name="invImage" 
                                id="invImage"
                                <?php if(isset($invImage)){echo "value='$invImage'";}  ?>
                                required >
                            
                            <!--/Applications/XAMPP/xamppfiles/htdocs/acme/images/no-image.png-->
                             
                       <p>Product Thumbnail(path to thumbnail)</p>
                             <input 
                                 type="text" 
                                 name="invThumbnail" 
                                 id="invThumbnail"
                                 <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  ?>
                                 required >
                             
                       <p>Product Price</p>
                             <input 
                                 type="number" 
                                 name="invPrice" 
                                 id="invPrice"
                                 <?php if(isset($invPrice)){echo "value='$invPrice'";}  ?>
                                 required >
                             
                       <p>Product Stock</p>
                            <input 
                                type="number" 
                                name="invStock" 
                                id="invStock"
                                <?php if(isset($invStock)){echo "value='$invStock'";}  ?>
                                required >
                            
                       <p>Product Size</p>
                            <input 
                                type="number" 
                                name="invSize" 
                                id="invSize"
                                <?php if(isset($invSize)){echo "value='$invSize'";}  ?>
                                required >
                             
                       <p>Product Weight</p>
                             <input 
                                 type="number" 
                                 name="invWeight" 
                                 id="invWeight"
                                 <?php if(isset($invWeight)){echo "value='$invWeight'";}  ?>
                                 required >
                             
                       <p>Product Location</p>
                            <input 
                                type="text" 
                                name="invLocation" 
                                id="invLocation"
                                <?php if(isset($invLocation)){echo "value='$invLocation'";}  ?>
                                required >
                             
                       <p>Product Vendor</p>
                            <input 
                                type="text" 
                                name="invVendor" 
                                id="invVendor"
                                <?php if(isset($invVendor)){echo "value='$invVendor'";}  ?>
                                required >
                            
                       <p>Product Style</p>
                            <input 
                                type="text" 
                                name="invStyle" 
                                id="invStyle"
                                <?php if(isset($invStyle)){echo "value='$invStyle'";}  ?>
                                required >
                            
                       <button class="button_form" type="submit" name="submit" value="registerProduct">Submit</button> 
                         
                       
                        <input type="hidden" name="action" value="registerProduct">
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