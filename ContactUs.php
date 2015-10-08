<?php
if($_POST["submit"]) {
    mail("agamgupta.96@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index1.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src = "script.js"> </script>
</head>
<body>
	<form id ="contact_form" method = "post" action = "contact.php">
		First Name: <input type = "text" name = "firstname">
		<br>
		Last Name: <input type = "text" name = "lastname">
		<br>
		Email Id:<span>fs</span>  <input type ="text" name = "emailid">
		<p id = "cbox">
			Comments:
			<br>
			 <textarea id = "comment" name="comments" rows = '5' columns = '20'></textarea>
			</br>
		</p>
		<p>
			<input type = "submit" value ="Submit" name = "submit">
			<input type = "reset" value ="Reset">
		</p>
	</form>
</body>
</html>