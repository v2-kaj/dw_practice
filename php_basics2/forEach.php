<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php 

        $details =Array("Ron", 20,6, True, 3.3, "Male");
        foreach($details as $detail){
            echo "<li>".$detail."</li>";
        }

    ?>
    </ul>

    <ul>
    <?php 
        $users=Array("name"=>"Ron", "age"=>20, "knows_php"=>True, "gender"=>"Male");
        foreach($users as $user){
            echo "<li>".$user."</li>";
        }
        
    ?>
    </ul>
    
    
</body>
</html>