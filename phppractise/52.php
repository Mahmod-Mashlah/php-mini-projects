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

    // if (true) {
    //     echo "I am inside if \n";
    // }
    // else 
    // {
    //     echo "I am inside else \n " ;
    // }


    // echo "<br>" ;
    // echo " outside if ";


   /*
   $x  = 2000;

    if ($x % 2 == 0 && ($x % 4 == 0 && $x % 100 != 0)) {
        echo "yes1";
    } else
        echo "no1";

    if ($x % 400 == 0 && $x % 100 == 0) {
        echo "yes2";
    } else
        echo "no2";


    ?>

   */ 

echo "<h1 >Leap years : <br> </h1>" ;
$sum = 0 ;
   for ($i=1900; $i <=2000 ; $i++) { 
    
        if ($i % 4 == 0 && ($i % 100 != 0 || $i % 400 == 0)) {
            echo "year : ".$i ."<br>" ;
            $sum += 1 ; 
        }
   }

   echo "The sum of the years is : " .$sum . "<br>" ;
   



   ?>
</body>

</html>