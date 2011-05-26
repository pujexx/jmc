<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Login Admin</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/template/admin/css/screen.css" type="text/css" media="screen" title="default" />
        <!--  jquery core -->
        <script src="<?php echo base_url(); ?>/template/admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

        <!-- Custom jquery scripts -->
        <script src="<?php echo base_url(); ?>/template/admin/js/jquery/custom_jquery.js" type="text/javascript"></script>

        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="<?php echo base_url(); ?>/template/admin/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).pngFix( );
            });
        </script>
    </head>
    <body id="login-bg"> 

        <!-- Start: login-holder -->
        <div id="login-holder">

            <!-- start logo -->
            <div id="notif">

            </div>
            <div id="logo-login">
                <p>sip</p>
            </div>
            <!-- end logo -->

            <div class="clear"></div>
            <div id="notiflogin">
                <?php
                echo form_error('username') . form_error('password');
                ?>
            <?php echo $this->session->flashdata('login_notif');?>
            </div>
            <!--  start loginbox ................................................................................. -->
            <div id="loginbox">

                <!--  start login-inner -->

                <?php echo form_open('administrator/index'); ?>

                <div id="login-inner">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Username</th>
                            <td><input type="text"  name="username" class="login-inp" /></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password"  name="password" onfocus="this.value=''" class="login-inp" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="submit-login"  /></td>
                        </tr>
                    </table>
                </div>
                <?php echo form_close(); ?>
                <!--  end login-inner -->
                <div class="clear"></div>
                <a href="" class="forgot-pwd">Forgot Password?</a>
            </div>
            <!--  end loginbox -->

            <!--  start forgotbox ................................................................................... -->
            <div id="forgotbox">
                <div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
                <!--  start forgot-inner -->
                <div id="forgot-inner">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Email address:</th>
                            <td><input type="text" value=""   class="login-inp" /></td>
                        </tr>
                        <tr>
                            <th> </th>
                            <td><input type="button" class="submit-login"  /></td>
                        </tr>
                    </table>
                </div>
                <!--  end forgot-inner -->
                <div class="clear"></div>
                <a href="" class="back-login">Back to login</a>
            </div>
            <!--  end forgotbox -->

        </div>
        <!-- End: login-holder -->
    </body>
</html>