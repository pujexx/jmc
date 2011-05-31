
<div class="grid_24" >
    <div class="artikel">
        <?php foreach ($clients as $client) { ?>
            <div class="clientitem">
                <h4><?php echo $client['name_client']; ?></h4>
                <img src="<?php if ($client['client_tumbh'] != '') {
            echo base_url() . "/client/" . $client['client_tumbh'];
        } else {
            echo base_url() . "/client/jmc_tumbh.png";
        } ?>" />
                <p><?php echo $client['content_client']; ?></p>
            </div>
<?php } ?>
    </div>
    <div class="pagination">
<?php echo $pagination; ?>
    </div>
</div>