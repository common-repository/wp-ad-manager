<?php

	// Saving our Options.
	if ($_POST['administer_savesettings'] == "1") {
		echo '<div id="message" class="updated fade"><p><strong>' . __('Options saved.') . '</strong></p></div>';
		update_option('administer_dashboard_period', $_POST['administer_dashboard_period']);
		update_option('administer_dashboard_percentage', $_POST['administer_dashboard_percentage']);
		update_option('administer_user_level', $_POST['administer_user_level']);

		// Checkboxes...
		$names = array('administer_make_widgets', 'administer_dashboard_show', 'administer_statistics');
		foreach ($names as $name) {
			$value = ($_POST[$name] == 'on') ? 'true' : 'false';
			update_option($name, $value);		
		}
	}

	// Default settings
	if (!strlen(get_option('administer_make_widgets'))) 
		update_option('administer_make_widgets', 'true');

	if (!strlen(get_option('administer_statistics'))) 
		update_option('administer_statistics', 'true');

	if (!strlen(get_option('administer_dashboard_show'))) 
		update_option('administer_dash board_show', 'true');

	if (!strlen(get_option('administer_dashboard_period')))
		update_option('administer_dashboard_period', '7');

	if (!strlen(get_option('administer_dashboard_percentage')))
		update_option('administer_dashboard_percentage', '20');

	if (!strlen(get_option('administer_user_level')))
		update_option('administer_user_level', '7');
?>

<h3>Settings</h3>


	<form method="post" action="tools.php?page=<?php echo dirname(plugin_basename (__FILE__)); ?>&amp;tab=settings">
	<input type="hidden" id="administer_savesettings" name="administer_savesettings" value="1" />
<table class="form-table">
 <tr>
 	<th scope="row" valign="top"><?php _e('Notifications', 'ad-minister'); ?></th>
 	<td>
		<input type="checkbox" id="administer_dashbaord_show" name="administer_dashboard_show" <?php if (get_option('administer_dashboard_show') == 'true') echo ' checked="checked" '; ?> /> <label for="administer_dashbaord_show"><?php _e('Alert on the Dashboard of upcoming content expiration or activation.', 'ad-minister'); ?></label><br />
		<?php _e('Number of days to check for upcoming events', 'ad-minister'); ?>: <input type="text" name="administer_dashboard_period" value="<?php echo get_option('administer_dashboard_period'); ?>" style="width: 40px;" /><br />
		<?php _e('Minimum percentage of clicks/impressions left before alerting', 'ad-minister'); ?>: <input type="text" name="administer_dashboard_percentage" value="<?php echo get_option('administer_dashboard_percentage'); ?>" style="width: 40px;" />
 	</td>
 </tr>
 <tr>
 	<th scope="row" valign="top"><?php _e('Theme widets', 'ad-minister'); ?></th>
 	<td>
		<input type="checkbox" id="administer_make_widgets" name="administer_make_widgets" <?php if (get_option('administer_make_widgets') == 'true') echo ' checked="checked"'; ?> /> <label for="administer_make_widgets"><?php _e('Make theme widgets?', 'ad-minister'); ?></label>
 	</td>
 </tr>

 <tr>
 	<th scope="row" valign="top"><?php _e('Statistics', 'ad-minister'); ?></th>
 	<td>
		<input type="checkbox" id="administer_statistics" name="administer_statistics" <?php if (get_option('administer_statistics') == 'true') echo ' checked="checked"'; ?> /> <label for="administer_statistics"><?php _e('Log content impressions and clicks?', 'ad-minister'); ?></label>
 	</td>
 </tr>
 
  <tr>
 	<th scope="row" valign="top"><?php _e('User access', 'ad-minister'); ?></th>
 	<td>
		 <?php _e('The minimum <a href="http://codex.wordpress.org/User_Levels">User Level</a> required to access Ad-minister.', 'ad-minister'); ?>

			<select name="administer_user_level">
				<?php $ul = get_option('administer_user_level'); ?>
				<option value="10" <?php if ($ul == '10') echo 'selected="selected"'; ?>><?php _e('Administrator', 'ad-minister'); ?></option>
				<option value="7" <?php if ($ul == '7') echo 'selected="selected"'; ?>><?php _e('Editor', 'ad-minister'); ?></option>
				<option value="2" <?php if ($ul == '2') echo 'selected="selected"'; ?>><?php _e('Author', 'ad-minister'); ?></option>
				<option value="1" <?php if ($ul == '1') echo 'selected="selected"'; ?>><?php _e('Contributor', 'ad-minister'); ?></option>
			</select>
 	</td>
 </tr>
 
</table>


	<p class="submit">
		<input class="button-primary" type="submit" name="Submit" value="<?php _e('Update Settings', 'ad-minister') ?>" />
	</p>

</form>