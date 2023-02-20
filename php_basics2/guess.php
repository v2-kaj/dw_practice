<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $num =2;
      while (true){
        if ($num!==2){
        echo "The number is not 2";
        break;
        }
        $num++;
        if($num==10){
            break;
        }
      }

    ?>
</body>
</html>