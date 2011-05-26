<script type="text/javascript" src="<?php echo base_url(); ?>/template/js/jquery.roundabout-1.0.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>/template/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/template/js/jquery.roundabout-shapes-1.1.js"></script>

<script type="text/javascript">
            
    $(document).ready(function() { //Start up our Project Preview Carosuel
        $('ul#folio_scroller').roundabout({
            easing: 'easeOutInCirc',
            shape: 'waterWheel',
            duration: 600
        });
    });
</script>
<div class="grid_10" >
    <h4><?php echo $portofolio['title_portofolio']; ?></h4>
    <p>

        <?php echo $portofolio['content_portofolio']; ?>  

    </p>
</div>
<div class="grid_14 clearfix">
    <?php if (isset($screenshot)) { ?>
        <div id="folio_scroller_container" >
            <ul id="folio_scroller"> 
               
                <?php foreach ($screenshot as $screen) { ?>
                <li ><span><?php echo $screen['title_screenshot'] ?></span><a href="#"><img alt="" src="<?php echo base_url(); ?>/portofolio/<?php echo $screen['name_path'] ?>" width="600" height="300"/></a></li> 

                <?php } ?>
            </ul> 
        </div>
    <?php } ?>
</div>