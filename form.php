<!doctype html>
<html>
<head>
<title>Guest Autograph</title>
<link rel="icon" href="icon.png">

<style>

#containerr
{
	padding: 1px 5px 50px 400px;
	font-family: papyrus;
	font-size: 20px;
}

html
{
  overflow: hidden;
}

input[type=text] 
{
  border: none;
  border-bottom: 2px solid #07575B;
	width: 60%;
	font-family: courier new;
	font-size: 20px;
  outline: none;
}

textarea
{
  border: 2px solid #07575B; 
  width:58%;
  height: 60%;
  font-family: courier new;
  font-size: 20px;
  padding: 10px;
  outline: none;
}

p
{
	padding: 1px 5px 20px 400px;
	font-family: papyrus;
	font-size: 25px;
	font-weight: bold;
}

#but
{ 
	text-align:center;
  padding-left: 92px;
}

#button1 
{
  background-color: #07575B; 
  color: black;
  padding: 10px;
  text-align: center;
  font-size: 20px;
  border: 2px solid #07575B;
	font-family: courier new;
	font-weight: bold;
}

#button1:hover {
  background-color: white;
  color: black;
}

</style>

</head>

<body>

<p>Welcome, guest! Please fill in the fields properly.</p>

<div id="containerr">
<form action="result.php" id="form1"  method="post">
  First Name:<br>
  <input type="text" name="firstname" placeholder="Input your first name..." >
  <br><br>
  
  Middle Name:<br>
  <input type="text" name="middlename" placeholder="Input your middle name...">
  <br><br>
  
  Last Name:<br>
  <input type="text" name="lastname" placeholder="Input your last name...">
  <br><br>
  
  Message:<br>
  <textarea name="message" placeholder="State your message...Remember be nice!">
  </textarea> 
  <br><br>
</form>
<div id="but"> 
  <button id="button1" type="sumbit" form="form1" value="Submit">Submit</button>
  </div>
</div>

</body>

</html>