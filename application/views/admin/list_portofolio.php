<h2>Products Portofolio</h2>

<script ></script>
<form method="post" action="<?php echo site_url();?>/admin/portofolio/delete" name="action">
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
            <th scope="col" class="rounded-company"><input type="checkbox" name="" onclick=""/></th>
            <th scope="col" class="rounded">Product</th>
            <th scope="col" class="rounded">Details</th>
            <th scope="col" class="rounded">Tumbh</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>

    <tbody>
        
        <?php foreach ($portofolios as $portofolio) { ?>
            <tr>
                <td><input type="checkbox" name="delete[]" /></td>
                <td><?php echo $portofolio['title_portofolio'];?></td>
                <td><?php echo word_limiter($portofolio['content_portofolio'],10);?></td>
                <td><?php //if($portofolio['pict_tumbh']!=null){echo img('');}?></td>
                <td><a href="#"><img src="<?php echo base_url(); ?>template/admin/images/user_edit.png" alt="" title="" border="0" /></a></td>
                <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>template/admin/images/trash.png" alt="" title="" border="0" /></a></td>
            </tr>

        <?php } ?>

    </tbody>
</table>
</form>
<a href="<?php echo site_url();?>/admin/portofolio/newportofolio" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="<?php echo site_url();?>/admin/portofolio/newportofolio" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>


<div class="pagination">
    <?php echo $pagination; ?>
</div>
