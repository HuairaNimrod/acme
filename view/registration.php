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
           <div class="login_content">
               
               <div class="login_box">   
                   <?php 
                        if(isset($message)){
                            echo $message;
                        }
                   ?>
                   
                   <form method="post" action="/acme/accounts/index.php">
                         <p>First name:<p>
                             <input type="text"  
                                    name="clientFirstname" 
                                    id="clientFirstname" 
                                    <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?>
                                    required>
                             
                         <p>Last name:</p>
                             <input type="text" 
                                    name="clientLastname" 
                                    id="clientLastname" 
                                    <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?>
                                    required>
                             
                         <p>Email:</p>
                             <input type="email" 
                                    name="clientEmail" 
                                    id="clientEmail" 
                                    <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?>
                                    required>
                             
                         <p>Password:</p>
                         <span class="input_tip">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                             <input type="password" 
                                   name="clientPassword" 
                                   id="clientPassword" 
                                   required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            >
                          
                         <button class="button_form" type="submit" name="submit" value="register">Submit</button> 
                         
                          <!-- Add the action name - value pair-->
                          <input type="hidden" name="action" value="register">
                   </form> 
               </div>
           </div>  
        
        <footer>
            <div class="footer">
                    <p> &copy; ACME, All rights reserved. </p>
                    <p>All images used are believed to be in "Fair Use". Please notify the author if any are not and they will be removed.</p>
                    <p>Last Updated: 24 January, 2019</p> 
            </div>
        </footer>
        </div>
    </body>
</html>