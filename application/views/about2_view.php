    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">
    <!-- Load main css file -->
    <link href="<?php echo base_url(); ?>includes/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <title>Powering the Cloud</title>
  </head>

  <body>
    
    <!-- Navigation -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>index.php/site/index">Home</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/site/signin">Sign In</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>index.php/site/about">About</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- About Hero -->
    <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>About</h1>
        <p>An overview of the OpenVZ Control Panel, how it was made, and what technologies were used.</p>
      </div>
    </div>

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-9" role="main">
          <!-- Description -->
          <div class="bs-docs-section">
            <h1 id="description" class="page-header">Description</h1>
            <p class="lead">Powering OpenVZ is a web application that gives the user the power to manage an OpenVZ server from anywhere via the Internet. It also provides a user friendly interface that removes the user from the command line. At a quick glance the user will be able to get real time system data including hard drive, RAM, and CPU statistics. Once logged into a secure session, the user has the ability to Start, Stop, Restart, Create, Modify, Destroy, and View OpenVZ containers.</p>
            <p>View the source code on <a href="https://github.com/joeygrasso/virtualization">GitHub</a></p>
          </div>

          <!-- Getting started -->
          <div class="bs-docs-section">
            <h1 id="technology" class="page-header">Technology Used</h1>
            <p class="lead">The entire project was built using open source frameworks, operating systems, and tools. The project was coded in PHP using Sublime Text 2.</p>
            <div class="row bs-downloads" style="margin-bottom: 20px;">
              <div class="col-sm-4">
                <h3 id="download-bootstrap">OpenVZ</h3>
                <p>Open Virtuozzo (OpenVZ) is an operating system level virtualization technology. Based on the Linux Kernel, OpenVZ creates isolated 'containers' or instances of a Linux Distribution.</p>
                <a href="http://openvz.org/Main_Page" target="_blank" class="btn btn-lg btn-outline" role="button">Visit OpenVZ</a>
              </div>
              <div class="col-sm-4">
                <h3 id="download-source">CodeIgniter</h3>
                <p>CodeIgniter is a powerful PHP framework with a very small footprint, built for PHP coders who need a simple and elegant toolkit to create full-featured web applications.</p>
                <a href="http://ellislab.com/codeigniter" target="_blank" class="btn btn-lg btn-outline" role="button">Visit CodeIgniter</a>
              </div>
              <div class="col-sm-4">
                <h3 id="download-sass">Twitter Bootstrap</h3>
                  <p>Bootstrap is a front-end CSS framework that easily and efficiently scales your project with one code base, from phones to tablets to desktops. It allows one design to be avialable on all devices.</p>
                  <a href="http://getbootstrap.com" target="_blank" class="btn btn-lg btn-outline" role="button" >Visit Bootstrap</a>
              </div>
            </div>
            <div class="row bs-downloads" style="margin-bottom: 20px;">
              <div class="col-sm-4">
                <h3 id="download-bootstrap">jQuery</h3>
                <p>jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. Almost all of the JavaScript on this site is written using jQuery.</p>
                <a href="http://jquery.com/" target="_blank" class="btn btn-lg btn-outline" role="button" >Visit jQuery</a>
              </div>
              <div class="col-sm-4">
                <h3 id="download-source">CentOS</h3>
                <p>CentOS is a Linux distribution that provides a free enterprise class computing platform which has 100% compatibility with its upstream source, Red Hat Enterprise Linux (RHEL)</p>
                <a href="http://www.centos.org/" target="_blank" class="btn btn-lg btn-outline" role="button">Visit CentOS</a>
              </div>
              <div class="col-sm-4">
                <h3 id="download-sass">LAMP Stack</h3>
                  <p>LAMP is a solution stack composed entirely of free and open-source software suitable for building high-availability heavy-duty dynamic web sites. LAMP stands for Linux, Apache, MySQL, &amp; PHP</p>
              </div>
            </div>
          </div>

          <!-- File structure -->
          <div class="bs-docs-section">
            <h1 id="application" class="page-header">Application Features</h1>
            <p class="lead">Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>
            <div class="bs-callout bs-callout-warning" id="jquery-required">
              <h4>jQuery required</h4>
              <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href="#template">starter template</a>. <a href="https://github.com/twbs/bootstrap/blob/v3.1.1/bower.json">Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
            </div>

            <h2 id="whats-included-precompiled">Practical Applications</h2>
            <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
          </div>

          <!-- Screenshots / Examples -->
          <div class="bs-docs-section">
            <h1 id="examples" class="page-header">Screenshots &amp; Examples</h1>
            <p class="lead">Below are screenshots displaying the functionality of the application.</p>
            
            <h3 id="examples-dashboard">Dashboard</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/starter-template/"><img src="../examples/screenshots/starter-template.jpg" alt=""></a>
                <h4>Starter template</h4>
                <p>Nothing but the basics: compiled CSS and JavaScript along with a container.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/theme/"><img src="../examples/screenshots/theme.jpg" alt=""></a>
                <h4>Bootstrap theme</h4>
                <p>Load the optional Bootstrap theme for a visually enhanced experience.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/grid/"><img src="../examples/screenshots/grid.jpg" alt=""></a>
                <h4>Grids</h4>
                <p>Multiple examples of grid layouts with all four tiers, nesting, and more.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/jumbotron/"><img src="../examples/screenshots/jumbotron.jpg" alt=""></a>
                <h4>Jumbotron</h4>
                <p>Build around the jumbotron with a navbar and some basic grid columns.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/jumbotron-narrow/"><img src="../examples/screenshots/jumbotron-narrow.jpg" alt=""></a>
                <h4>Narrow jumbotron</h4>
                <p>Build a more custom page by narrowing the default container and jumbotron.</p>
              </div>
            </div>

            <h3 id="examples-start">Start</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar/"><img src="../examples/screenshots/navbar.jpg" alt=""></a>
                <h4>Navbar</h4>
                <p>Super basic template that includes the navbar along with some additional content.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-static-top/"><img src="../examples/screenshots/navbar-static.jpg" alt=""></a>
                <h4>Static top navbar</h4>
                <p>Super basic template with a static top navbar along with some additional content.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-fixed-top/"><img src="../examples/screenshots/navbar-fixed.jpg" alt=""></a>
                <h4>Fixed navbar</h4>
                <p>Super basic template with a fixed top navbar along with some additional content.</p>
              </div>
            </div>
            
            <h3 id="examples-stop">Stop</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar/"><img src="../examples/screenshots/navbar.jpg" alt=""></a>
                <h4>Navbar</h4>
                <p>Super basic template that includes the navbar along with some additional content.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-static-top/"><img src="../examples/screenshots/navbar-static.jpg" alt=""></a>
                <h4>Static top navbar</h4>
                <p>Super basic template with a static top navbar along with some additional content.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-fixed-top/"><img src="../examples/screenshots/navbar-fixed.jpg" alt=""></a>
                <h4>Fixed navbar</h4>
                <p>Super basic template with a fixed top navbar along with some additional content.</p>
              </div>
            </div>

            <h3 id="examples-restart">Restart</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar/"><img src="../examples/screenshots/navbar.jpg" alt=""></a>
                <h4>Navbar</h4>
                <p>Super basic template that includes the navbar along with some additional content.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-static-top/"><img src="../examples/screenshots/navbar-static.jpg" alt=""></a>
                <h4>Static top navbar</h4>
                <p>Super basic template with a static top navbar along with some additional content.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-fixed-top/"><img src="../examples/screenshots/navbar-fixed.jpg" alt=""></a>
                <h4>Fixed navbar</h4>
                <p>Super basic template with a fixed top navbar along with some additional content.</p>
              </div>
            </div>
            <h3 id="examples-create">Create</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar/"><img src="../examples/screenshots/navbar.jpg" alt=""></a>
                <h4>Navbar</h4>
                <p>Super basic template that includes the navbar along with some additional content.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-static-top/"><img src="../examples/screenshots/navbar-static.jpg" alt=""></a>
                <h4>Static top navbar</h4>
                <p>Super basic template with a static top navbar along with some additional content.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-fixed-top/"><img src="../examples/screenshots/navbar-fixed.jpg" alt=""></a>
                <h4>Fixed navbar</h4>
                <p>Super basic template with a fixed top navbar along with some additional content.</p>
              </div>
            </div>

            <h3 id="examples-modify">Modify</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar/"><img src="../examples/screenshots/navbar.jpg" alt=""></a>
                <h4>Navbar</h4>
                <p>Super basic template that includes the navbar along with some additional content.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-static-top/"><img src="../examples/screenshots/navbar-static.jpg" alt=""></a>
                <h4>Static top navbar</h4>
                <p>Super basic template with a static top navbar along with some additional content.</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/navbar-fixed-top/"><img src="../examples/screenshots/navbar-fixed.jpg" alt=""></a>
                <h4>Fixed navbar</h4>
                <p>Super basic template with a fixed top navbar along with some additional content.</p>
              </div>
            </div>

            <h3 id="examples-destroy">Destroy</h3>
            <div class="row bs-examples">
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/cover/"><img src="../examples/screenshots/cover.jpg" alt=""></a>
                <h4>Cover</h4>
                <p>A one-page template for building simple and beautiful home pages.</p>
              </div>
              <div class="col-xs-6 col-md-4">
                <a class="thumbnail" href="../examples/carousel/"><img src="../examples/screenshots/carousel.jpg" alt=""></a>
                <h4>Carousel</h4>
                <p>Customize the navbar and carousel, then add some new components.</p>
              </div>
              <div class="clearfix visible-xs"></div>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="bs-docs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-docs-sidenav">
              <li><a href="#description">Description</a></li>
              <li><a href="#technology">Technology Used</a></li>
              <li><a href="#application">Application</a></li>
              <li><a href="#examples">Screenshots &amp; Examples</a>
                <ul class="nav">
                  <li><a href="#examples-dashboard">Dashboard</a></li>
                  <li><a href="#examples-start">Start</a></li>
                  <li><a href="#examples-stop">Stop</a></li>
                  <li><a href="#examples-restart">Restart</a></li>
                  <li><a href="#examples-create">Create</a></li>
                  <li><a href="#examples-modify">Modify</a></li>
                  <li><a href="#examples-destroy">Destroy</a></li>
                </ul>
              </li>
            </ul>
            <a class="back-to-top" href="#top">Back to top</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bs-docs-footer" role="contentinfo">
      <div class="container">
        <p><a href="http://www.joeygrasso.com">Joey Grasso 2014</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./bootstrap.min.js"></script>
    <script src="./docs.min.js"></script>
  </body>
</html>