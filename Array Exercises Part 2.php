<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercises Part 2</title>
</head>
<body>

<h2>Write a PHP script to count a total number of duplicate elements in an array. </h2>

<?php 

	$text = file("Assignment1.txt");	

	$value_indices = []; 
	$value_counts = []; 
	foreach($text as $index => $val) { 
  		$value_indices[$val][] = $index; 
 
  		if(isset($value_counts[$val])) { 
    		$value_counts[$val]++; 
  		} else { 
			$value_counts[$val] = 1; 
  		} 
	} 
	
	print("The total number of duplicate elements found in the array is : $index");

?>

<h2>Write a PHP script to count the frequency of each element of an array.</h2>

<<?php 
$text = file("Assignment2.txt");	

$fr = array_fill(0, count($text), 0);
$check = -1;
for($i = 0; $i < count($text); $i++)
{
	$count = 1;
	for($j = $i+1; $j < count($text); $j++)
	{
		if($text[$i] == $text[$j])
		{
			$count++;
			$fr[$j] = $check;
		}
	}
	if($fr[$i] != $check)
	$fr[$i] =$count;
}

echo("The frequency of all elements of an array: <br>");
for( $i = 0; $i < count($fr); $i++)
{
	if($fr[$i] != $check)
	{
		echo( $text[$i] ." occurs " );
		echo( $fr[$i]." times.<br>");
		echo(" ");
	}
} 

?>
<h2>Write a PHP script to separate odd and even integers in separate arrays. </h2>

<?php 
$text = file("Assignment3.txt");	

	$oddArray = array();
	$evenArray = array();
	
	$size = count($text);

	$j = 0;
	$k = 0;

	for ($i = 0; $i < $size; $i++) {
    	if ($text[$i] % 2 == 0) {
        	$evenArray[$j] = $text[$i];
        	$j++;
    	} else {
        	$oddArray[$k] = $text[$i];
        	$k++;
    	}
	}

		print("The even elements are : <br>");
	for ($i = 0; $i <= $j; $i++) {
    	@print("$evenArray[$i] ");
	}
	print("<br>");
		print("The odd elements are : <br>");
	for ($i = 0; $i <= $k; $i++) {
    	@print("$oddArray[$i] ");
	}
 ?>



</body>
</html>