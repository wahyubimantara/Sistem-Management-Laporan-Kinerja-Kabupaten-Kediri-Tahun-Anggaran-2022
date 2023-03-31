<?= $this->extend('templates/index'); ?>
<?= $this->section('page_content'); ?>
<?php 
  function fnumber($v) 
  {
    if(round($v) == $v)
        return round($v);
    return number_format($v, 2, ',', '.');
  }
  ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan Kinerja</h1>

    <style>
        .table td{
            padding-top: 1px;
            padding-bottom: 1px;
            padding-right: 2px;
            vertical-align: middle;
        }
        
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

        .kecilkan {
            font-size: 0.8em;
        }

        .hidden {
            visibility: hidden;
        }

        .kode{
            padding-right: 2px;
        }

        td {
            line-height: 1.3;
        }
        
        tr.lv1 td {
            line-height: 1.7;
            font-weight: bold;
        }
        .kiri {
            border-left: hidden !important;
        }
        
        

    </style>

    <div class="row">
        <div class="table-responsive">
            <input type="hidden" id="id" name="id" value="<?php echo user()->id; ?>">
            <?php $kunci = user()->kunci; ?>
            <?php if ($kunci == '0') { ?>
            <button type="button" class="btn btn-warning" value="1" id="final" style="margin-bottom: 2%; margin-left: 1%; float:right;">Finalisasi</button>
            <?php   } ?>
            <a href="<?= base_url(); ?>/cetak" type="button" class="btn btn-info" target="_blank" style="margin-bottom: 2%; margin-left: 1%; float:right;">Print</a>
            <table class="table table-responsive-md table-bordered border-dark">
                <thead>
                    <tr style="text-align: center;">
                        <th rowspan="2">Kode</th>
                        <th rowspan="2">Uraian (Program/Kegiatan/Sub Kegiatan/Indikator)</th>
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
                    <?php foreach ($storeProcedure as $sp) : ?>
                        <tr class="lv<?php echo $sp->level ?>">
                                <td class="kode"><?php echo  $sp->kode; ?></td>
                                <td style="padding-left: <?php echo $sp->level . '%'?>;"><?php echo  $sp->uraian; ?></td>
                                <td style="text-align: right; "><?php echo $sp->anggaranBlj == null ? "" : number_format($sp->anggaranBlj, 2, ",", ".")  ; ?></td>
                                <td style="text-align: right; "><?php echo $sp->realisasiBlj == null ? "" : number_format($sp->realisasiBlj, 2, ",", ".") ; ?></td>
                                <td ><?php echo  $sp->target; ?></td>
                                <td><?php echo  $sp->realisasi; ?></td>
                                <td class="kiri" style="width: 2%;">
                                <?php if ($sp->level == 4 and $sp->uraian != "Dana") { ?>
                                    <i class="fas fa-edit" href="#" id="buttonEdit" data-toggle="modal" data-target="#ModalEdit" title="edit realisasi" onclick="edit(<?php echo $sp->no_id; ?>)"></i>
                                <?php   } ?>
                                </td>
                                <td style="text-align:center; "><?php echo  $sp->satuan; ?></td>
                        </tr>
                        
                    <?php endforeach ?>
                    <!-- End Loop-->

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
        </div>

<?= $this->endSection(); ?>
<?= $this->section('scriptku'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function edit($id) {

        $.ajax({
            url: "<?php echo site_url("EditKinerja/edit") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id != '') {
                    $('#id').val($obj.id);
                    $('#indikator_isi').val($obj.namaIndikator);
                    $('#realisasi').val($obj.realisasi);
                }
            }
        });
    }

    $('#tombolSimpan').on('click', function() {

        var $id = $('#id').val();
        var $realisasi = $('#realisasi').val();
        $.ajax({
            url: "<?php echo site_url("EditKinerja/simpanRealisasi") ?>",
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


    $('#final').on('click', function() {
        var $id = $('#id').val();
        Swal.fire({
        title: 'Yakin Mau Finalisasi?',
        html: `Data yang sudah difinalisasi bersifat final <br> Apabila ingin mengubahnya lagi harap hubungi <br>Admin (Bidang Akuntansi)`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Finalisasi !',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url: "<?= site_url('Admin/finalisasi') ?>",
                type: "POST",
                data: {
                    id: $id,
                    kunci: 1,
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
    })

</script>


<?= $this->endSection(); ?>