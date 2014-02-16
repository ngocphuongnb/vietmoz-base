<?php
/**
 * VietMoz Theme Options
 *
 * @package VietMoz
 */

//Check that the user is allowed to edit these options.
/*if( !current_user_can('manage_options')) {
	wp_die('You do not have sufficient permissions to access this page.');
}*/
function setup_theme_admin_menus() {
	add_submenu_page( 'themes.php', 'VietMoz Theme Options', 'Theme Options', 'manage_options', 'vmz-options', 'vmz_theme_options' );
}
add_action("admin_menu", "setup_theme_admin_menus");
function vmz_theme_options() {
if( !current_user_can('manage_options')) {
	wp_die('You do not have sufficient permissions to access this page.');
}
$options = get_option( 'vmzoptions' );
?>
	<div class="wrap">
		<?php screen_icon('themes'); ?>
		<h2>VietMoz Theme Options</h2>

		<form method="POST" action="">
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="vmz-logo">
							Logo:
						</label>
					</th>
					<td>
	                    <input class="url" type="text" name="vmz-logo" id="logo-url" value="<?php echo $options['logo']; ?>"  />
	                    <input type="button" class="vmz-button-upload" id="logo" value="Upload" />
						<input type="button" class="vmz-button-remove" id="logo-" value="Remove" />
						<br />
	                    <img class="logo-img" src="<?php echo $options['logo']; ?>"/>      
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="vmz-analytics">
							Google Analytics code:
						</label>
					</th>
					<td>
	                    <textarea name="vmz-analytics" cols="50" rows="8"><?php echo $options['analytics']; ?></textarea>
					</td>
				</tr>
			</table>
			<p>
				<input type="submit" value="Save settings" class="button-primary">
			</p>
			<input type="hidden" name="update_settings" value="Y" />
		</form>
	</div>
<?php
}
if (isset($_POST["update_settings"])) {
	$vmzop =  array(
		'logo'		=>	esc_attr( $_POST['vmz-logo'] ),
		'analytics'	=>	esc_attr( $_POST['vmz-analytics'] )
		);
	update_option('vmzoptions', $vmzop);
?>
	<div id="message" class="updated"><p>Settings saved!</p></div>
<?php
}
/**
 * Validate Theme option
 */
function vmz_register_admin_script()
{
    wp_register_script( 'js', get_template_directory_uri().'/inc/theme-options.js', array('jquery','media-upload','thickbox') );  
    
    wp_enqueue_script('jquery');  

    wp_enqueue_script('thickbox');  
    wp_enqueue_style('thickbox');  

    wp_enqueue_script('media-upload');  
    wp_enqueue_script('js');  
 
 
}
add_action('admin_enqueue_scripts', 'vmz_register_admin_script');