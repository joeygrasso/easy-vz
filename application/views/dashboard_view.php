<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">

    <title>Virtualization Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>includes/css/dashboard.css" rel="stylesheet">
    
    <!-- Progress Bar Stuff -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/progressBar.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

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
            <li class="active"><a href="<?php echo base_url(); ?>index.php/site/dashboard">Overview</a></li>
            <li><a href="#" data-toggle="modal" data-target="#startModal">Start Guest</a></li>
            <li><a href="#">Stop Guest</a></li>
            <li><a href="#">Restart Guest</a></li>
            <li><a href="#">Create Guest</a></li>
            <li><a href="#">Modify Guest</a></li>
            <li><a href="#">Remove Guest</a></li>
            <li>&nbsp;</li>
            <li><a href="javascript:document.location.reload();">Refresh</a></li>
      <li><a href="<?php echo base_url().'site/signout'; ?>">Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Virtualization Dashboard</h1>
      
      <h3 class="sub-header">Host Status</h3>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>Hard Drive Status</h4>
              <?php 
        $this->load->helper('HdStatus');
        getHdStatus();
              ?>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>System Memory Status</h4>
              <?php
        $this->load->helper('ramstatus');
        getRamStatus();
        ?>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>CPU Usage Status</h4>
               <?php
        $this->load->helper('cpustatus');
        getCpuStatus();
        ?>
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

    <!-- Begin Start Modal -->
    <div id="startModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Start OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); echo form_open('vzScripts/start'); ?>
        <div class="modal-body">
                  <p>Please enter the CID of the appropriate container you wish to start:</p>
                  <?php echo validation_errors(); ?>
          <div class="form-group">
         <?php echo form_label('ContainerID', 'cid');
          $data = array(
                    'name'        => 'cid',
                    'id'          => 'cid',
                    'class'       => 'form-control',
                    'placeholder' => 'CID',
                    'maxlength'   => '4',
                    'size'        => '50',
                );
          echo form_input($data); ?>
          </div>
        </div>
        <div class="modal-footer">
          <?php $data = array(
              'name' => 'cancel',
              'id' => 'cancel_button',
              'class' => 'btn btn-default',
              'type' => 'button',
              'data-dismiss' => 'modal',
              'content' => 'Cancel'
          );
          echo form_button($data);
          $data = array(
            'name' => 'start',
              'id' => 'start',
              'class' => 'btn btn-primary',
              'type' => 'submit',
              'content' => 'Start'
          );
          echo form_button($data); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!-- End Start Modal -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>
  </body>
</html>
