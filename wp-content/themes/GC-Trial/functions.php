<?php
// remove top margin
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


add_action( 'admin_menu', 'my_plugin_menu' );


function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'Manage Staff Page', 'manage_options', 'my-unique-identifier', 'staff_options' );
}


function staff_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<h2>Add a New Staff Member</h2>';

  echo '<p>Image:</p>';
  echo '<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload"></br>';

  echo '<p>Name:</p>';
  echo '<input></input>';

  echo '<p>Title:</p>';
  echo '<input></input>';


  echo '<p>Department:</p>';
  echo '<input></input>';

  echo '<p>Description (for details page):</p>';
  echo '<textarea></textarea>';
  echo '</br><input type="submit" value="Save This Staff Member" name="submit">';

	echo '</div>';


}


// end of starting php tag
 ?>
