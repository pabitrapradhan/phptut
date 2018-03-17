<?php
echo "Welcome";?>
<html>
	<head>
		<title>String Functions</title>
	</head>
	<body>
		<?php
		echo "<table>";
		echo "</table>";
		?>
	</body>
</html>
<?php
echo "World";
echo "<br>";
$str = "1"+8; //Outputs 9
/**
* Print series upto 10 from user input value - using while loop
**/
function printSeriesWhile($number){
	while($number>0)
	{
		if($number==11)break;
		echo $number;
		$number++;
	}

}

printSeriesWhile(9);
/**
* Print series upto 10 from user input value - for loop 
**/
echo "<br>";
function printSeriesFor($i){
	for($i)

}

printSeriesFor(9);


$.ajax({
      type: 'POST',
      url: "someaction.do?action=saveData",
      data: myKeyVals,
      dataType: "text",
      success: function(resultData) { alert("Save Complete") }
});