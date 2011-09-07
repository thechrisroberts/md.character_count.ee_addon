<?php
//$this->EE-cp->set_variable('cp_page_title', $this->EE->lang->line('extension_settings'));

// TODO : The breadcrumbs
//echo "<pre>"; print_r($ext_settings); echo "</pre>";
echo heading($lang_extension_title. " <small>$version_number</small>");
echo form_open('C=addons_extensions'.AMP.'M=save_extension_settings'.AMP.'file=md_character_count');
?>
<table class="mainTable padTable" border="0" style="margin-top:18px; width:100%" >
	<thead>
	<tr>
		<th colspan='2'><?php echo $lang_access_rights; ?></th>
	</tr>
	</thead>
	<tr class="odd" >
		<td  class='tableCellOne'  style='width:30%;'> 
			<div class='defaultBold' ><?php echo $lang_enable_ext; ?></div> 
		</td> 
		<td> 
			<?php
			echo form_dropdown('enable', array('y' => 'Yes', 'n' => 'No'), $ext_settings['enable']);
			?>
		</td> 
	</tr> 
</table>
<!--
<table class="mainTable padTable" border="0" style="margin-top:18px; width:100%" >
	<thead>
	<tr>
		<th colspan='2' ><?php echo $lang_scripts_title; ?></th>
	</tr>
	</thead>
	<tr class="odd" >
		<td colspan="2" ><div class='box' style='border-width:0 0 1px 0; margin:0; padding:10px 5px'><p><?php echo $lang_scripts_info; ?></p></div></td>
	</tr>
	<tr class="even" >
		<td style="width: 40%" ><b><?php echo $lang_jquery_path_lbl; ?></b></td>
		<td>
			<?php
			echo form_input(array(
					'name' => 'jquery_core_path',
					'id' => 'jquery_core_path',
					'value' => $ext_settings['jquery_core_path'],
					
				));
			?>
		</td>
	</tr>
	<tr class="odd" >
		<td style="width: 40%" ><b><?php echo $lang_cc_pi_path_lbl; ?></b></td>
		<td>
			<?php
			echo form_input(array(
				'name' => 'charcounter_plugin_path',
				'id' => 'charcounter_plugin_path',
				'value' =>$ext_settings['charcounter_plugin_path']
			));
			?>
		</td>
	</tr>
</table>
-->
<table class="mainTable padTable" border="0" style="margin-top:18px; width:100%" >
	<thead>
	<tr>
		<th colspan='4' ><?php echo $lang_fields_title; ?></th>
	</tr>
	</thead>
	<tr class="odd" >
		<td colspan='4' ><?php echo $lang_fields_info; ?></td>
	</tr>
<?php
    $i = 0; $group_name = null;
	foreach($channel_fields as $row)
	{
		$count_max    = @$ext_settings['field_defaults'][$row->field_id]['count_max'];
	    $count_type   = @$ext_settings['field_defaults'][$row->field_id]['count_type'];
	    $count_format = @$ext_settings['field_defaults'][$row->field_id]['count_format'];
		
		$row_class = ($i++ % 2) ? 'odd' : 'even';
		if ($group_name != $row->group_name)
		{
			echo '<tr>'
    		    .'   <td colspan="4" style="background-color:#BECED5" ><b>Channel : '.$row->group_name.'</b></td>'
			    .'</tr>'
			    .'<tr style="font-weight: bold;" >'
			    .'   <td style="width: 25%" ><div>&nbsp;</div></td>'
			    .'   <td>'.$lang_ct_count.'</td>'
			    .'   <td>'.$lang_ct_count_type.'</td>'
			    .'   <td>'.$lang_ct_count_format.'</td>'
			    .'</tr>';
			
			$group_name = $row->group_name;
		}
		
		echo '<tr>'
		    .'   <td>'.$row->field_label.'</td>'
		    .'   <td>'.form_input(array('name' => 'field_defaults['.$row->field_id.'][count_max]', 'value' => $count_max, "style" => "width:80px")).'</td>'
		    .'   <td>'.form_dropdown('field_defaults['.$row->field_id.'][count_type]', array('true' => 'Soft', 'false' => 'Hard'), $count_type).'</td>'
		    .'   <td>'.form_input(array('name' => 'field_defaults['.$row->field_id.'][count_format]', 'value' => $count_format, "style" => "width: 200px")).'</td>'
		    .'</tr>';

	}
?>
</table>
<table class="mainTable padTable" border="0" style="margin-top:18px; width:100%" >
	<thead>
	<tr>
		<th colspan='2' ><?php echo $lang_css_title; ?></th>
	</tr>
	</thead>
	<tr>
		<td style="width:40%" ><?php echo $lang_css_info; ?></td>
		<td><?php echo form_textarea(array('id' => 'css', 'name' => 'css', 'rows' => '18', 'value' => $ext_settings['css'])); ?></td>
	</tr>
	
</table>
<div><?php echo form_submit("Submit", "Update Settings"); ?></div>
<?php echo form_close()?> <!-- END settings_form -->
<?php
/* End of file settings_form.php */
/* Location ./system/expressionengine/third_party/md_character_count/views/settings_form.php */
?>