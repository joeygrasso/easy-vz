      <?php
		$this->load->helper('form');

		$attributes = array('class' => 'form-signin', 'role' => 'form');
		echo form_open('site/login_validation', $attributes);
			echo "<h2 class=\"form-signin-heading\">Please Sign In</h2>";
			echo validation_errors();
			
			$data = array('name'=>'username','id'=> 'username','placeholder'=> 'User Name','class'=>'form-control');
			echo form_input($data);
			
			$data = array('name'=>'password','id'=> 'password','placeholder'=> 'password','class'=>'form-control','type'=>'password');
			echo form_password($data);
			
			$data = array('name'=> 'remember','id'=> 'remember','value'=> 'remember-me','style'=>'float:none');
			echo form_checkbox($data);
			echo form_label('Remember Me', 'remember');
			
			$data = array('class'=>'btn btn-lg btn-primary btn-block','value'=>'Sign In','type'=>'submit','content'=>'Sign In');
			echo form_button($data);
		
		echo form_close();
      
      ?>
