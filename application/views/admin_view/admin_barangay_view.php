<div id="content_area" class="grid_12 barangay">
	<form id="add_barangay" action="<?php echo site_url(); ?>/admin/add_barangay" method="post">
		<h1>Add Barangay</h1>
		<table>
			<tr>
				<td><label for="barangay_name">Barangay</label></td>
				<td><input type="text" name="barangay_name" id="barangay_name" /></td>
			</tr>
			<tr>
				<td><label for="captain">Captain</label></td>
				<td><input type="text" name="captain" id="captain" value="editable" /></td>
			</tr>
			<tr>
				<td><label for="contact_number">Contact Number</label></td>
				<td><input type="text" name="contact_number" id="contact_number" value="editable" /></td>
			</tr>
		</table>
		<input type="submit" value="Add" />
	</form>
</div>