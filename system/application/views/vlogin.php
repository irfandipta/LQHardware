<h4> Login User </h4>

<?php echo form_open('clogin/usermasuk'); ?>
<table>
<tr>
	<td> Username </td>
	<td> : <?php echo form_input('username'); ?> </td>
</tr>
<tr>
	<td> password </td>
	<td> : <?php echo form_password('pass'); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Login'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>