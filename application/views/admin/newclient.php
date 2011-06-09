<!--<script src="<?php echo base_url(); ?>template/js/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script> -->

<?php echo $error;?>

<?php echo form_open_multipart('admin/client/upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>