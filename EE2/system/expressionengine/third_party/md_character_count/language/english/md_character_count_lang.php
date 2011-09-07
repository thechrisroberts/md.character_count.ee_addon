<?php
/*
Extension:     ext.md_character_count.php
Created:       May 18 2008
Last Modified: Nov 14 2008
=================================================
ryan masuga, masugadesign.com
ryan@masugadesign.com | Copyright 2008
================================================= */
$lang = array(

'extension_title'                  => 'MD Character Count',
'access_rights'                    => 'Extension Access',
'enable_extension_for_this_site'   => 'Enable MD Character Count for this site?',

'scripts_title' 					         => 'Scripts',
'scripts_info' 				             => 'MD Character Count requires a modified version of <a href="http://www.tomdeater.com/jquery/character_counter/">the jQuery Charcounter Plugin</a> (modified version is bundled with the extension).',
'jquery_core_path_label'           => 'jQuery Core v1.2.6',
'charcounter_plugin_path_label'    => '<b>Path to Charcounter jQuery Plugin</b> <span style="font-weight: normal" >(note this is a modified version for MD Character Count that adds the \'softcount\' setting.)</span>',

'css_title' 					             => 'CSS',
'css_info' 					               => 'The CSS style information for the counter. The ".charcounter_err" class is added to fields that are set to "soft" counts where the character count goes over the max.',

'fields_title' 					           => 'Character Count Fields',
'fields_info' 				             => '<strong>Count</strong><br />
If field is left blank then no count will display or be imposed.<br /><br />
<strong>Count Type</strong><br />
A "soft" count allows the user to type beyond the max set in "Count". When the max is exceeded, the Count Format will change style (specified in CSS below) as a warning. A hard count will cap the text entry so that the Count cannot be exceeded. <strong>NOTE:</strong> Be careful assigning a field that already has data in it to a "hard" count, as you will lose the characters beyond the number in your Count field.
<br /><br />
<strong>Count Format</strong><br />
If nothing is entered, the format will default to: "<strong>%1/{count} characters remaining</strong>" where "%1" is the number of typed characters, and {count} is the number entered in the Count field. You can enter anything here (note that {count} is not a real variable. If you need the max shown in the Count Format, you have to enter it manually). Using "20" for a sample count, you might try:<br /><br />
<ol style="padding-left: 25px" >
<li><strong>20 max (%1 left) Hard count.</strong></li>
<li><strong>(%1/20)</strong></li>
<li><strong>20 characters suggested. You have %1 left. (Soft count).</strong></li>
</ol>
',

'coltitle_count'                   => 'Count',
'coltitle_count_type'              => 'Count Type',
'coltitle_count_format'            => 'Count Format',
'maximum_label'                    => 'Max',

'check_for_updates_title' 	       => 'Check for updates?',
'check_for_updates_info' 	         => 'MD Character Count can call home (<a href="http://masugadesign.com/">http://masugadesign.com</a>) and check for recent updates. <em>(Requires the <a href="http://leevigraham.com/cms-customisation/expressionengine/lg-addon-updater/">LG Addon Updater</a> Extension)</em>',
'check_for_updates_error'	         => 'Your php ini must have <code>allow_url_fopen</code> enabled to use this feature.',
'check_for_updates_label' 	       => 'Would you like this extension to check for updates and display them on your CP homepage?',
'cache_refresh_label' 		         => 'How many minutes you like the update check cached for?',
'settings_update_success'			=> 'Settings updated successfully.',
'settings_update_failure'			=> 'Settings update failed.',

// END
''=>''
);
?>