<?php 

// Search on settype()

echo 5 + (int) '5 lessons'; // 10 (integer)
echo '<br>';

echo 5 + (integer) '5 lessons'; // 10 (integer)
echo '<br>';

echo 5 + ( integer ) '5 lessons'; // 10 (integer)
echo '<br>';

echo 10 + (int) 15.5 ; //25
echo '<br>';
echo gettype(10 + (int) 15.5); // integer
echo '<br>';

echo 10.5 + 10.5 ; // 21
echo '<br>';
echo gettype(10.5 + 10.5) ; // double 
echo '<br>';
echo '<br>';

echo (int) 10.5 + 10.5 ; // 20.5
echo '<br>';
echo gettype((int) 10.5 + 10.5 ) ; // doule 
echo '<br>';

echo (int) 10.5 + (int) 10.5 ; // 20
echo '<br>';
echo gettype((int) 10.5 + (int) 10.5 ) ; // integer 
echo '<br>';

echo (int) (10.5 +  10.5) ; // 21
echo '<br>';
echo gettype((int) (10.5 +  10.5) ) ; // integer 
echo '<br>';

?>