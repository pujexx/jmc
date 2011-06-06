<?php $this->load->view('admin/ckeditor');?>

<?php echo form_open('admin/portofolio/newportofolio');?>
<?php echo form_input('judul'); ?>

<?php echo $this->ckeditor->editor("content_portofolio");?>

