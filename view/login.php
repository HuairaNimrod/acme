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
                <h2> ACME Login </h2>
                <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                    ?>
                <form method="post" action="/acme/accounts/">
                     <p>Email</p>
                         <input type="email" 
                                name="clientEmail" 
                                    id="clientEmail" 
                                    <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?>
                                    required>
                             

                     <p>Password:</p>
                        <span class="input_tip">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                        <input 
                            type="password" 
                            placeholder="Enter Password" 
                            pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            name="clientPassword" 
                            id="clientPassword"
                            required >
                        
                     <button class="button_login" type="submit" name="submit" value="LoginEnter">Login</button>
                     <input type="hidden" name="action" value="LoginEnter">
                  </form> 
               </div>
                
                
               <div class="member_box">
                   <h2>Not a member?</h2>
                   
                   <button class="button_create" onclick="window.location.href='/acme/accounts/index.php?action=Registration'">Create an Account</button>
               </div> 
               
            </div>
       <hr>
        
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