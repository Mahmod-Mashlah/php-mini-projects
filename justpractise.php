<?php 

class Person1 {
    // to store name of person
    var $name;
    public static $address;
    // print name
    function get_name() //getter
    {
    return $this->name;
    }
    function set_name($new_name,$new_address)//setter
    {
    $this->name = $new_name;
    self::$address = $new_address ;
    }
    function get_address(){
        return self::$address ;
    }

}

   


    class Person2
{
// first name of person
var $fname;
// last name of person
var $lname;
function showName()
{
echo "My name is: " . $this->fname . " " . $this->lname;
}
}
// creating class object
$roduan = new Person2();
// assigning values to variables
$roduan->fname = "Roduan";
$roduan->lname = "Kareem Aldeen";
// calling the method function
$roduan->showName();

echo "<br>";
///////////////////////////////////////////////////////

class Person3 {
    // first name of person3
    private $name;
    // public function to set value for name(setter method)
    public function setName($name)
    {
    $this->name = $name;
    }
    // public function to get value of name (getter method)
    public function getName()
    {
    return $this->name;
    }
    }
    // creating class object
    $john = new Person3();
    // calling the public function to set fname
    $john->setName("John Wick");
    // getting the value of the name variable
    echo "My name is " . $john->getName();

echo "<br>";

    
$m = new Person1();
$m2 = new Person1();

$n = "my name is m .<br>";
$ad = "my address is : ad"; 
$m->set_name($n,$ad);
//echo $m->get_name();
echo $m2->get_address();



    ?>
///////////////////////////////////////////////////////////////////////////////////////////



<?php
/* class Person {
// first name of person
private $fname;
// last name of person
private $lname;
// Constructor
public function __construct($fname, $lname)
{
echo "Initializing the object...<br/>";
$this->fname = $fname;
$this->lname = $lname;
}
// Destructor
public function __destruct()
{
// clean up resources or do something else
echo "<br>Destroying Object...<br>";
}
// public method to show name
public function showName()
{
echo "My name is: " . $this->fname . " " . $this->lname."<br>";
}
}
// creating class object
$roduan = new Person("Roduan", "Kareem Aldeen");
$roduan->showName();
*/
?>






<?php 
class Student{
    private $name;
    private $age;
    private $password;

    public function __construct($name,$age,$password){
        //default constructor
        echo "This is constructor 😄<br>";
        $this->name = $name;
        $this->age = $age;
        $this->password = $password;
    }
    
    public function showdetails(){
        echo "Your name is ".$this->name ."<br>";
        echo "Your age is ".$this->age."<br>" ;
        echo "Your password is ".$this->password."<br>";
    }
    public function __destruct(){
        //default constructor
        echo "<br>This is default Destructor 😄 <br>";
    } 
}
$s1 = new Student("Rami",25,123456);
$s1->showdetails();

?>