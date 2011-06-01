<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>IN ADMIN PANEL | Powered by INDEZINER</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/admin/css/style.css" />
        <?php $this->load->view('admin/js'); ?>

    </head>
    <body>
        <div id="main_container">

            <?php $this->load->view('admin/header'); ?>
            <?php $this->load->view('admin/top_menu'); ?>



            <div class="center_content">



                <div class="left_content">

                    <?php $this->load->view('admin/search'); ?>
                    <?php $this->load->view('admin/sidebar'); ?>

                    <?php $this->load->view('admin/sidebar_content'); ?>

                </div>

                <div class="right_content">

                    <?php if (!empty($content)): ?>
                        <?php $this->load->view($content); ?>
                    <?php endif; ?>


                </div><!-- end of right content-->


            </div>   <!--end of center content -->


            <div class="clear"></div>
        </div> <!--end of main content-->


        <?php $this->load->view('admin/footer'); ?>

    </div>
</body>
</html>