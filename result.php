<html>

<head>
<title>
Hello User!
</title>
<link rel="icon" href="user.png">

<style>
body
{
	background-color: #07575B;
}

#emotion
{
	font-family: "Courier New", Times, serif;
	font-size: 40px;
	color: white;
	padding-top: 25px;
	text-align: center;
	animation: change 1s infinite;
}

#content
{
	font-family: "Courier New", Times, serif;
	font-size: 30px;
	color: white;
	padding-top: 35px;
	text-align: center;
}

@keyframes change 
{
     0%  {color: white;}
    100% {color: #07575B;}
}

#messages
{
	font-family: Courier New;
	color: white;
	font-size: 30px;
	text-align: center;
	padding-left:50px;
	padding-right:50px;
}
</style>

</head>

<body>

<div id="content">
<?php
$emotion = $_POST['emotion'];


$db = mysqli_connect("localhost","root","","set2_db");
if(mysqli_connect_errno())
{
	echo "Failed to connect to database to MySQL: ".mysqli_connect_error();
}

$query = "INSERT INTO `guest` (`emotion`) 
			VALUES ('".$emotion."')";
$result = mysqli_query($db, $query);
if($result)
{
	// echo "Information has successfully added to the database!<br><br>";
}
else
{
	echo "Sorry, we don't seem to have a connection.";
}
?>
</div>

<div id="messages">
<?php
echo "I hope this cheer you up!<br><br>";


if ($emotion = "sad")
{
$query = "Select * from sad";
$db1 = mysqli_connect("localhost","root","","sad_db");
$result = mysqli_query($db1, $query);
$rows = mysqli_fetch_array($result);

	echo '<img src="love.png" alt="heart" height="20" width="20"/>';
	echo $rows['sad'];
	echo "<br>";
	echo "<br>";
}

elseif ($emotion = "happy")
{
$query = "Select * from happy";
$db2 = mysqli_connect("localhost","root","","happy_db");
$result = mysqli_query($db2, $query);
$rows = mysqli_fetch_array($result);

	echo '<img src="love.png" alt="heart" height="20" width="20"/>';
	echo $rows['happy'];
	echo "<br>";
	echo "<br>";
}
?>
</div>

</body>

</html>

