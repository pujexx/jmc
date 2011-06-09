<h2>Client</h2>


<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
            <th scope="col" class="rounded-company"><input type="checkbox" name="" onclick=""/></th>
            <th scope="col" class="rounded">Client</th>
            <th scope="col" class="rounded">Details</th>

            <th scope="col" class="rounded">Logo</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($clients as $client) { ?>
            <tr>
                <td><input type="checkbox" name="" /></td>
                <td><?php echo $client['name_client']; ?></td>

                <td><?php echo $client['content_client']; ?></td>
                <td> <img src="<?php
        if ($client['client_tumbh'] != '') {
            echo base_url() . "/client/" . $client['client_tumbh'];
        } else {
            echo base_url() . "/client/jmc_tumbh.png";
        }
        ?>" /></td>

                <td><a href="#"><img src="<?php echo base_url(); ?>template/admin/images/user_edit.png" alt="" title="" border="0" /></a></td>
                <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>template/admin/images/trash.png" alt="" title="" border="0" /></a></td>
            </tr>

<?php } ?>

    </tbody>
</table>

<a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
<a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>


<div class="pagination">
    <?php echo $pagination;?>
</div>
