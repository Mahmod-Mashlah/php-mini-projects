<?php 
// Eg 1 : 
// echo "this is page 2 :) <br>" ;
// echo'<a href="../PhpWepPage/1page.php" target="_blank">First page</a>';
?>


<?php 
// Eg 2 : (GET the URL with ? )

// $pageName1 = "The First Page" ;
// $pageName2 = "The Second Page" ;

// echo "<h2>Welcom to $pageName2 </h2><br>";
// echo "<a href='1page.php?id=1&name=mod'> Go to $pageName1 </a> <br>";
// echo "<br>";
// echo "The id taken in the url above is :".$_GET["id"]."<br>";

// echo  "<pre>";
//             print_r($_GET);
// echo  "</pre>";



?>

<?php 

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Second page</title>
</head>
<body>

<?php 

$id = $_GET["id"] ;
$user_name= $_GET["username"] ;
$page_name = $_GET["pagename"] ;

echo "id = $id <br>
      username = $user_name <br>
      page_name = $page_name <br>" ;


?>

</body>
</html>