<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="jogja Media center" />
        <meta name="keywords" content="sortware, XML" />
        <title>Jogja Media Center</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>/template/css/reset.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/template/css/text.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/template/css/960_24_col.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/template/css/style.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>/template/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/template/js/script.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/template/js/jquery.dimensions.js"></script>
        <script language="javascript">
            var name = "#floatMenu";
            var menuYloc = null;
	
            $(document).ready(function(){
                menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
                $(window).scroll(function () { 
                    offset = menuYloc+$(document).scrollTop()+"px";
                    $(name).animate({top:offset},{duration:500,queue:false});
                });
            }); 
        </script>

    </head>
    <body>
        <div id="floatMenu">
            <a href="#" ><img src="<?php echo base_url(); ?>/template/images/OrderNow.png" /></a>

        </div>
        <div class="container_24">
            <div class="grid_24">
                <?php echo img('template/images/logo.png');?>
              <?php echo $setting['header'] ?>
            </div>

            <div class="grid_24">
                <div id="menuatas">
                    <ul >
                        <li ><a href="<?php echo site_url(); ?>/home" >Home</a></li>
                        <li><a href="<?php echo site_url(); ?>/about#">About</a></li>
                        <li><a href="<?php echo site_url(); ?>/portofolio#" >Portofolio</a></li>
                        <li><a href="<?php echo site_url(); ?>/client" >Client</a></li>
                        <li><a href="<?php echo site_url(); ?>/contact" >Contact</a></li>
                        <li><a href="<?php echo site_url(); ?>/order" >Order</a></li>
                        <li><input type="text" size="20" id="serach"/></a></li>
                        <!--			<li><a href="#">Contact</a></li>-->
                    </ul>
                </div>
            </div>
          
            <div class="clear"></div>
            <?php $this->load->view($content); ?>
            <div class="clear"></div>

            <div class="grid_24 footer">
                <br/>
                <?php echo $setting['footer']; ?>
            </div>

            <!-- end .grid_12.pull_12 -->
            <div class="clear"></div>
        </div>
        <p style="text-align: center;">&COPY; puji rahmadiyanto design</p>
        <!-- end .container_24 -->
    </body>
</html>