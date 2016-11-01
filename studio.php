<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <title>The Factory: Studio</title>
  <meta name="description" content="">

  <meta name="viewport" content="width=1024px">

  <link rel="stylesheet" href="css/style.css">

  <script src="js/libs/prefixfree.min.js"></script>
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>

  <!--
  <div id="baseline-overlay"></div>
  -->

  <header id="header">
    <?php include 'inc/header.php' ?>
  </header>

  <section class="top" style="height:330px">

    <div class="splash">
      <div class="top-content">
        <hgroup>
          <h1 class="a">Our <span>studio</span> has the right equipment...</h1>
          <h1 class="b">To get <span>You</span> the sound you want to <span>Hear!</span></h1>
        </hgroup>

<!--
        <button class="play"></button>

        <p>Check out the film to learn more</p>
-->
      </div>

      <div id="gears">
        <div id="gear-1"></div>
        <div id="gear-2"></div>
        <div id="gear-3"></div>
        <div id="gear-4"></div>
        <div id="gear-5"></div>
        <div id="gear-6"></div>
        <div id="gear-7"></div>
      </div>
    </div>

    <!--
    <div class="video">
      <iframe src="http://player.vimeo.com/video/37572300?title=0&byline=0&portrait=0&color=ff0179&hd=1&api=1&player_id=player1" id="player1" class="vimeo" width="642" height="362" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
    -->

  </section>

  <iframe style="display:block;margin: 50px auto 30px" width="853" height="480" src="https://www.youtube.com/embed/oOkGO5Lotdo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

  <h1 style="border:0"><span>Find</span> out more about our <span>professional studio</span>...</h1>

  <section id="control-a">
    <div class="layout-978">
      <div class="row push1">
        <div class="col5">
          <p>At The Factory we have the right equipment for the job with the center piece being our Harrison MR-4 desk and 24 Neve preamps (Avedis MA5's).  We have all the best brands to get you the sound you want and the great outboard gear you would expect from a pro studio.  All the We feature multiple iso rooms and able to accommodate full band setups to record live.</p>
        </div>
        <div class="col5">
          <img src="img/control-a-thm.jpg" alt="Control A" title="Control A" class="frame">
        </div>
        <div class="row-end"></div>
      </div>
    </div>
  </section>

  <section id="view-gear">
    <div class="layout-978">
      <a href="./gear-list.php" titile="View More" class="big-arrow-wht">View our Gear</a>
    </div>
  </section>

<!--
  <section id="control-b">
    <div class="layout-978">
      <div class="row push1">
        <div class="col5">
          <img src="img/live-control-b-thm.jpg" alt="Live/Control B" title="Live/Control B" class="frame">
        </div>
        <div class="col5">
          <h2>Live/Control B</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row-end"></div>
      </div>
    </div>
  </section>

  <section id="iso-room">
    <div class="layout-978">
      <div class="row push1">
        <div class="col5">
          <h2>ISO Rooms</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col5">
          <img src="img/iso-room-thm.jpg" alt="ISO Room" title="ISO Room" class="frame">
        </div>
        <div class="row-end"></div>
      </div>
    </div>
  </section>
  -->

  <footer>
    <?php include 'inc/footer.php' ?>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script async src="//a.vimeocdn.com/js/froogaloop2.min.js"></script>

  <script async src="js/plugins.js"></script>
  <script async src="js/script.js"></script>

  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=371108509571758";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <script>
    var _gaq=[['_setAccount','UA-28540303-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
