<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">

	<title>정보 전송 완료</title>
</head>
<body>
<nav class='navbar navbar-expand-lg bg-dark navbar-dark py-3'>
		<div class='container'>
		<a class='navbar-brand'>Sent Successfully</a>
</nav>


<?php
	include 'study/connvar.php';

	// $lessgotodb = "INSERT into registration(nickname, say) 
	// values('{$_POST['nickname']}','{$_POST['say']}')";

	// mysqli_query($conn, $lessgotodb);
	if isset($_POST['nickname']){
		$lessgonick = "SELECT * from registration where nickname = '{$_POST['nickname']}'";
		$resultin = mysqli_query($conn, $lessgonick);
		$rows = mysqli_fetch_array($resultin);
	};
?>

<meta http-equiv="Refresh" content="0; url='index.php'" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>