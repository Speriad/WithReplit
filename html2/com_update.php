<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>MySQL</title>
  <style>
    body{
      background-color: white;
      color: black;
    }
  </style>
</head>
<body>


<?php
include 'connvar.php';

$updatefromdb = "UPDATE com set title='{$_POST['title']}', say='{$_POST['say']}' where id={$_SESSION['id']}";
  mysqli_query($conn, $updatefromdb);  

  echo '<script>alert("Success fully updated")</script>';



//얻은 패스워드가 맞는지 확인 아니면 변수값으로 리프레쉬 지정후 에코





























?>
<meta http-equiv="Refresh" content="0; url='community.php'" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>