<!doctype html>

<head>
  <?php include 'connvar.php'; ?>
	<style type='text/css'>
		body {
			background-color: white;
		}
    a{
      text-decoration: none;
    }
	</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">Lobby of MooHipGal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
        $button1 = "<form action='community.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Community</button>
        </form>";
        $button2 = "<form action='typebeat.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Type Beat</button>
        </form>";
        $button3 = "<form action='albums.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Albums</button>
        </form>";
        $button4 = "<form action='lyrics.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Lyrics</button>
        </form>";
        $button5 = "<form action='news.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>News</button>
        </form>";
        echo $button1;
        echo $button2;
        echo $button3;
        echo $button4;
        echo $button5;
      ?>
  </div>
  </div>
</nav>


<!-- Showcase 구현 -->

  <section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <h1><span class='text-warning'>Kanye West</span> Was Out New Album <span class='text-warning'>'DONDA'</span></h1>
          <p class='lead my-4'>Finally, He released 10th album, 'DONDA'</p>
          <a class="btn btn-danger btn-lg" href="https://youtube.com/playlist?list=PL8czsbhQP4tvew4t_V2PL-wUMbxIUdz4o" role="button">Listen in YouTube</a>
          <p class='lead my-3' style='color: grey;'>9/26/2021 Updated</p>
        </div>
        <a href='https://www.youtube.com/watch?v=y4l85Qrnd-c'><img class='img-fluid w-200 d-none d-sm-block' src='https://lh3.googleusercontent.com/gd7qsOzpy8aoUf0SV1E-LZiUjo03QYiDNFRwSwQc3h5rBG8JHuk1P_nsB7I9A4rS_cMpyU18D8SEOA7iDw=w544-h544-l90-rj' alt='' /></a>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->
  <section class='bg-primary text-light p-4'>
    <div class='container'>
    <?php
    $notlogin = "<br><h1 style='text-align: center;'>Log-In to Enjoy More services!</h1><br>
<form action='condb.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='USERNAME' required>
<br><input type='password' class= 'form-control' name = 'pw' placeholder='PASSWORD' required>
<br><button role='submit' class='btn btn-outline-warning'>LogIn</button> 
</form>
<form action=regi_show.php method='post'>
<button role='submit' class='btn btn-outline-warning'>Registration</button>
  </form>
    </div>
  </section>
  <section>
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Your Information will safely be saved.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";

    $belogin = "<br><h1 style='text-align: center;'>Welcome! {$_SESSION['nickname']}</h1><br><div style='text-align: center;'>You are the family of MooHipGal!</div><br><form action='remove_session.php' class='text-center'><button role='submit' class='btn btn-outline-warning'>Log-Out</button></form>
    <form action='delete_ac_show.php'><button role='submit' class='btn btn-outline-warning'></form>";

    if(isset($_SESSION['nickname'])){
      echo $belogin;
    }else{
      echo $notlogin;
      $_SESSION['nickname']=null;
    };
  ?>
  </div>
  </section>

  <!-- Making BOXES -->

  <section class='p-5'>
    <div class='container'>
      <div class='row text-center g-4'>
        <div class='col-md'>
          <div class='card bg-secondary text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-chat-fill"></i>
            </div>
            <h3 class='card-title'>
              Community
            </h3>
            <p class='card-text'>
              Most intuitive HipHop Community
            </p>
            <a href='#crm' class='btn btn-outline-warning'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-dark text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-file-earmark-music-fill"></i>
            </div>
            <h3 class='card-title'>
              Type Beat
            </h3>
            <p class='card-text'>
              Get your type beat for free
            </p>
            <a href='#trm' class='btn btn-outline-warning'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-secondary text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-justify-left"></i>
            </div>
            <h3 class='card-title'>
              Lyrics
            </h3>
            <p class='card-text'>
              Find your songs' Lyrics
            </p>
            <a href='#lrm' class='btn btn-outline-warning'>Read More</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- Other Sections -->

  <section id='crm' class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
      <div class='col-md'>
          <img src='https://i.pinimg.com/originals/01/1b/24/011b24f9cb707b842aeb862ef9d54e5a.gif' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5'>
          <h2>Gather With your HipHop Friends!</h2>
          <p class='lead'>
            If you want to talk with your same-taste friends or share your favorite songs with them, 
            Here is the best one! Find your hidden taste or not-famous but, well-made songs. 
          </p>
          <p class='lead'>
            Community for HipHop Fans and Musicians. Share your favorite songs!
          </p>
          <a href='community.php' class='btn btn-dark mt-3'>
            <i class='bi bi-chevron-right'>Dive into Community</i>
          </a>
        </div>
      </div>
  </section>

  <section id='trm' class='p-5 bg-black'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <img src='https://i.pinimg.com/originals/7e/3b/50/7e3b5074bfb8f14f0d68d6851b56447b.jpg' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5 text-white'>
          <h2>Get Your Type Beat that fits!</h2>
          <p class='lead text-white'>
            If you want to talk with your same-taste friends or share your favorite songs with them, 
            Here is the best one! Find your hidden taste or not-famous but, well-made songs. 
          </p>
          <p class='lead text-white'>
            Type Beat for beginner! You can get it anytime.
          </p>
          <a href='typebeat.php' class='btn btn-light mt-3'>
            <i class='bi bi-chevron-right'>Dive into Type Beat</i>
          </a>
        </div>
      </div>
  </section>

  <section id='lrm' class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_B_fuU2qhoWCCgblAuozsKAdVZashFLfbinvp1GuZ-j9gGR2xY9NXDPHM1l7vfPQygjc&usqp=CAU' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5 text-black'>
          <h2>Get your favorite songs' Lyrics!</h2>
          <p class='lead text-black'>
           You can find your favorite songs' Lyrics Anytime. Users can write lyrics and comment about lyrics! Share your
           Lyrics with Hip-Hop Fans!
          </p>
          <p class='lead text-black'>
            Find Lyrics with listening Music. It can be extreme.
          </p>
          <a href='lyrics.php' class='btn btn-dark mt-3'>
            <i class='bi bi-chevron-right'>Dive into Lyrics</i>
          </a>
        </div>
      </div>
  </section>

  <!-- Question Accordian -->

  <section id='questions' class='p-5'>
    <div class='container'>
      <h2 class='text-center mb-4'>FAQ (Frequently Asked Questions)</h2>
      <div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        What Should I do to join Community?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can join Community anytime.</strong><br><br>Log-In System will be given to you. But you can join community by Log-Out User. But you can't write comment or post in Community.
        But Accessing Community, Reading Other Community Members' Post are not needed Log-in. You can Login at the top of MooHipGal page. If you are in Mobile-Environment, Touch Hamberger-Button and 
        Go to Login Page and You can Register very easily. Thanks for enjoying our community.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Does type beat cost money to use?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It doesn't cost for using.</strong><br><br>Moohipgal's Type beat is for Beginners' beat and Users must upload their beat for free. You can download other producers' Type-Beat any time. 
        And For producers, You must agree the terms of type-beat's No-Copyright. And do not require users to give you money. And If you want to download producers' Type-Beat You must be log-in to Moohipgal.
        Use real Producers' Type Beat anytime!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How can I report error in Moohipgal?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can send Report at Lobby Page</strong><br><br>You can report your discomfort anytime you want. Report is needed Log-In So you must be log-in before you report to developer. You must report 
        error, advice, etc. But if you report not-associated things. You can be punished without warning.
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      What is the difference of 'Albums' Page and 'Community' Page?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It is difference of Share and Information</strong><br><br>Community is for everything like sharing songs, advertising their music, or music video and also Albums! But 'Albums'
        Page is a series of every album. You can find your albums' information written by other users. It is similar with WikiPedia. But it's for Hip-Hop Albums like Illmatic And To Pimp A Butterfly etc. 
        If you want information of your favorite albums, You can visit 'Albums' Page and read that!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        What's the 'Lyrics' Page and What can I get through it?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can get your favorite songs' Lyrics Anytime!</strong><br><br>If you want to get your favorite songs' Lyrics, You must visit 'Lyrics' Page! Lyrics Page is Uploaded by other users.
        And finally, If Songs' Lyrics have errors, Report to developer in Lobby Page. Thanks.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Does MooHipGal have Mebership service or Subscribing?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>No, There isn't. And We don't have an idea like Money-Needed Service yet</strong><br><br>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>

    
    
  



  










</body>

</html>