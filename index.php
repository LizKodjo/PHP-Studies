<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="country">Enter a country</label><br>
        <input type="text" name="country" id="country"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php





$capitals = array(
    "USA" => "Washington DC", 
    "Japan" => "Tokyo", 
    "South Korea" => "Seoul", 
    "India" => "New Delhi"
);

$capital = $capitals[$_POST["country"]];
echo "The capital is {$capital}";







