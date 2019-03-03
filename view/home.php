<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACME</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/mobile.css">
        <link rel="stylesheet" media="screen and (min-width: 600px)" href="css/style.css" />
       
    </head>
    <body>
        <div class="webPage">
        <header>
            <div class="leftIcon"><img src="images/site/logo.gif" alt="page logo"/></div>
            <div class="rightLink"><a href="/acme/accounts/index.php?action=Login"><img src="images/site/account.gif" alt="account logo"/>My Account </a></div>
        </header>
        
            
            <nav>
                   <?php echo $navigationList; ?>
            </nav> 
            
            
                <!-- <nav> <ul class="navigation">
                        <li ><a title="Welcome Page" class="link" href="#">Home</a></li>
                        <li ><a title="Cannon" class="link" href="#">Cannon</a></li>
                        <li ><a title="Explosives Information" class="link" href="#">Explosive</a></li>
                        <li ><a title="Misc" class="link" href="#">Misc</a></li>
                        <li ><a title="Rocket Information" class="link" href="#">Rocket</a></li>
                        <li ><a title="Trap Information" class="link" href="#">Trap</a></li>
                    </ul>
                    </nav>
                this will be erased
                -->
            
                
            <div class="content">
               <h1> Welcome to Acme!</h1>
                
                <div class="imageMain">
                    <img src="images/site/rocketfeature.jpg" alt="rocket Image" style="width:100%" >
                    
                    <div class="imageMainContainer">
                        <div>
                            <h2>Acme Rocket </h2>
                            <ul>
                                <li>Quick lighting fuse</li>
                                <li> NHTSA approved seat belts </li>
                                <li>Mobile launch stand included</li>
                            </ul>
                            <img src="images/site/iwantit.gif" alt="Button" style="width:90%">
                        </div>
                    </div>
                    <div class="recipe-grap">
                        <div class="recipe">
                            <h3>Acme Rocket Reviews</h3>
                            <ul>
                                <li>"I don't know how I ever caught roadrunners before this." &#40;4/5&#41;</li>
                                <li>"That thing was fast!" &#40;4/5&#41;</li>
                                <li>"Talk about fast delivery." &#40;5/5&#41;</li>
                                <li>"I didn't even have to pull the meat apart." &#40;4&#46;5/5&#41;</li>
                                <li>"I'm on my thirtieth one. Ilove these things!" &#40;5/5&#41;</li>
                            </ul>
                        </div>
                        <div class="featuredRecipe">
                            <h3>Featured Recipes</h3>
                                <div class="grid-container">
                                    <div class="item">

                                                <div class="recipes_box">
                                                  <img src="images/recipes/bbqsand.jpg" alt="BBQ hamburguer" >
                                                </div>
                                                <a href="#">Pulled Roadrunner BBQ</a>
                                    </div>
                                    <div class="item">    

                                                <div class="recipes_box">                                  
                                                  <img src="images/recipes/potpie.jpg" alt="Pie Image" >
                                                </div>
                                                <a href="#">Roadrunner Pot Pie</a>

                                    </div>
                                    <div class="item">    

                                                <div class="recipes_box">
                                                  <img src="images/recipes/soup.jpg" alt="Soup Image" >
                                                </div>
                                                <a href="#">Roadrunner Soup</a>

                                    </div>
                                    <div class="item">    

                                                <div class="recipes_box">
                                                  <img src="images/recipes/taco.jpg" alt="Taco Image" >
                                                </div>
                                                <a href="#">Roadrunner Tacos</a>

                                    </div>
                                </div>
                        </div>
                </div>
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