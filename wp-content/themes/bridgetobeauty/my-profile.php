<?php  
	
	global $wpdb;
	/*Template Name: my-profile*/


	function test($test) {

		echo "<pre>";
		print_r($test);
		echo "</pre>";

		return;

	}


	get_header();



	if (isset($_POST['submit'])) {



		$target_dir = wp_upload_dir();

		test($target_dir);
		
		//$image_path = $target_dir['baseurl'];
		echo $image_path = $target_dir['path']."/";
		echo "<br>";
		test($_FILES);

		$file_name = time()."_".$_FILES["fileToUpload1"]["name"];
		echo $target_file = $image_path.$file_name;

		// file uplod section
		$uploadOk = 1;
		if(!move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)){
			$uploadOk = 0;
		}

		// multiple file upload 
		if(isset($_FILES['fileToUpload2'])){
			$names = $_FILES['fileToUpload2']['name'];
			$tmp_names = $_FILES['fileToUpload2']['tmp_name'];

			// validation 
			if(is_array($names) && !empty($names)){
				$image_path = $image_path;
				foreach ($names as $key => $name) {
					if(empty($name)){
						continue;
					}

					$file_name = time()."_".$name;
					$tmp_name = isset($tmp_names[$key])?$tmp_names[$key]:'';
					if(!empty($tmp_name)){
						$upload_directry = $image_path.$file_name;
						move_uploaded_file($tmp_name, $upload_directry);
					}
				}
			}
		}

		/*
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		

	    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);

	   // echo test($check);

	    if($check !== false) {

	        echo "File is an image - " . $check["mime"] . ".";
	         

	        $uploadOk = 1;

	    } else {

	        echo "File is not an image.";index

	        $uploadOk = 0;
	    }
	    */


		$uer_ex = $wpdb->escape(trim($_POST['number']));
		$user_img = $wpdb->escape(trim($_FILES["fileToUpload1"]["name"]));

		/*$userdata = [
				'user_expre' => $uer_ex, 
				'user_img' => $user_img,
				'user_pass' => $user_pass,
				'role' => $role
			];*/

		if ( !empty( $uer_ex ) ) {
        	update_user_meta( $current_user->ID, 'user_expre', esc_attr( $uer_ex ) );
		}

		if ( !empty( $user_img ) ) {
        	update_user_meta( $current_user->ID, 'user_image', esc_attr( $user_img ) );
		}

	}


?>


<h1>My profile</h1>


<form method="POST" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Experience </td> 
			<td><input type="number" name="number" min="0"></td>
		</tr>

		<tr>
			<td> Profile Picture </td> 
			<td><input type="file" name="fileToUpload1" id="fileToUpload1"></td>
		</tr>

		<tr>
			<td>Picture Upload </td> 
			<td><input type="file" name="fileToUpload2[]" id="fileToUpload2" multiple></td>
		</tr>

		<tr>
			<td>Location </td> 
			<td><textarea name="addre"></textarea></td>
		</tr>

		<tr>
			<td>Price/Service</td>
			<td><input type="text" name="servie"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>

	</table>

</form>



<form action="search.php"  method="get">
	<input type="text" name="search_text">
	<button type="submit">Search</button>
</form>





<table>
	<tr>
		<td>Experience</td>
		<td><?php echo get_user_meta( "3", 'user_image', true ); ?></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><?php  ?></td>
	</tr>
</table>

<?php get_footer(); ?>