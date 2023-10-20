<?php 

$name = "Osama" ;

// Heredoc

echo <<< "Here"
Hello php 
Special Character $$$ ''' """ \\\\
My name is $name 
Here;  // ouput is : Hello php Special Character $$$ ''' """ \\ My name is Osama
echo'<br>';
// Nowdoc

echo <<< 'Now'
Hello php 
Special Character $$$ ''' """ \\\\
My name is $name 
Now;   // ouput is : Hello php Special Character $$$ ''' """ \\\\ My name is $name

echo '<br>';

echo <<< "ulExample"
<ul>
<li>$name</li>
<li>$name</li>
<li>$name</li>
</ul>

ulExample;

?>