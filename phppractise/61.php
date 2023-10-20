<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 61</title>
</head>

<body>

    <?php

    // foreach ($array as $key  ) {
    //     # code...
    // }


    // foreach ($variable as $key => $value) {
    //     # code...
    // }


    // for ($i=0; $i < sizeof($array) ; $i++) { 
    //     # code...
    // }

    // $arr = ["h","1","1.5"];

    // count($arr);

    // asssosiative array=>

    //  array_keys($arr)  ;
    //  $arr[$keys[$i]] ;     



    $food = [

        ['name' => 'pizza', "type"   => "pastry"],
        ["name" => "Shawrma", "type"  => "chiken"],
        ["name" => "Falafel", "type" => "sandwiches"]

    ];

    // $size = count($food);

    // $size = sizeof($food);

    // for ($i=0; $i < $size; $i++) { 

    //     foreach ($food[$i] as $key => $value) {

    //         echo $key , " : " , $value , "<br>" ;
    //     }
    //     echo "<br>" ;

    // }

    //    $ar = ["A" => "a" , "B" => "b", "C" => "c", "D" => "d"];

    //   foreach ($ar as $key => $value) {

    //         echo "key  : " . $key ."<br>" . " value : " . $value . "<br>" ;

    //         echo "<br>" ;
    //   }


    //  print_r($ar);




    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

        asort($ceu);
        //ksort ;

    foreach ($ceu as $key => $value) {

        echo "The capital of " . $key . " is : "  . $value . "." . "<br>";

    }































    ?>

</body>

</html>