<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>MySQL</title>
  <style>
    body{
      background-color: black;
      color: white;
    }
    a{
      color: yellow;
    }
  </style>
</head>
<body>


<?php
$conn = mysqli_connect('localhost','root','','test');

$title = $_POST['nickname']; 
$sometosay = $_POST['say'];

$puttodb = "INSERT into registration(nickname,say)
VALUE ( '{$_POST['nickname']}' , '{$_POST['say']}' )";

mysqli_query($conn,$puttodb);

echo '<br><br><h1 style="text-align: center;">'.$title.'</h1>';
echo '<br><h3 style="text-align: center;">'.$sometosay.'</h3>';





























?>
<form action='study.php' method='POST'>
<button class='btn btn-outline-warning' style='text-align: center;' role='submit'>글쓰기로 돌아가기</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>