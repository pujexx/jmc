<div class="grid_24" >
    <div class="artikel">
        <?php $i = 1; ?>
        <?php foreach ($portofolios as $portofolio) { ?>
            <div class="<?php
        if ($i % 2 == 1) {
            echo "portoitemleft";
        } else {
            echo "portoitemright";
        }
        ?>">

                <h4><?php echo $portofolio['title_portofolio']; ?></h4>
                <p style="width: 65%; float: left;">
    <?php echo word_limiter($portofolio['content_portofolio'], 40) . anchor('portofolio/more/' . $portofolio['id_portofolio'], 'Readmore'); ?>  
                </p>

                <img src="<?php if ($portofolio['pict_tumbh'] != '') { ?><?php echo base_url() . "/portofolio/tumbh/" . $portofolio['pict_tumbh'];
    } else { ?><?php echo base_url(); ?>/template/images/jmc_tumbh.png<?php } ?>" class="imgportoright" align="right" />

            </div>

            <?php
            $i++;
        }
        ?>
    </div>
    <div class="pagination">
<?php echo $pagination; ?>
    </div>
</div>