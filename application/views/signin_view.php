<!--
	  <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please Sign In</h2>
        <input type="email" class="form-control" placeholder="User Name" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="radio">
          <input type="radio" value="remember-me" style="float: none;"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
-->
      <?php
		$this->load->helper('form');
      
		$attributes = array('class' => 'form=signin', 'role' => 'form');
		echo form_open(site/login_validation, $attributes)
			
			echo validation_errors();
			
			$data = array('name'=>'username','id'=> 'username','value'=> 'User Name','class'=>'form-control');
			echo form_input($data);
			
			$data = array('name'=>'password','id'=> 'password','value'=> 'password','class'=>'form-control','type'=>'password');
			echo form_password($data);
			
			$data = array('name'=> 'remember','id'=> 'remember','value'=> 'remember-me','style'=>'float:none');
			echo form_radio($data);
			
			$data = array('class'=>'btn btn-lg btn-primary btn-block','value'=>'Sign In','type'=>'submit','content'=>'Sign In');
			echo form_button($data);
		
		echo form_close();
      
      ?>
