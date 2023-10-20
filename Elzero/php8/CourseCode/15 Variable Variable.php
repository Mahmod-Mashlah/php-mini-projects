<?php 

$a = "Osama";
$$a = "Elzero";
$$$a ="School" ;

echo '1 '.$a;
echo'<br>';

echo '2 '.$$a;
echo'<br>';

echo '3 '.$Osama;
echo'<br>';

echo '4 '.$$$a ;
echo'<br>';
echo '5 '.$Elzero ;

echo "<br>" ;
echo '6 '."$$a";  // it will print $Osama
echo "<br>" ;
echo '7 '."${$a}";  // it will print $$a = Elzero 
echo "<br>"  ;
echo '7 '."${$$a}";  // it will print $$$a = School 

/**
 * 1 Osama
2 Elzero
3 Elzero
4 School
5 School
6 $Osama
7 Elzero
 */
?>