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
            <li><a href="#" data-toggle="modal" data-target="#stopModal">Stop Guest</a></li>
            <li><a href="#" data-toggle="modal" data-target="#restartModal">Restart Guest</a></li>
            <li><a href="#" data-toggle="modal" data-target="#createModal">Create Guest</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modifyModal">Modify Guest</a></li>
            <li><a href="#" data-toggle="modal" data-target="#removeModal">Remove Guest</a></li>
            <li>&nbsp;</li>
            <li><a href="javascript:document.location.reload();">Refresh</a></li>
            <li><a href="<?php echo base_url().'site/signout'; ?>">Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- Message Passed From vzScripts upon successful execution of action -->
          <!-- Echo out any validation errors as well -->
          <?php echo $msg; ?>

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
                <?php 
                  foreach ($data->result() as $row){
                      echo '
                        <tr>
                          <td>'.$row->cid.'</td>
                          <td>'.$row->hostname.'</td>
                          <td>'.$row->operating_system.'</td>
                          <td>'.$row->ip_address.'</td>
                          <td>'.$row->ram.'</td>
                          <td>'.$row->hard_drive.'</td>
                          <td>'.$row->status.'</td>
                        </tr>
                      ';
                  }
                ?>
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
                <h4 class="modal-title">Start A OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); $hidden = array('status' => 'Running');echo form_open('vzScripts/startStop','',$hidden); ?>
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

  <!-- Begin Stop Modal -->
    <div id="stopModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Stop A OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); $hidden = array('status' => 'Stopped');echo form_open('vzScripts/startStop','',$hidden); ?>
        <div class="modal-body">
                  <p>Please enter the CID of the appropriate container you wish to stop:</p>
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
              'content' => 'Stop'
          );
          echo form_button($data); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!-- End Stop Modal -->

  <!-- Begin Restart Modal -->
    <div id="restartModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Restart A OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); $hidden = array('status' => 'Restart');echo form_open('vzScripts/startStop','',$hidden); ?>
        <div class="modal-body">
                  <p>Please enter the CID of the appropriate container you wish to restart:</p>
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
              'content' => 'Restart'
          );
          echo form_button($data); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!-- End Restart Modal -->

  <!-- Begin Create Modal -->
    <div id="createModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create A OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); $hidden = array('status' => 'Stopped');echo form_open('vzScripts/create_container','',$hidden); ?>
        <div class="modal-body">
                  <p>Please fill out all of the following fields to create a new container:</p>
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
        <div class="form-group">
          <?php echo form_label('Hostname', 'hostname');
          $data = array(
                    'name'        => 'hostname',
                    'id'          => 'hostname',
                    'class'       => 'form-control',
                    'placeholder' => 'Hostname',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Operating System', 'operatingsystem');
          $data = array(
                    'name'        => 'operatingsystem',
                    'id'          => 'operatingsystem',
                    'class'       => 'form-control',
                    'placeholder' => 'Operating System',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
          </div>
          <div class="form-group">
          <?php echo form_label('IP Address', 'ipaddress');
          $data = array(
                    'name'        => 'ipaddress',
                    'id'          => 'ipaddress',
                    'class'       => 'form-control',
                    'placeholder' => 'IP Address',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('RAM', 'ram');
          $data = array(
                    'name'        => 'ram',
                    'id'          => 'ram',
                    'class'       => 'form-control',
                    'placeholder' => 'RAM Allocation',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Hard Drive', 'harddrive');
          $data = array(
                    'name'        => 'harddrive',
                    'id'          => 'harddrive',
                    'class'       => 'form-control',
                    'placeholder' => 'Hard Drive Space',
                    'maxlength'   => '50',
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
              'content' => 'Create'
          );
          echo form_button($data); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!-- End Create Modal -->

  <!-- Begin Modify Modal -->
    <div id="modifyModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modify A OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); $hidden = array('status' => 'Stopped');echo form_open('vzScripts/modify_container','',$hidden); ?>
        <div class="modal-body">
                  <p>Please enter the CID for the corresponding container you want to modify. Fill out all of the fields that you want to modify. Fields left blank will not be modified. Only the CID is required, and it must exist for any modifications to be made.</p>
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
        <div class="form-group">
          <?php echo form_label('Hostname', 'hostname');
          $data = array(
                    'name'        => 'hostname',
                    'id'          => 'hostname',
                    'class'       => 'form-control',
                    'placeholder' => 'Hostname',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Operating System', 'operatingsystem');
          $data = array(
                    'name'        => 'operatingsystem',
                    'id'          => 'operatingsystem',
                    'class'       => 'form-control',
                    'placeholder' => 'Operating System',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
          </div>
          <div class="form-group">
          <?php echo form_label('IP Address', 'ipaddress');
          $data = array(
                    'name'        => 'ipaddress',
                    'id'          => 'ipaddress',
                    'class'       => 'form-control',
                    'placeholder' => 'IP Address',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('RAM', 'ram');
          $data = array(
                    'name'        => 'ram',
                    'id'          => 'ram',
                    'class'       => 'form-control',
                    'placeholder' => 'RAM Allocation',
                    'maxlength'   => '50',
                    'size'        => '50',
                );
          echo form_input($data); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Hard Drive', 'harddrive');
          $data = array(
                    'name'        => 'harddrive',
                    'id'          => 'harddrive',
                    'class'       => 'form-control',
                    'placeholder' => 'Hard Drive Space',
                    'maxlength'   => '50',
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
              'content' => 'Modify'
          );
          echo form_button($data); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!-- End Modify Modal -->

  <!-- Begin Remove Modal -->
    <div id="removeModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Remove A OpenVZ Container</h4>
              </div>
            <?php  $this->load->helper('form'); echo form_open('vzScripts/remove_container'); ?>
        <div class="modal-body">
                  <p>Please enter the CID of the appropriate container you wish to remove:</p>
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
              'content' => 'Remove'
          );
          echo form_button($data); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!-- End Remove Modal -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>
  </body>
</html>
