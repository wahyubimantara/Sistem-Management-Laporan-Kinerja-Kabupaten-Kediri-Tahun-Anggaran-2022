<?= $this->extend('templates/index'); ?>
<?= $this->section('page_content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan Kinerja</h1>

    <style>
        .table td,
        .table th {
            padding: .0.65rem;
            vertical-align: middle;
        }

        .table thead th {
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

        .hidden {
            visibility: hidden;
        }
    </style>

<script> let param_id= <?php echo $param; ?> ;</script>
    <div class="row">
    
        <div class="table-responsive">

            <table class="table table-responsive-md table-bordered border-dark">
                <thead>
                    <tr style="text-align: center;">
                        <th rowspan="2">Kode</th>
                        <th rowspan="2" colspan="6">Uraian</th>
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
                    <?php $nomor_program = 1 ?>
                    <?php foreach ($program as $p) : ?>
                        <tr>
                            <td class="kecilkan"><strong><?php echo  $p->Kd_Gab_Prog; ?></strong></td>
                            <td colspan="5"><strong><br><?php echo $nomor_program++ . '. ' . $p->Nm_Program; ?></br><br></strong></td>
                            <td class="kiri">&nbsp;</td>
                            <td class="kecilkan" style="text-align: right;"><?php echo number_format($p->SUM_Anggaran_Program, 2, ",", "."); ?></td>
                            <td class="kecilkan" style="text-align: right;"><?php echo number_format($p->SUM_Realisasi_Program, 2, ",", "."); ?></td>
                            <td>100</td>
                            <td colspan="2"><?php echo number_format(($p->SUM_Anggaran_Program != 0) ? ($p->SUM_Realisasi_Program / $p->SUM_Anggaran_Program) * 100 : 0, 2, ",", ".") ?></td>
                            <td>%</td>
                        </tr>

                        <?php $nomor_kegiatan = 1 ?>
                        <?php $kegiatans = $model->get_kegiatan($p)->getResult() ?>
                        <?php foreach ($kegiatans as $k) : ?>
                            <tr>
                                <td class="kecilkan"><?php echo $k->Kd_Gab_Keg; ?></td>
                                <td>&nbsp;</td>
                                <td class="kiri" colspan="4"><?php echo $nomor_kegiatan++ . '&emsp;' . $k->Nm_Kegiatan; ?></td>
                                <td class="kiri">&nbsp;</td>
                                <td class="kecilkan" style="text-align: right;"><?php echo number_format($k->SUM_Anggaran, 2, ",", "."); ?></td>
                                <td class="kecilkan" style="text-align: right;"><?php echo number_format($k->SUM_Realisasi, 2, ",", "."); ?></td>
                                <td>100</td>
                                <td colspan="2"><?php echo number_format(($k->SUM_Anggaran != 0) ? ($k->SUM_Realisasi / $k->SUM_Anggaran) * 100 : 0, 2, ",", ".") ?></td>
                                <td>%</td>
                            </tr>

                            <?php $nomor_sub_kegiatan = 1 ?>
                            <?php $sub_kegiatans = $model->get_sub_kegiatan($k)->getResult() ?>
                            <?php foreach ($sub_kegiatans as $sub_k) : ?>

                                <tr>
                                    <td class="kecilkan" rowspan="2" style="white-space: nowrap;"><?php echo $sub_k->Kd_Gab_Sub_Keg; ?></td>
                                    <td>&nbsp;</td>
                                    <td class="kiri_kanan">&nbsp;</td>
                                    <td colspan="3"><?php echo $nomor_sub_kegiatan++ . '&emsp;' . $sub_k->Nm_Sub_Kegiatan; ?></td>
                                    <td class="kiri" style="min-width: 4.5rem;">
                                        <i class="fas fa-plus" href="#" id="buttonTambahIndikator" data-toggle="modal" data-target="#ModalTambahIndikator" title="Tambah indikator" onclick="tambahIndikator(<?php echo $sub_k->id; ?>)">
                                        </i>
                                    </td>
                                    <td class="kecilkan" style="text-align: right;">&nbsp</td>
                                    <td class="kecilkan" style="text-align: right;">&nbsp</td>
                                    <!-- <td>&nbsp;</td> -->
                                    <td colspan="4">&nbsp;</td>
                                    <!-- <td>&nbsp;</td> -->
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="kiri_kanan">&nbsp;</td>
                                    <td class="kiri" style="white-space: nowrap;">Indikator 1 :</td>
                                    <td class="kiri" colspan="2" style="min-width: 15rem;"> Dana </td>
                                    <td class="kiri">&nbsp;</td>
                                    <?php $anggaran_value = number_format($sub_k->Anggaran, 2, ",", "."); ?>
                                    <?php $realisasi_value = number_format($sub_k->Realisasi, 2, ",", "."); ?>
                                    <td class="kecilkan" style="text-align: right;"><?php echo $anggaran_value; ?></td>
                                    <td class="kecilkan" style="text-align: right;"><?php echo $realisasi_value; ?></td>
                                    <td>100</td>
                                    <td colspan="2"><?php echo number_format(($sub_k->Anggaran != 0) ? ($sub_k->Realisasi / $sub_k->Anggaran) * 100 : 0, 2, ",", ".") ?> </td>
                                    <td>%</td>
                                </tr>


                                <?php $nomor = 2 ?>
                                <?php $indikator = $model->get_indikator($sub_k)->getResult() ?>
                                <?php foreach ($indikator as $i) : ?>
                                    <tr>

                                        <td class="atas">&nbsp;</td>
                                        <td class="kanan">&nbsp;</td>
                                        <td>&nbsp;</td>

                                        <td class="kiri">Indikator <?php echo $nomor++ ?> :</td>
                                        <td class="kiri" colspan="2"><?= $i->tolak_ukur; ?></td>
                                        <td class="kiri">
                                        
                                        <i class="fas fa-trash hapus_indikator"  id="hapus_indikator2" title="hapus indikator" onclick="hapus2(<?php echo $i->id; ?>)">
                                        </i>
                                            <i class="fas fa-edit" href="#" id="buttonEditIndikator" data-toggle="modal" data-target="#ModalEditIndikator" title="edit indikator" onclick="editIndikator(<?php echo $i->id; ?>)">
                                            </i>
                                        </td>
                                        <td colspan="2">&nbsp</td>
                                        <td><?php echo number_format($i->target_angka); ?></td>
                                        <td><?= $i->realisasi; ?> </td>
                                        <td class="kiri" style="width: 2%;">
                                            <i class="fas fa-edit" href="#" id="buttonEdit" data-toggle="modal" data-target="#ModalEdit" title="edit realisasi" onclick="edit(<?php echo $i->id; ?>)">
                                            </i>
                                        </td>
                                        <td><?= $i->target_uraian; ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <!-- End Loop Indikator -->
                            <?php endforeach ?>
                            <!-- End Loop sub kegiatan -->
                        <?php endforeach ?>
                        <!-- End Loop Kegiatan -->
                        </tr>
                    <?php endforeach ?>
                    <!-- End Loop Program -->

                </tbody>
            </table>

            <!-- Modal Edit Realisasi-->
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

            <!-- Modal Edit Indikator-->
            <div class="modal fade" id="ModalEditIndikator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Edit Indikator</h5>
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
                                <label class="col-sm-2 col-form-label">Indikator</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="indikator_isi2">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="indikator_satuan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Target</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="indikator_target">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="userid" class="userid">
                            <button class="btn btn-secondary tombolKeluar" type="button" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary tombolSimpanIndikator" id="tombolSimpanIndikator">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit -->


            <!-- Modal Tambah Indikator-->
            <div class="modal fade" id="ModalTambahIndikator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Indikator</h5>
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
                            <input type="hidden" id="kd_urusan" name="kd_urusan">
                            <input type="hidden" id="kd_bidang" name="kd_bidang">
                            <input type="hidden" id="kd_unit" name="kd_unit">
                            <input type="hidden" id="kd_sub" name="kd_sub">
                            <input type="hidden" id="Kd_Prog" name="Kd_Prog">
                            <input type="hidden" id="Id_Prog" name="Id_Prog">
                            <input type="hidden" id="kode_kegiatan" name="kode_kegiatan">

                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Indikator</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="indikator_tambah">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Rencana</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="rencana_tambah">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Realisasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="realisasi_tambah">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="satuan_tambah">
                                </div>
                            </div>
                            <input type="hidden" id="no_id" name="no_id" value="<?php echo  $kode7->nomor_id; ?>">
                            <input type="hidden" id="kd_indikator" name="kd_indikator" value="<?php echo  $kode7->kode_indikator; ?>">

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="userid" class="userid">
                            <button class="btn btn-secondary tombolKeluar" type="button" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary tombolSimpanTambahIndikator" id="tombolSimpanTambahIndikator">Simpan</button>
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

    function editIndikator($id) {

        $.ajax({
            url: "<?php echo site_url("Tabel/edit") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id != '') {
                    $('#id').val($obj.id);
                    $('#indikator_isi2').val($obj.tolak_ukur);
                    $('#indikator_satuan').val($obj.target_angka);
                    $('#indikator_target').val($obj.target_uraian);

                }
            }
        });
    }

    $('#tombolSimpanIndikator').on('click', function() {

        var $id = $('#id').val();
        var $indikator = $('#indikator_isi2').val();
        $.ajax({
            url: "<?php echo site_url("Tabel/simpan_indikator") ?>",
            type: "POST",
            data: {
                id: $id,
                tolak_ukur: $indikator,
                satuan: $('#indikator_satuan').val(),
                target: $('#indikator_target').val()
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

    function tambahIndikator($id) {

        $.ajax({
            url: "<?php echo site_url("Tabel/edit2") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id != '') {
                    $('#id').val($obj.id);
                    $('#kd_urusan').val($obj.kd_urusan);
                    $('#kd_bidang').val($obj.kd_bidang);
                    $('#kd_unit').val($obj.kd_unit);
                    $('#kd_sub').val($obj.kd_sub);
                    $('#Kd_Prog').val($obj.Kd_Prog);
                    $('#Id_Prog').val($obj.Id_Prog);
                    $('#kode_kegiatan').val($obj.Kd_Keg);
                }
            }
        });
    }

    $('#tombolSimpanTambahIndikator').on('click', function() {


        var $kd_urusan = $('#kd_urusan').val();
        var $kd_bidang = $('#kd_bidang').val();
        var $kd_unit = $('#kd_unit').val();
        var $kd_sub = $('#kd_sub').val();
        var $Kd_Prog = $('#Kd_Prog').val();
        var $Id_Prog = $('#Id_Prog').val();
        var $kode_kegiatan = $('#kode_kegiatan').val();

        var $no_id = $('#no_id').val();
        var $kd_indikator = $('#kd_indikator').val();

        var $indikator_tambah = $('#indikator_tambah').val();
        var $rencana_tambah = $('#rencana_tambah').val();
        var $realisasi_tambah = $('#realisasi_tambah').val();
        var $satuan_tambah = $('#satuan_tambah').val();
        $.ajax({
            url: "<?php echo site_url("Tabel/simpan_tambah_indikator") ?>",
            type: "POST",
            data: {

                kd_urusan: $kd_urusan,
                kd_bidang: $kd_bidang,
                kd_unit: $kd_unit,
                kd_sub: $kd_sub,
                kd_prog: $Kd_Prog,
                id_prog: $Id_Prog,
                kd_keg: $kode_kegiatan,
                no_id: $no_id,
                kd_indikator: $kd_indikator,
                tolak_ukur: $indikator_tambah,
                target_angka: $rencana_tambah,
                target_uraian: $satuan_tambah,
                realisasi: $realisasi_tambah,
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

    function hapus($id) {
 
        var $hasil = confirm("Yakin Anda akan Menghapus Data ini?");
        if ($hasil) {
            window.location = "<?php echo site_url("Edit/hapus") ?>/" + $id;
        }
    }

    function hapus2($id) {
        Swal.fire({
        title: 'Yakin Mau Hapus?',
        html: `Data Yang dihapus bersifat softdelete`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus !',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url: "<?= site_url('Edit/hapus') ?>",
                type: "POST",
                data: {
                    id: $id,
                },
                dataType: "json",
                success: function(response) {
                    if (response.sukses) {
                        Swal.fire({
                            title: 'Berhasil',
                            icon: 'success',
                            text: response.sukses
                        })
                        .then((result) => {
      
                        if (result.isConfirmed) {
                            window.location.reload();
                            
                        }
                        })                
                    }
                },
                error: function(xhr, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }
    })
    }


</script>


<?= $this->endSection(); ?>