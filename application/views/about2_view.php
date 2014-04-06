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
    <link href="<?php echo base_url(); ?>includes/css/docs.min.css" rel="stylesheet">

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
            <h3>What is virtualization?</h3>
            <p>Virtualization provides a layer of abstraction between computer hardware and software. Virtualization makes it possible to trick your computer into running multiple operating systems simultaneously on a single machine.</p>
            <h3>Wait what? Carpool Example:</h3>
            <p>One person in a car is inefficient. Your car is capable of carrying many people and cargo.  Virtualization allows one machine to operate several different systems simultaneously &amp; increase efficiency.</p>
            <h3>OpenVZ</h3>
            <p>Open Virtuozzo (OpenVZ) is a free and open source virtualization platform. OpenVZ is offers a   lot of features including: CPU regulation, RAM allocation, and hard drive space limits.   Unfortunately OpenVZ does not have a user friendly interface. All of the interaction takes place  on the command line.</p>
          </div>

          <!-- Application Features -->
          <div class="bs-docs-section">
            <h1 id="application" class="page-header">Application Features</h1>
            <p class="lead">Powering OpenVZ is a web application that gives the user the power to manage an OpenVZ server from anywhere via the Internet. It also provides a user friendly interface that removes the user from the command line. At a quick glance the user will be able to get real time system data including hard drive, RAM, and CPU statistics. Once logged into a secure session, the user has the ability to Start, Stop, Restart, Create, Modify, Destroy, and View OpenVZ containers.</p>
            <p>View the source code on <a href="https://github.com/joeygrasso/virtualization">GitHub</a></p>

            <h2>Benefits &amp; Practical Applications</h2>
            <p>Below are some basic usage scenarios for the OpenVZ Dashboard.</p>
            
            <h3>Server Consolidation</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <p>This is the most common and practical use of Virtualization. By consolidating servers an organization or business will reduce hardware costs, energy costs, and personnel costs while increasing efficiency.</p>
              </div>
            </div>

            <h3>Security</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <p>An organization or company can isolate each network service into its own virtual environment to increase security. If one virtual environment gets compromised the rest of the system will be unaffected.</p>
              </div>
            </div>

            <h3>Hosting &amp; Cloud Computing</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <p>Virtual environments are the cheapest solution to provide web hosting and computing on demand. OpenVZ allows each separate customer to have full access without needing their own physical machine. All resources including CPU clock cycles can be regulated for complete control and allocation.</p>
              </div>
            </div>

            <h3>Development &amp; Testing</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <p>Often when developing, programmers need to build and tear down several servers. This will allow them to quickly create virtual development environments for their current project.</p>
              </div>
            </div>

            <h3>Education</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <p> At Armstrong many courses all use one server 'web-students', and then each student has a heavily restricted account that only allows for the execution of a limited number of commands. Instead of having a single server, Armstrong should virtualize and give each student their own instance so they can be root.</p>
              </div>
            </div>
          </div>

          <!-- Screenshots / Examples -->
          <div class="bs-docs-section">
            <h1 id="examples" class="page-header">Screenshots &amp; Examples</h1>
            <p class="lead">Below are screenshots displaying the functionality of the application.</p>
            
            <h3 id="examples-dashboard">Dashboard</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/dashboard.png" class="img-responsive" alt="dashboard" />
              </div>
            </div>

            <h3 id="examples-start">Start</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/start.png" class="img-responsive" alt="start" />
              </div>
            </div>
            
            <h3 id="examples-stop">Stop</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/stop.png" class="img-responsive" alt="stop" />
              </div>
            </div>

            <h3 id="examples-restart">Restart</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/restart.png" class="img-responsive" alt="restart" />
              </div>
            </div>
            
            <h3 id="examples-create">Create</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/create.png" class="img-responsive" alt="create" />
              </div>
            </div>

            <h3 id="examples-modify">Modify</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/modify.png" class="img-responsive" alt="modify" />
              </div>
            </div>

            <h3 id="examples-remove">Remove</h3>
            <div class="row bs-examples">
              <div class="col-md-12">
                <img src="<?php echo base_url(); ?>images/remove.png" class="img-responsive" alt="remove" />
              </div>
            </div>
          </div>

          <!-- Technology Used -->
          <div class="bs-docs-section">
            <h1 id="technology" class="page-header">Technology Used</h1>
            <p class="lead">The entire project was built using open source frameworks, operating systems, and tools.</p>
            <div class="row bs-downloads" style="margin-bottom: 20px;">
              <div class="col-sm-4">
                <h3>OpenVZ</h3>
                <p>Open Virtuozzo (OpenVZ) is an operating system level virtualization technology. Based on the Linux Kernel, OpenVZ creates isolated 'containers' or instances of a Linux Distribution.</p>
                <a href="http://openvz.org/Main_Page" target="_blank" class="btn btn-lg btn-outline" role="button">Visit OpenVZ</a>
              </div>
              <div class="col-sm-4">
                <h3>CodeIgniter</h3>
                <p>CodeIgniter is a powerful PHP framework with a very small footprint, built for PHP coders who need a simple and elegant toolkit to create full-featured web applications.</p>
                <a href="http://ellislab.com/codeigniter" target="_blank" class="btn btn-lg btn-outline" role="button">Visit CodeIgniter</a>
              </div>
              <div class="col-sm-4">
                <h3>Twitter Bootstrap</h3>
                  <p>Bootstrap is a front-end CSS framework that easily and efficiently scales your project with one code base, from phones to tablets to desktops. It allows one design to be avialable on all devices.</p>
                  <a href="http://getbootstrap.com" target="_blank" class="btn btn-lg btn-outline" role="button" >Visit Bootstrap</a>
              </div>
            </div>
            <div class="row bs-downloads" style="margin-bottom: 20px;">
              <div class="col-sm-4">
                <h3>jQuery</h3>
                <p>jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. Almost all of the JavaScript on this site is written using jQuery.</p>
                <a href="http://jquery.com/" target="_blank" class="btn btn-lg btn-outline" role="button" >Visit jQuery</a>
              </div>
              <div class="col-sm-4">
                <h3>CentOS</h3>
                <p>CentOS is a Linux distribution that provides a free enterprise class computing platform which has 100% compatibility with its upstream source, Red Hat Enterprise Linux (RHEL)</p>
                <a href="http://www.centos.org/" target="_blank" class="btn btn-lg btn-outline" role="button">Visit CentOS</a>
              </div>
              <div class="col-sm-4">
                <h3>LAMP Stack</h3>
                  <p>LAMP is a solution stack composed entirely of free and open-source software suitable for building high-availability heavy-duty dynamic web sites. LAMP stands for Linux, Apache, MySQL, &amp; PHP</p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="bs-docs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-docs-sidenav">
              <li><a href="#description">Description</a></li>
              <li><a href="#application">Application Features</a></li>
              <li><a href="#examples">Screenshots &amp; Examples</a>
                <ul class="nav">
                  <li><a href="#examples-dashboard">Dashboard</a></li>
                  <li><a href="#examples-start">Start</a></li>
                  <li><a href="#examples-stop">Stop</a></li>
                  <li><a href="#examples-restart">Restart</a></li>
                  <li><a href="#examples-create">Create</a></li>
                  <li><a href="#examples-modify">Modify</a></li>
                  <li><a href="#examples-remove">Remove</a></li>
                </ul>
              </li>
              <li><a href="#technology">Technology Used</a></li>
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
    <script src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>includes/js/docs.min.js"></script>
  </body>
</html>