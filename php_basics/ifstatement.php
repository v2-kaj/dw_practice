<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>    
    </head>
    <body>
        <form action="" method="POST">
            <label for="my age">My Age</label>
            <br>
            <input type="text" name="my_age"/>
            <br><br>
            <input type="submit">
        </form>
        
        <h1>
            <?php 
            $age = $_POST["my_age"];
            
            if ($age <= 17){
                echo "You cannot vote";
            }
            else{
                echo "You are eligible to vote";
            }
        ?>
        </h1>
    </body>
</html>