<html>
<head>
	<title>Checking odd Numbers</title>
</head>
<body>
<h1>Checking odd numbers between 1 to 10</h1>

<form action="odd_number.php" method="post">
Enter Next number<input type="number" name="number" placeholder="Enter next number"><br>
<input type="submit" name="submit">
	
</form>
<?php

if(isset($_POST['submit']))
{
$entered_number = $_POST['number']; //storing entered number

if(!empty($entered_number)) // checking if number entered is not empty
{
	  if($entered_number<=10) //checking if number entered is greater than 10
	  {
	       if($entered_number/$entered_number == 1 && $entered_number%2 ==1 || $entered_number%2 ==0.5 ) // checking if number is an odd number
	       {
             echo "<font color='green'>$entered_number is an Odd number</font>";  // displaying odd number if number entered is correct
	       }
	       else
	       {
	       	echo "<font color='red'>$entered_number is not an Odd number</font>"; // displaying an error message if number entered is not an odd number
	       }
	  }

	  else
	  {
	  	echo "<font color='red'>number must be less than 10</font>"; // displaying error message if number entered is greater than 10
	  }
}
else
{
	echo "<font color='red'>Please enter a number</font>"; // displaying an error message if number not entered
}

}


?>

</body>

</html>