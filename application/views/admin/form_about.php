<script type="text/javascript" >
    $(document).ready(function(){
        $("#editaboutup").click(function(){
            $("#editoraboutup").slideToggle(1000);
        });
        $("#editaboutleft").click(function(){
            $("#editoraboutleft").slideToggle(1000);
        });
        $("#editaboutcenter").click(function(){
            $("#editoraboutcenter").slideToggle(1000);
        });
        $("#editaboutright").click(function(){
            $("#editoraboutright").slideToggle(1000);
        });
    });

</script>
<style >
    #editoraboutup{
        width: auto;
        height: auto;
        display: none;

    }
    #editoraboutleft{
        width: auto;
        height: auto;
        display: none;

    }  #editoraboutcenter{
        width: auto;
        height: auto;
        display: none;

    } 
    #editoraboutright{
        width: auto;
        height: auto;
        display: none;

    } 

</style>
<?php $this->load->view('admin/ckeditor'); ?>

<div class="artikel">
    <h3><?php echo $about[1]['title']; ?></h3>
    <p>
        <?php echo $about[1]['content']; ?>
    </p>
    <a href="#" class="bt_green" id="editaboutup"><span class="bt_green_lft"></span><strong>edit</strong><span class="bt_green_r"></span></a>
</div>


<div id="editoraboutup">
    <?php echo form_open(); ?>
    <?php echo form_input('judul1', $about[1]['title']); ?>
    <?php echo $this->ckeditor->editor("aboutupcontent", $about[1]['content']); ?>
    <?php echo form_submit('about1', 'save'); ?>
    <?php echo form_close(); ?>
</div>


<div class="artikel">
    <h3><?php echo $about[2]['title']; ?></h3>
    <p>
        <?php echo $about[2]['content']; ?>
    </p>
    <a href="#" class="bt_green" id="editaboutleft"><span class="bt_green_lft"></span><strong>edit</strong><span class="bt_green_r"></span></a>
</div>


<div id="editoraboutleft">
    <?php echo form_open(); ?>
    <?php echo form_input('judul2', $about[2]['title']); ?>
    <?php echo $this->ckeditor->editor("aboutleftcontent", $about[2]['content']); ?>
    <?php echo form_submit('about2', 'save'); ?>
    <?php echo form_close(); ?>
</div>


<div class="artikel">
    <h3><?php echo $about[3]['title']; ?></h3>
    <p>
        <?php echo $about[3]['content']; ?>
    </p>
    <a href="#" class="bt_green" id="editaboutcenter"><span class="bt_green_lft"></span><strong>edit</strong><span class="bt_green_r"></span></a>
</div>

<div id="editoraboutcenter">
    <?php echo form_open(); ?>
    <?php echo form_input('judul3', $about[3]['title']); ?>
    <?php echo $this->ckeditor->editor("aboutcentercontent", $about[3]['content']); ?>
    <?php echo form_submit('about2', 'save'); ?>
    <?php echo form_close(); ?>
</div>

<div class="artikel">
    <h3><?php echo $about[4]['title']; ?></h3>
    <p>
        <?php echo $about[4]['content']; ?>
    </p>
    <a href="#" class="bt_green" id="editaboutright"><span class="bt_green_lft"></span><strong>edit</strong><span class="bt_green_r"></span></a>
</div>

<div id="editoraboutright">
    <?php echo form_open(); ?>
    <?php echo form_input('judul4', $about[4]['title']); ?>
    <?php echo $this->ckeditor->editor("aboutrightcontent", $about[4]['content']); ?>
    <?php echo form_submit('about2', 'save'); ?>
    <?php echo form_close(); ?>
</div>