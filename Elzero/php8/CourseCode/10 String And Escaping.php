<?php 

// nl2br();

echo 'Hello php' ;   # Hello php
echo'<br>';

echo "Hello php" ;   # Hello php
echo'<br>';

echo "Hello 'php'";   # Hello 'php'
echo'<br>';

echo 'Hello "php"';   # Hello "php"
echo'<br>';

echo 'Hello \'php \'';   # Hello 'php '
echo'<br>';

echo "Hello \"php \"";   # Hello "php "
echo'<br>';

echo "Hello \\php\\";   # Hello \php\
echo'<br>';

echo "Hello php 
on multiple
lines";              #  Hello php on multiple lines   
echo'<br>';

echo nl2br("Hello php 
on multiple
lines");
echo'<br>';   # Hello php
              # on multiple
              # lines



?>