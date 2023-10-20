<?php
echo("hi everyone");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello php </title>
</head>
<body>
            <img src="" alt="" height="500 px" width="100xp ">
      <h1><b> hi php1 </b></h1> 
        <p>

        <?php 
        
        echo("<h1> hi everyone </h1> ");

        $x = 'hello';
        $y = 22 ;
        $z = false ;
        $w = 3.14 ;


        //  dont forget $ for variables
        /**
         use _ , abc... ,
         not start with numbers 
         case sensetive 
         not reserved words

         

         */

            echo $x;
            echo " I am ";
            echo $y ; 
            echo ' years old'  ;


        
        ?>
        </p>
        <!--  -->
</body>
</html>











<!-- //////////////////////////////////////////////////////////////////////////////// -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hi 2</title>
</head>
<body>
    

    <?php 
    
        echo ' hey there ! testing echo here';
        echo '<br>';
        echo 'this','is','a','broken','sentence !' ;
        echo '<br>';
        echo 'This is a test
         for printing with 
         multi text' ;
         echo '<br>';

         $str = 'I am using a variable';
         echo $str ;
         echo '<br>';
         $name = 'Roduan' ;
         echo '<br>';
         echo "1. I am $name Kareem Aldeen ";        
         echo '<br>';
         echo '2. I am $name Kareem Aldeen ';
         echo '<br>';
         echo "3. I am $nameKareem Aldeen "; // Error
         echo '<br>';
         echo "4. I am {$name}Kareem Aldeen ";   
         echo '<br>';
         echo '5. Hello, I\'m escaping a single quotation mark (\')' ;
         echo '<br>';
        /*
            variables types :
                1. Scaler Types :
                boolean : true , false 
                int
                float 
                string
                2. Compound Types :
                arrays & objects ;
                3. Special Types :
                resource & NULL & others (like : undefined)
        */

    ?>

</body>
</html>