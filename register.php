<?php 
	require_once 'includes/Template.php';
	get_header('login'); 
?>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_register">
				
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>You have been successfully registered.</h3>
					<p>We have emailed you the confirmation link for your account.</p>
				</div>
				
				<div class="form-steps">
					
					<div class="step current" id="step-1">

						<div class="form-group">
							<div class="input-group user-url">
								<div class="input-group-addon">
									<i class="entypo-globe"></i>
								</div>								
								<input type="text" class="form-control" name="name" id="name" placeholder="" autocomplete="off" />
								<span class="site-url">.bildkopie.com</span>
								<i class="entypo-check ui-validate accepted"></i>
								<!-- <i class="entypo-cancel ui-validate invalid"></i> -->
							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="fname" id="name" placeholder="Name" autocomplete="off" />
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="lname" id="name" placeholder="Lastname" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>								
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" data-mask="phone" autocomplete="off" />
							</div>
						</div>
						
						
						<div class="form-group">
							<button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Nächster Schritt
							</button>
						</div>
						
						<div class="form-group">
							Schritt 1 von 2
						</div>
					
					</div>
					
					<div class="step" id="step-2">					
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-mail"></i>
								</div>
								
								<input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="password" id="password" placeholder="Passwort" autocomplete="off" />
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="password" id="password" placeholder="Passwort wiederholen" autocomplete="off" />
							</div>
						</div>

						

						<div class="form-group pad-20">
							<div class="row">
								<div class="checkbox checkbox-replace">
									<div class="col-sm-1"><input type="checkbox" id="chk-23"></div>
									<div class="col-sm-10 align-left">Ich habe <a href="#">Nutzungsbedingen</a> gelesen und akzeptiere diese.</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Complete Registration
							</button>
						</div>
						
						<div class="form-group">
							Schritt 2 von 2
						</div>
						
					</div>
					
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-login.html" class="link">
					<i class="entypo-lock"></i>
					Return to Login Page
				</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php get_footer('login');?>