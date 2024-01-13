<!-- we are going to create a html page here that calls the properties of the class-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call the class</title>
</head>
<body>
    <?php 
    //we first call the require
    require_once 'Car.php';

    //we are going to call the properties of the other class by requiring the class page
    $car = New Car("Toyota", "green");
    //we are setting the color
    $car->setColor("silver");
    //we are going to print the color which is going to be color green
    echo $car->getColor();

    $car->setBrand("Toyota");
    //we are going to print the color which is going to be color green
    echo "<br>";
    echo $car->getBrand();

    
    
    
    
    ?>
    
</body>
</html>