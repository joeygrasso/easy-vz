<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Favicon Shit
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">  -->

    <title>Virtualization Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>includes/css/dashboard.css" rel="stylesheet">
    
    <!-- Progress Bar Stuff -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="./includes/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Start Guest</a></li>
            <li><a href="#">Stop Guest</a></li>
            <li><a href="#">Create Guest</a></li>
            <li><a href="#">Modify Guest</a></li>
            <li><a href="#">Remove Guest</a></li>
            <li>&nbsp;</li>
            <li><a href="#">Refresh</a></li>
			<li><a href="<?php echo base_url().'site/signout'; ?>">Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Virtualization Dashboard</h1>
			
		  <h3 class="sub-header">Host Status</h3>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>Available Hard Drive Space</h4>
              <!--<span class="text-muted"><text style="font-size: 1.75em">25 GB</text></span> -->
              <?php 
				$this->load->helper('HdStatus');
				getHdStatus();
              ?>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>Available System Memory</h4>
              <span class="text-muted"><text style="font-size: 1.75em">8 GB </text></span>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>CPU Usage</h4>
              <span class="text-muted"><text style="font-size: 1.75em">23%</text></span>
            </div>
          </div>

          <h2 class="sub-header">Virtual Guests</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>CID #</th>
                  <th>Hostname</th>
                  <th>Operating System</th>
                  <th>IP Address</th>
                  <th>RAM</th>
				  <th>Hard Drive Space</th>
				  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
				  <td>sit</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
				  <td>sit</td>
                  <td>adipiscing</td>
                  <td>elit</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
				  <td>sit</td>
                  <td>odio</td>
                  <td>Praesent</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
				  <td>sit</td>
                  <td>cursus</td>
                  <td>ante</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
				  <td>sit</td>
                  <td>nisi</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
				  <td>sit</td>
                  <td>at</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
				  <td>sit</td>
                  <td>Duis</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
				  <td>sit</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
				  <td>sit</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
				  <td>sit</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
				  <td>sit</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
				  <td>sit</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
				  <td>sit</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>
  </body>
</html>
