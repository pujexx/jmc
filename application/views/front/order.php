<div class="grid_24">
    <?php echo form_open('order/index'); ?>
    <div class="notif">
        <?php echo form_error('nama'); ?>
        <?php echo form_error('email'); ?>
        <?php echo form_error('alamat'); ?>
        <?php echo form_error('notelp'); ?>

    </div>
    <table border="0" cellpadding="1" align="center">

        <tr>
            <td>Nama </td>
            <td><input type="text" name="nama" value="" size="50" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="" size="50" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="4" cols="38">
                </textarea></td>
        </tr>
        <tr>
            <td>Nomor telp</td>
            <td><input type="text" name="notelp" value="" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Order" /></td>
        </tr>

    </table>
    <?php echo form_close(); ?>
</div>