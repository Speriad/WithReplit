<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>MooHipGal</title>
	<style type='text/css'>
		body {
			background-color: white;
		}
        a{
            text-decoration: none;
            color:white;
        }
	</style>
</head>

<body>
	<!-- NAVBAR 구현 -->
	<nav class='navbar navbar-expand-lg bg-dark navbar-dark py-3'>
		<div class='container'>
			<a href='etc.php' class='navbar-brand'>etc.</a>
			<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navmenu'><span class='navbar-toggler-icon'></span></button>
      <div class='collapse navbar-collapse' id='navmenu'>
        <ul class='navbar-nav ms-auto'>
        <li class='nav-item'>
            <a href='index.php' class='nav-link'>Go to Lobby Page</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class='p-5'>
    <div class='container'>
      <div class='row text-center g-4'>
        <div class='col-md'>
          <div class='card bg-info text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-lock-fill"></i>
            </div>
            <h3 class='card-title'>
              Moohipgal
            </h3>
            <p class='card-text'>
              About Moohipgal
            </p>
            <a href='#crm' class='btn btn-outline-danger'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-white text-black'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-file-earmark-person-fill"></i>
            </div>
            <h3 class='card-title'>
              Copyright
            </h3>
            <p class='card-text'>
              About Type Beat's Copyright
            </p>
            <a href='#trm' class='btn btn-outline-danger'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-info text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-info-circle-fill"></i>
            </div>
            <h3 class='card-title'>
              And etc..
            </h3>
            <p class='card-text'>
              Everything About Moohipgal's Info
            </p>
            <a href='#lrm' class='btn btn-outline-danger'>Read More</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <div class='container align-left'>
  <div class="list-group">
  <a href="etc.php?id=MooHipGal is for..&text=It is the most practical and interactive HipHop Community in the world. Or will be.." class="list-group-item list-group-item-action active" aria-current="true">
    What's MooHipGal for?
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
</div>
      </div>


      <section class='p-3'>
  <div id='crm' class='container-fluid text-center p-5'>
  <h2>
<?php
    echo $_GET['id'];
?>
</h2>
<p>
<?php
    echo $_GET['text']
?>
</p>
      </div>
  </section>
    
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>