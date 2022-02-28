<html>
<body>


<form action="#" method ="POST">
Name: <input type="text" name="x">
<br></br>

Grade: <input type="text" name="x">

<br></br>

<input type="submit" name="run" value="submit"></br>
</form>



<?php
if(isset($_POST["run"]))
{
	$Grade=$POST["x"];
	
	$Grade=100;
	
	if($Grade<=90)
		echo "positive A".$_POST["x"];
	
	else if($Grade>=80)
		echo "positive B".$_POST["x"];
	
	else if($Grade>=70)
		echo "positive C".$_POST["x"];
	
	else if($Grade>=60)
		echo "positive D".$_POST["x"];
	
	else
		("or F if Fail");
}


?>
</body>
</html>