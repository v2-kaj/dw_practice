<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>    
    </head>
    <body>
       
            <?php
            $loggedin = True; 
            if ($loggedin){
                $userbalance=200;
                if($userbalance<1000){
                    echo "Insufficient funds";
                }
                else{
                    echo "Go ahead rich person. Make a withdral";

                }
            }
            else{
                echo "Login First";
            }
        ?>
        
    </body>
</html>