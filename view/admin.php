<?php
            if (!$_SESSION['loggedin']) {
                header("location: /acme/");
            }
            
    $clientFirstname = $_SESSION['clientData']['clientFirstname'];     
    $clientLastname = $_SESSION['clientData']['clientLastname'];  
    $clientEmail = $_SESSION['clientData']['clientEmail'];  
    $clientLevel = $_SESSION['clientData']['clientLevel'];  
            
            
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
            <div class="rightLink">
           <?php
                if (isset($_SESSION['loggedin'])) {
                    echo "Welcome " . $_SESSION['clientData']['clientFirstname']." ";
                    echo "<img src='/acme/images/site/account.gif'/></a>\n\t\t";
                    echo "<a href='/acme/accounts/?action=Logout'>Logout</a>";
                } else {
                    echo "<a href='/acme/accounts/?action=Login'>My Account";
                    echo "<img src='/acme/images/site/account.gif'/></a>";
                }
        ?>
                </div>
        </header>
        
            
  
            
            
            <nav>
                   <?php echo $navigationList; ?>
            </nav> 
                
            <div class="login_content">
                <h1><?php echo "$clientFirstname $clientLastname";?></h1>
                
                <ul>
                    <li>
                        First Name:<strong> <?php echo "$clientFirstname";?></strong>
                    </li>
                    <li>
                        Last Name:<strong> <?php echo "$clientFirstname";?></strong>
                    </li>
                    <li>
                        Email: <strong><?php echo "$clientEmail";?></strong>
                    </li>
                     
                    
                </ul>
                
                 <?php if($clientLevel>1){
                             echo "<a href='../products/index.php'>Controller</a>";
                        }
                        else{
                            echo"hola";
                        }
                        ?>
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