<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/abraham.jpg" style="border-radius: 10px;">
  <title><?php echo $me['prof'][$_SESSION['locale']] ?></title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="assets/css/somecss.css">
</head>
<body>
<header>
  <div class="w3l-header" id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
            <a class="navbar-brand home-color">
                &nbsp;<img src="assets/images/abraham.jpg" class="img-fluid img-border" alt="" title="" style="height:45px; border-radius: 20px;" /> <?php echo $me['prof'][$_SESSION['locale']] ?>&nbsp;
            </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="height: 100px;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link pl-2 pr-0" href="?lang=en"><img src="assets/images/en.png" class="img-fluid roundedcircle" alt="" title="" style="height:35px;"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-2 pr-0" href="?lang=cn"><img src="assets/images/china.png" class="img-fluid roundedcircle" alt="" title="" style="height:35px;"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-2 pr-0" href="?lang=fr"><img src="assets/images/fr.png" class="img-fluid roundedcircle" alt="" title="" style="height:35px;"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-2 pr-0" href="#"><img src="assets/images/spain.png" class="img-fluid roundedcircle" alt="" title="" style="height:35px;"></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<section class="w3l-main-banner">
  <div class="banner-view">
    <div class="banner-info container">
      <h3 class="banner-text"><small><?php echo $me['hello'][$_SESSION['locale']] ?></small>
        <?php echo $me['abraham'][$_SESSION['locale']] ?>
      </h3>
      <p class="mt-3 mb-5"> <?php echo $me['my'][$_SESSION['locale']] ?><br><br>

        <?php echo $me['comp'][$_SESSION['locale']] ?> <a target="_blank" href="https://www.linkedin.com/company/kaziinterim/mycompany/" class="kazi-color">  &nbsp;&nbsp;Kazi-Interim  &nbsp;</a>, <?php echo $me['unv'][$_SESSION['locale']] ?>
       </p><br>

      <a href="https://www.linkedin.com/in/abraham-muller-470071201/" target="_blank" class="btn btn-light btn-style mr-3 hlr"><?php echo $me['exp'][$_SESSION['locale']] ?> <i class="fa fa-linkedin"></i></a>
      <a href="#" class="btn btn-outline-light btn-style mr-3 hlr"><?php echo $me['work'][$_SESSION['locale']] ?> <i class="fa fa-github"></i></a>
      <a href="mailto:fikiriabramsg@gmail.com" class="btn btn-outline-light btn-style hlr"><?php echo $me['cont'][$_SESSION['locale']] ?> <i class="fa fa-envelope"></i></a>
    </div>
  </div>

  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
</section>

<div class="w3l-content-photo-5 py-5" id="about">
	<div class="content-main pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 content-left mt-lg-0 text-center">
					<h3><?php echo $me['des'][$_SESSION['locale']] ?></h3>
				</div>
			</div>
		</div>
	</div>
</div>      

<div class="w3l-services-block py-1" id="classes">
    <div class="container py-lg-5 py-md-3">
        <div class="services-block_grids_bottom">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 service_grid_btm_left">
                    <div class="">
                        <div class="service_grid_btm_left2 done-app">
                            <h5 class="title-dev"><?php echo $me['web'][$_SESSION['locale']] ?></h5>
                            <p class="title-dev-desc"><?php echo $me['web1'][$_SESSION['locale']] ?></p>
                            <div class="line-app container"></div><i class="fa fa-laptop"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 service_grid_btm_left">
                    <div class="">
                        <div class="service_grid_btm_left2 done-app">
                            <h5 class="title-dev"><?php echo $me['mobile'][$_SESSION['locale']] ?></h5>
                            <p class="title-dev-desc"><?php echo $me['mobile1'][$_SESSION['locale']] ?><p>
                            <div class="line-app container"></div><i class="fa fa-mobile"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 service_grid_btm_left">
                    <div class="">
                        <div class="service_grid_btm_left2 done-app">
                            <h5 class="title-dev"><?php echo $me['brand'][$_SESSION['locale']] ?></h5>
                            <p class="title-dev-desc"><?php echo $me['brand1'][$_SESSION['locale']] ?></p>
                            <div class="line-app container"></div><i class="fa fa-credit-card"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3l-services-block" id="classes">
    <div class="container text-center">
        <h2 class="title-section py-3"><?php echo $me['clone'][$_SESSION['locale']] ?></h2>
        <div class="line-apps container"></div>
    </div>
</div>

<div class="w3l-services-block" id="classes">
    <div class="container">
        <div class="services-block_grids_bottom">
          <div class="container py-4 pt-3">
            <h2 class="title-section py-3"><?php echo $me['search-engine'][$_SESSION['locale']] ?></h2>
            <div class="line-app-done"></div>
          </div>
            <div class="row">
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['google'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['googledate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/1.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['bing'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['bingdate'][$_SESSION['locale']] ?><p>
                        </div>
                        <img src="assets/images/2.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['duck'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['duckdate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/3.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['yandex'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['yandexdate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/3.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3l-services-block" id="classes">
    <div class="container">
        <div class="services-block_grids_bottom">
          <div class="container py-4 pt-3">
            <h2 class="title-section py-3"><?php echo $me['social-media'][$_SESSION['locale']] ?></h2>
            <div class="line-app-done"></div>
          </div>
            <div class="row">
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['facebook'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['facebookdate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/1.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['instagram'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['instagramdate'][$_SESSION['locale']] ?><p>
                        </div>
                        <img src="assets/images/2.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['linkedin'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['linkedindate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/3.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['twitter'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['twitterdate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/3.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['facebook'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['facebookdate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/1.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['instagram'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['instagramdate'][$_SESSION['locale']] ?><p>
                        </div>
                        <img src="assets/images/2.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['linkedin'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['linkedindate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/3.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service_grid_btm_left">
                    <div class="done done-rd">
                        <div class="service_grid_btm_left2 done-rd">
                            <h5><?php echo $me['twitter'][$_SESSION['locale']] ?></h5>
                            <p class="clone-date"><?php echo $me['twitterdate'][$_SESSION['locale']] ?></p>
                        </div>
                        <img src="assets/images/3.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="py-2 text-center">
                        <a class="btn btn-default btn-x pull-center" href="#">View code <i class="fa fa-github"></i></a><a class="btn btn-default btn-x pull-center" href="#">View page <i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>
</div>

<section class="w3l-grid-quote py-5">
    <div class="container py-lg-3 col-12">
        <img src="assets/images/abraham.jpg" class="img-fluid" alt="" title="" style="height:45px; border-radius: 20px;" />
        <h6><?php echo $me['iam'][$_SESSION['locale']] ?></h6>
        <h3><?php echo $me['let'][$_SESSION['locale']] ?></h3>
        <p class="size-social">
            <a href="https://www.linkedin.com/in/abraham-muller-470071201/"><i class="fa fa-linkedin size-social"></i></a>
            <a href="https://twitter.com/Fkabrams"><i class="fa fa-twitter size-social"></i></a>
        </p>
                
    </div>
</section>
<footer>
  <section class="w3l-footers-1">
    <div class="footer py-3">
      <div class="container">
        <div class="footer-content">
          <div class="row">
            <div class="col-lg-8 footer-left">
              <p class="m-0">&copy; <?php echo $me['last'][$_SESSION['locale']] ?></p>
            </div>
            <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
              <ul class="social m-0 p-0">
                <li><a href="https://www.linkedin.com/in/abraham-muller-470071201/"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="https://twitter.com/Fkabrams"><span class="fa fa-twitter"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<button onclick="topFunction()" id="movetop" class="editContent" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<script src="assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      stagePadding: 20,
      margin: 15,
      nav: false,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<script src="assets/js/jquery-1.7.2.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
