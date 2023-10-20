<?php 

var_dump((bool) "");  // (bool) (false)
echo'<br>' ;

var_dump((bool) array());  // (bool) (false)
echo'<br>' ;

var_dump((bool) []);  // (bool) (false)
echo'<br>' ;

var_dump((bool) 0);  // (bool) (false)
echo'<br>' ;

var_dump((bool) "0");  // (bool) (false)
echo'<br>' ;

var_dump((bool) "Elzero");  // (bool) (true)
echo'<br>' ;

var_dump((bool) array(1));  // (bool) (true)
echo'<br>' ;

var_dump((bool) [1]);  // (bool) (true)
echo'<br>' ;

var_dump((bool) 100);  // (bool) (true)
echo'<br>' ;

var_dump((bool) -100);  // (bool) (true)
echo'<br>' ;

var_dump((bool) 10.5);  // (bool) (true)
echo'<br>' ;

var_dump((bool) -10.5);  // (bool) (true)
echo'<br>' ;

?>