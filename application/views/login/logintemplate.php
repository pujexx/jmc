<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/admin/css/style.css" />


<script type="text/javascript" src="<?php echo base_url();?>template/admin/js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});

</script>

<script language="javascript" type="text/javascript" src="<?php echo base_url();?>template/admin/js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>template/admin/css/niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header_login">
    <div class="logo"><a href="#"><img src="<?php echo base_url();?>template/admin/images/logo.gif" alt="" title="" border="0" /></a></div>

    </div>


         <div class="login_form">

         <h3>Admin Panel Login</h3>

         <a href="#" class="forgot_pass">Forgot password</a>

         <form action="" method="post" class="niceform">

                <fieldset>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="" id="" size="54" /></dd>
                    </dl>

                    <dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Remember me</label>
                        </dd>
                    </dl>

                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>

                </fieldset>

         </form>
         </div>



    <div class="footer_login">

    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
    	<div class="right_footer_login"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>

    </div>

</div>
</body>
</html>