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
      background-color: black;
      color: white;
    }
    a{
      color: yellow;
    }
  </style>
</head>
<body>

<br>
<?php
//해당 id에 포함되는 각 컬럼의 값들을 보여줌'
include 'connvar.php';

$idtoupdate = $_GET['id'];
$idtoupdate_link = "study_update_show.php?id=".$idtoupdate;

if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM registration where id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  echo '<br><br><h1 style="text-align: center;">'.$row[1].'</h1>';
  echo '<br><br><h3 style="text-align: center;">'.$row[2].'</h3>';
  $update_link = "<form action=".$idtoupdate_link." method='POST'><button class='btn btn-outline-primary'>수정하기</button></form>";
};

























?>
<br><br>
<form action='study.php' method='POST'>
<button class='btn btn-outline-warning' style='text-align: center;' role='submit'>커뮤니티로 돌아가기</button>
</form>
<br>
<?=$update_link?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>