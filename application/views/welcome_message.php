<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Ckeditor</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/ckfinder/ckfinder.js"></script>

    </head>
    <body>
        <?php echo form_open('welcome/terima')?>
        <?php
        echo $this->ckeditor->editor("my_editor");
        ?>
         <?php
        echo $this->ckeditor->editor("my_asdeditor");
        ?>
         <?php
        echo $this->ckeditor->editor("my_asdedditor");
        ?>
        <?php echo form_submit('coba');?>
        <?php echo form_close();?>
    </body>
</html>