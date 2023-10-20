<?php 
    # Eg1 :
    // echo "This is page 1.<br>";
    // echo'<a href="../PhpWepPage/2page.php" target="_blank">Second page</a>';

?>

<?php 
// Eg 2 : (GET the URL with ? )


// $pageName2 = "The Second Page" ;
// $pageName1 = "The First Page" ;

// echo "<h2>Welcom to $pageName1 </h2><br>";
// echo "<a href='2page.php?id=2&name=mod'>Go to $pageName2 </a><br>";
// echo "<br>";
// echo "The id taken in the url above is :".$_GET["id"]."<br>";
// echo "The id taken in the url above is :".$_GET["name"]."<br>";

// echo "<br>".'The $_GET array with print_r function is : <br>';
// echo  "<pre>";
//             print_r($_GET);
// echo  "</pre>";


?>

<?php 

  // {{-- or instead of the line 59 (php tag) you can use blade like thith {{ $pageId }}  --}}   

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 First page</title>
</head>
<body>

<h1>Welcom to The First page .</h1> <br><br>

<?php 

    # php Eg3 (103)
    $PageName = "Second Page" ;
    $pageId = 2 ;
    $userName = "Mahmod & mod";

?>
<a href="2page.php?id=<?php echo $pageId; ?> 
                   &username=<?php echo urlencode($userName);?>
                   &pagename=<?php echo $PageName?>">
<?php echo $PageName ; ?></a> <br>


<?php # Example 4 in video 106 :

$user = 'Mahmod Abo Saleh';
$job = 'PHP Developer';
$path1 = 'Backend Developer'.'/'.urlencode($user).'/'.urlencode($job) ;
$path2 = 'Backend Developer'.'/'.rawurlencode($user).'/'.rawurlencode($job) ;


echo $path1 ;
echo '<br>';
echo "$path2";
?>

<?php # Example 5 in video 107

$str1 = " *  $  ^  &  @ ";

echo "<br>".$str1."<br>";

echo "<br>".htmlentities($str1);
// html_entity_decode($str);

?>

</body>
</html>