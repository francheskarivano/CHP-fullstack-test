<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "testuser" && $pass == "password"){
		echo("username and password matched");
	}else{
		echo ("Error! please enter correct data!");
	}
	
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<title></title>
</head>
<style type="text/css">
	form{
		text-align: center;
    	margin-top: 30px;
	}
</style>
<body>
	<form method="post" action="">
      <input type="text" id="login" name="username" placeholder="username">
      <input type="text" id="password" name="password" placeholder="password">
      <input type="submit" name="submit" value="Log In">
    </form>

    <table class="stripe table">
    	<thead>
    		<tr>
	    		<th>userId</th>
	    		<th>id</th>
	    		<th>title</th>
	    		<th>body</th>
	    	</tr>
    	</thead>
    	<tbody id="cardDiv">
    		
    	</tbody>
    </table>
</body>
</html>