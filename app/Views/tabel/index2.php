<?= $this->extend('templates/index'); ?>
<?= $this->section('page_content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan Kinerja</h1>

    <style>
        .table td, .table th{
            padding: .0.65rem;
            vertical-align: middle;
        }
        .table thead th{
            vertical-align: middle; 
        }
        .table {
        color: #535356;
        }
        .kiri_kanan {
            border-right: hidden !important;
            border-left: hidden !important;
        }
        .kecilkan {
            font-size: 0.8em;
        }

        .kiri {
            border-left: hidden !important;
        }
        .kanan {
            border-right: hidden !important;
        }
        .atas {
            border-top-style: hidden !important;
        }
    </style>

    <div class="row">
        <div class="table-responsive">
        <a href="<?= base_url(); ?>/cetak" type="button" class="btn btn-info" target="_blank" style="margin-bottom: 2%; margin-left: 1%; float:right;">Print</a>
            <table class="table table-responsive-md table-bordered border-dark">
                <thead>
                    <tr style="text-align: center;">
                        <th rowspan="2" >Kode</th>
                        <th rowspan="2" colspan="5">Uraian</th>
                        <th colspan="2">Belanja</th>
                        <th colspan="4">Hasil</th>
                    </tr>
                    <tr style="text-align: center;">
                        <th>Anggaran</th>
                        <th>Realisasi</th>
                        <th>Rencana</th>
                        <th colspan="2">Realisasi</th>
                        <th>Satuan</th>
                    </tr>
                </thead>

                <tbody>
                <?php $nomor_program=1 ?>
                    <?php foreach ($program as $p) : ?>
                        <tr>
                            <td class="kecilkan"><strong><?php echo  $p->Kd_Gab_Prog; ?></strong></td>
                            <td colspan="5"><strong><br><?php echo $nomor_program++ . '. '. $p->Nm_Program; ?></br><br></strong></td>
                            <td colspan="2"></td>
                            <td colspan="4"></td>
                        </tr>

                        <?php $nomor_kegiatan=1 ?>
                        <?php $kegiatans = $model->get_kegiatan($p)->getResult() ?>
                        <?php foreach ($kegiatans as $k) : ?>
                            <tr>
                                <td class="kecilkan"><?php echo $k->Kd_Gab_Keg; ?></td>
                                <td>&nbsp;</td>
                                <td class="kiri" colspan="4"><?php echo $nomor_kegiatan++ . '&emsp;'.$k->Nm_Kegiatan; ?></td>
                                <td class ="kecilkan" style="text-align: right;"><?php echo number_format($k->SUM_Anggaran, 2, ",", "."); ?></td>
                                <td class ="kecilkan" style="text-align: right;"><?php echo number_format($k->SUM_Realisasi, 2, ",", "."); ?></td>
                                <!-- <td>&nbsp;</td> -->
                                <td colspan="4">&nbsp;</td>
                                <!-- <td>&nbsp;</td> -->
                            </tr>

                            <?php $nomor_sub_kegiatan=1 ?>
                            <?php $sub_kegiatans = $model->get_sub_kegiatan($k)->getResult() ?>
                            <?php foreach ($sub_kegiatans as $sub_k) : ?>

                                <tr>
                                    <td class ="kecilkan" rowspan="2" style="white-space: nowrap;"><?php echo $sub_k->Kd_Gab_Sub_Keg; ?></td>
                                    <td>&nbsp;</td>
                                    <td class="kiri_kanan">&nbsp;</td>
                                    <td colspan="3"><?php echo $nomor_sub_kegiatan++ . '&emsp;'. $sub_k->Nm_Sub_Kegiatan; ?></td>
                                    <td class ="kecilkan" style="text-align: right;"><?php echo number_format("$sub_k->Anggaran", 2, ",", "."); ?></td>
                                    <td class ="kecilkan" style="text-align: right;"><?php echo number_format("$sub_k->Realisasi", 2, ",", "."); ?></td>
                                    <!-- <td>&nbsp;</td> -->
                                    <td colspan="4">&nbsp;</td>
                                    <!-- <td>&nbsp;</td> -->
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="kiri_kanan">&nbsp;</td>
                                    <td class="kiri" style="white-space: nowrap;" >Indikator 1 :</td>
                                    <td class="kiri" colspan ="2" style="min-width: 15rem;"> Dana </td>
                                    <td class ="kecilkan" style="text-align: right;"><?php echo number_format($sub_k->Anggaran, 2, ",", "."); ?></td>
                                    <td class ="kecilkan" style="text-align: right;"><?php echo number_format($sub_k->Realisasi, 2, ",", "."); ?></td>
                                    <!-- <td>&nbsp;</td> -->
                                    <td colspan="4"> &nbsp;</td>
                                    <!-- <td>&nbsp;</td> -->
                                </tr>

                             
                                <?php $nomor=2 ?>
                                <?php $indikator = $model->get_indikator($sub_k)->getResult() ?>
                                <?php foreach ($indikator as $i) : ?>
                                <tr>

                                    <td class="atas">&nbsp;</td>
                                    <td class="kanan">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    
                                    <td class="kiri">Indikator <?php echo $nomor++ ?> :</td>  
                                    <td class="kiri" colspan ="2"><?= $i->tolak_ukur;?></td>
                                    <td colspan="2">&nbsp</td>
                                    <td><?php echo number_format ($i->target_angka);?></td>
                                    <td><?= $i->realisasi;?> </td>
                                    <td class="kiri" style="width: 2%;">
                                        <a href="#" data-toggle="modal" data-target="#ModalEdit" 
                                            onclick ="edit(<?php echo $i->id;?>)">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td><?= $i->target_uraian;?></td>
                                </tr>
                                <?php endforeach ?>  <!-- End Loop Indikator -->
                            <?php endforeach ?> <!-- End Loop sub kegiatan -->
                        <?php endforeach ?> <!-- End Loop Kegiatan -->
                        </tr>
                    <?php endforeach ?><!-- End Loop Program -->
                    
                </tbody>
            </table>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Alert -->
                                        <div class="alert alert-danger error" role="alert" style="display : none;"></div>
                                        <div class="alert alert-success sukses" role="alert" style="display : none;"></div>
                                        <!-- Alert  -->
                                        <input type="hidden" id="id" name="id">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Indikator</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="indikator_isi" disabled>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">Realisasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="realisasi">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="modal-footer">
                                        <input type="hidden" name="userid" class="userid">
                                        <button class="btn btn-secondary tombolKeluar" type="button" data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary tombolSimpan" id="tombolSimpan">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit -->

        </div>
    </div>

</div>

<?= $this->endSection(); ?>
<?= $this->section('scriptku'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
        function edit($id) {

        $.ajax({
            url: "<?php echo site_url("Tabel/edit") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id != '') {
                    $('#id').val($obj.id);
                    $('#indikator_isi').val($obj.tolak_ukur);
                    $('#realisasi').val($obj.realisasi);
                }
            }
        });
    }

    $('#tombolSimpan').on('click', function() {
        
        var $id = $('#id').val();
        var $realisasi = $('#realisasi').val();
        $.ajax({
            url: "<?php echo site_url("Tabel/simpan") ?>",
            type: "POST",
            data: {
                id: $id,
                realisasi: $realisasi,
            },

            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').show();
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html($obj.sukses);
                }
                swal("Good job!", "You clicked the button!", "success");
                location.reload(true);
            }
        });

    });

</script>


<?= $this->endSection(); ?>