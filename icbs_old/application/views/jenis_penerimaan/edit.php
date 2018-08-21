<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Text Fields
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">

            <?php
            echo form_open('jenis_penerimaan/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id_jenis_penerimaan', $jenis_penerimaan['id_jenis_penerimaan']);
            ?>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    MATA JENIS
                </label>
                <?php $cek = $this->session->userdata('id_guru');
                // 
                if (!empty($cek)) {?>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $jenis_penerimaan['nama_jenis_penerimaan'];?>" name="nama_jenis_penerimaan" placeholder="MASUKAN NAMA MAPEL" id="form-field-1" class="form-control" readonly>
                </div>
                <?php } else{ //untuk sekolah?>
                    <div class="col-sm-9">
                    <input type="text" value="<?php echo $jenis_penerimaan['nama_jenis_penerimaan'];?>" name="nama_jenis_penerimaan" placeholder="MASUKAN NAMA MAPEL" id="form-field-1" class="form-control">
                </div>
                <?php } ?>
                    <!-- <?php echo $this->session->userdata('nama_lengkap') ?> -->
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('jenis_penerimaan', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>