<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP Page</h1>
    
    <?php
    $color = "red";
    echo "hello World";
    echo "My car is " . $color . "<br>";//Keywords are not case sensitive, but the classes like "color" are.
    echo "My house is " . $C0LOR . "<br>";//This class will not work because this class is case sensitive. 
    echo "My boat is " . $coLOR . "<br>"; #This one too     

    ?>

</body>
</html>