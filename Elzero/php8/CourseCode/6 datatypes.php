<?php 

/*
====================================================
DataTypes :

= bool  => Boolean
= int   => Integer
= float => Floating Point Number || Double
= string
= array
= Other Types
= gettype() => build in function to kmow the variable's type
====================================================
*/

echo gettype(TRUE);
echo '<br>';
echo gettype(True);
echo '<br>';
echo gettype(true);
echo '<br>';
echo gettype(False);
echo '<br>';
echo gettype(100);
echo '<br>';
echo gettype(-200);
echo '<br>';
echo gettype(0);
echo '<br>';
echo gettype(70.30);
echo '<br>';
echo gettype(-60.30);
echo '<br>';
echo gettype('Elzero');
echo '<br>';
echo gettype("Elzero");
echo '<br>';
echo gettype(array("EG" => "Egypt","KSA"=>"Saudi Arabia"));
echo '<br>';
echo gettype(array("Egypt","Saudi Arabia"));
echo '<br>';
echo gettype(["Egypt","Saudi Arabia"]);
?>