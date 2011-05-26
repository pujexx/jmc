<div class="grid_24">

    <?php echo $headerjs; ?>
    <?php echo $headerpeta; ?>

    <div class="artikel">
        <div class="peta">
            <?php echo $onload; ?>
            <?php echo $peta; ?>
            <div id="map_directions"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="grid_24" >
    <div class="artikel">   
        <?php if ($contact1 != 0) { ?>
            <h3><?php echo $contact1['contact']['judul']; ?></h3>

            <p>
                <?php echo $contact1['contact']['isi']; ?>
            </p>
        <?php } ?>
    </div>
</div>