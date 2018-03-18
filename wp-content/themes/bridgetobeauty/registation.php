<?php  
	/*
	Template Name: registation
	*/

	get_header();




	global $wpdb;
	if (isset($_POST['regis'])) {
		$first_name = $wpdb->escape(trim($_POST['uname']));
		$last_name = $wpdb->escape(trim($_POST['ulastn']));
		$user_email = $wpdb->escape(trim($_POST['uemail']));
		//$role = $wpdb->escape(trim($_POST['urole']));
		$user_pass = $wpdb->escape(trim($_POST['upassword']));

		if ( is_email( $user_email )) {
			$userdata = [
				'user_login' => $first_name, 
				'user_email' => $user_email,
				'user_pass' => $user_pass,
				//'role' => $role
			];
			
			$user_id = wp_insert_user( $userdata );
			if (! is_wp_error( $user_id )) { ?>
			
				<script type="text/javascript">
					alert("User created ' <?php echo $user_id; ?> '");
				</script>

			<?php }
		} else {
			echo "Not a valid email address given";
		}
	}
?>


<h1 class="header-w3ls">Stunning Sign Up and Login Form</h1>
			<div class="mid-cls">
			<div class="swm-left-w3ls">

				<form action="" method="post">
			<div class="main">
				<div class="icon-head-wthree">
			        <h2><span class="fa fa-diamond t-w3" aria-hidden="true"></span></h2>
					<h4>Sign Up</h4>
					</div>
						<div class="form-left-to-w3l">

							<input type="text" name="uname" placeholder="Name" required="">
							<div class="clear"></div>
						</div>
						<div class="form-left-to-w3l">

							<input type="text" name="ulastn" placeholder="Last Name" required="">
							<div class="clear"></div>
						</div>
						<div class="form-left-w3l">
						
							<input type="email" name="uemail" placeholder="Email" required="">
						</div>
						<div class="form-right-w3ls ">

							<input type="password" name="upassword" placeholder="Password" required="">

							<div class="clear"></div>
						</div>
						<div class="btnn">
							<button type="submit" name="regis">Sign Up</button><br>
							<div class="clear"></div>
						</div>
			</div>

		</form>

<?php get_footer(); ?>