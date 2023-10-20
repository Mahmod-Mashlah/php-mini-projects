<?php 

echo 1+'2'; //3
echo '<br>';
echo gettype(1+"2"); // integer
echo '<br>';


echo True ; //1
echo '<br>';
echo gettype(True); //Boolean
echo '<br>';

echo true+true ; //2
echo '<br>';
echo gettype(true+true);
echo '<br>';

 echo 5 + "5 lessons" ; // 10 and give a simple warning (not Error) : non-numeric value encountered
 echo '<br>';
 echo gettype(5 + "5 lessons");
 echo '<br>';

 echo 10 + 15.5 ; //25.5
 echo '<br>';
 echo gettype(10 + 15.5); // double
 echo '<br>';

?>