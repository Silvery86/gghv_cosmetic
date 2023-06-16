<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
     foreach ($data["product"] as $product_item)
    {
    ?>
    <h1><?=$product_item['name'] ?></h1>
    <?php
    } 
    ?>
</body>
</html>