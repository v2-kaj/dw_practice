<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>    
    </head>
    <body>
        <form action="" method="POST">
            <label for="My name">My Name</label>
            <br>
            <input type="text" name="my_name"/>
            <br><br>
            <input type="submit">
        </form>
        
        <h1>
            <?php 
            $name = $_POST["my_name"];
            echo "Hello ".$name;
        ?>
        </h1>
    </body>
</html>