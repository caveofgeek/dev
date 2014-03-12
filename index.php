<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruk-Com Develop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/onepage-scroll.css" rel="stylesheet">
    <!--<link href="css/dev.css" rel="stylesheet">-->
    <link type="text/css" href="css/dev.less" rel="stylesheet/less"/>

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active" id="s1"><a href="#s1">HOME</a></li>
            <li id="s2"><a href="#s2">WHAT WE DO</a></li>
            <li id="s3"><a href="#s3">ABOUT US</a></li>
            <li id="s4"><a href="#s4">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="wrapper">
      <div class="main">
        <section id="s1">
          <div class="wrapper">
            <div class="container">
              <div class="text-center">
                <h1>RUK-COM DEVELOP</h1>
                <h3>We build Web / Mobile Application that you will fall in love with</h3>
              </div>
            </div>
          </div>
        </section>
        <section id="s2">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-3">
                <p><i class="fa fa-rocket fa-5x"></i></p>
                <h3>รวดเร็ว</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
              </div>
              <div class="col-md-3">
                <p><i class="fa fa-thumbs-up fa-5x"></i></p>
                <h3>มีคุณภาพ</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
              </div>
              <div class="col-md-3">
                <p><i class="fa fa-check-square-o fa-5x"></i></p>
                <h3>ตอบโจทย์</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <p><i class="fa fa-heart fa-5x"></i></p>
                <h3>ทำด้วยใจรัก</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
              </div>
              <div class="col-md-3">
                <p><i class="fa fa-laptop fa-5x"></i></p>
                <h3>เทคโนโลยีสมัยใหม่</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
              </div>
              <div class="col-md-3">
                <p><i class="fa fa-legal fa-5x"></i></p>
                <h3>เชื่อถือได้</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
              </div>
            </div>
          </div>
        </section>
        <section id="s3">
          <div class="container">
            <div class="row">
              <div class="col col-md-12">
                <h2>RUK-COM DEV</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-12">
                <div class="team">
                  <a href="#"><img src="images/team/aon.png"></a>
                  <a href="#"><img src="images/team/preaw.png"></a>
                  <a href="#"><img src="images/team/mc.png"></a>
                  <a href="#"><img src="images/team/bird.png"></a>
                  <a href="#"><img src="images/team/preaw.png"></a>
                  <a href="#"><img src="images/team/mc.png"></a>
                  <a href="#"><img src="images/team/bird.png"></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="s4"></section>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.9.1.min.js" type="text/javascript" ></script>
    <script src="js/jquery.onepage-scroll.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Less compiler  -->
    <script src="js/less.js" type="text/javascript"></script>
    <script>
      $(document).ready(function(){
        var menu = $("nav.navbar ul.nav li a")
        $(".main").onepage_scroll({
          sectionContainer: "section",
          responsiveFallback: 600,
          loop: true,
          beforeMove: function(index) {
            activateLink(index);
          }
        });

        $('a[href*=#]:not([href=#])').click(function() {
          event.preventDefault();
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              var moveTo = parseInt(target.attr("id").replace('s',''));
              $(".main").moveTo(moveTo);
              return false;
            }
          }
        });

        function deactivateLink() {
          $("ul.nav").each(function(){
            $(this).find('li').each(function(){
              $(this).removeClass("active");
            });
          });
        }

        function activateLink(item) {
          if (item == 2) menu.addClass("inverse")
          else menu.removeClass("inverse");

          $("ul.nav").each(function(){
            $(this).find('li').each(function(){
              var id = $(this).attr("id").replace('s','');
              if(id == item) $(this).addClass("active");
              else $(this).removeClass("active");
            });
          });
        }
      });
    </script>
  </body>
</html>