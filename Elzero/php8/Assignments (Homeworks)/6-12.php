<?php 

// Homework 1
echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
echo '<br>' ;
echo "<br>" ;
var_dump((int)(15.2 + 14.7 + (10.5 + 10.5))) ; // integer
echo "<br>" ;

// Homework 2 :
echo "Homework 2 <br>" ;
echo gettype(100) ;
echo "<br>" ;
var_dump( 100 ) ;
echo "<br>" ;
print_r(100);
echo "<br>" ;
// Method One
// Method Two
// Method Three => Optional



echo "<br>" ;
// Homework 3 : 

echo "Hello \"Elzero\" \\\\ \"\"\" we love \"\$\$php\" ";

// Hello "Elzero" \\ """ We Love "$$PHP"



echo "<br>" ;
// Homework 4 :
echo "<br>" ;


echo nl2br("We \n Love \n Elzero \n Web \n School");
// // Needed Output
// We
// Love
// Elzero
// Web
// School

echo "<br>" ;
// Homework 5 :
echo "<br>" ;

echo nl2br( <<<  'H'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
H);

echo "<br>" ;
// Homework 6 :
echo "<br>" ;


$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// Needed Output
// Hello \PHP\ We Love Programming

echo "<br>" ;
// Homework 7 :
echo "<br>" ;

echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");

// Needed Output
// 1
// integer


echo "<br>" ;
// Homework 8 :
echo "<br>" ;

echo'<pre>';
print_r([
    'FrontEnd' => [
        'HTML',
        'CSS' ,
        'JS' => [
                    'Viewjs'=> [2 => 'v2' ,
                                3 => 'v3' ,] ,

        'Reactjs','Svelte',                ]
        ],

    'BackEnd' => [
                    'PHP',
                    'MYSQL',
                    'Security'
    ],

    'Git' ,
    'Github',
    'Testing' => [
        'Unit Testing',
        'End To End',
        'Integration',
    ]

]);
echo'</pre>';

# End
?>