<script src="<?php echo base_url(); ?>template/js/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script> 
<?php echo form_error('title') . br(1) . form_error('keterangan'); ?>
<?php echo $error; ?>

<?php echo form_open_multipart('admin/client/upload'); ?>

<input type="file" name="userfile" size="20" />

<br />
<?php echo form_input('title'); ?>
<br/>
<?php echo form_input('keterangan'); ?>
<br/>

<input type="submit" value="upload" />

</form>