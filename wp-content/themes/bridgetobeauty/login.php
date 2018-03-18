<?php  

	/* Template Name: login*/

	get_header();
?>

<h1>Login</h1>


<?php  

	$args = array(
		'echo'           => true,
		'remember'       => true,
		'redirect'       => site_url('my-profile'),
		'form_id'        => 'loginform',
		'id_username'    => 'user_login',
		'id_password'    => 'user_pass',
		'id_remember'    => 'rememberme',
		'id_submit'      => 'wp-submit',
		'label_username' => __( '' ),
		'label_password' => __( '' ),
		'label_remember' => __( 'Remember Me' ),
		'label_log_in'   => __( 'Log In' ),
		'value_username' => '',
		'value_remember' => false
	);
	wp_login_form( $args  );

?>

<?php get_footer(); ?>