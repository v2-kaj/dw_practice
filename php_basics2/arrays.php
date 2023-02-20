<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $details =Array("Ron", 20,6, True, 3.3, "Male");
    for($i=0;$i<count($details);$i++){
        echo $details[$i]."<br>";
    }

    ?>
    
</body>
</html>