<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>


    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css" media="screen, print">
        .table td,
        .table th {
            padding: .0.65rem;
            vertical-align: middle;
        }

        .table thead th {
            vertical-align: middle;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #3e3e3e !important;
        }

        .table thead th {
            border-bottom: 2px #3e3e3e !important;
        }

        .table {
            color: #121212;
        }

        .h6,
        h6 {
            font-size: 0.8rem;
        }

        @media print {
            @page {
                size: Legal landscape;
            }



            .border-dark {
                border-color: #000000 !important;
            }
        }


        body {
            margin-left: 1.5cm;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            text-align: left;
            background-color: #fff;
        }
    </style>

</head>

<?php 
  function fnumber($v) 
  {
    if(round($v) == $v)
        return round($v);
    return number_format($v, 2, ',', '.');
  }
  ?>
<body id="page-top">
    <?php

    setlocale(LC_TIME, 'id_ID.utf8');

    $hariIni = new DateTime();
    ?>

    <div class="container-fluid">

        <div class="row">
            <div class="sidebar-brand-icon" style="margin-left: 0.5rem; margin-top: 0.7rem;">
                <img src="<?php echo base_url(); ?>/img/logo-pemkab.png" style="height: 45px;">
            </div>
            <div class="card" style="width: 30rem; border:none; margin: 0 auto;float: none;">
                <div class="card-body" style="color: black; padding: 0.8rem;">
                    <h6 style="text-align: center; margin-bottom: 0rem; font-size:14px;"><strong>LAPORAN KINERJA SATUAN KERJA PERANGKAT DAERAH TAHUN ANGGARAN 2021</strong></h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-responsive table-borderless">
                    <tbody style="font-size: 12px;color:black; font-weight: bold;">
                        <tr>
                            <td style="min-width: 226px;">
                                Urusan Pemerintahan
                            </td>
                            <td>:</td>

                            <td><?php echo  $kop->Nm_Bidang_Gab; ?></td>
                        </tr>
                        <tr>
                            <td>
                                Unit Organisasi
                            </td>
                            <td>:</td>

                            <td><?php echo  $kop->Nm_Unit_Gab; ?></td>
                        </tr>
                        <tr>
                            <td>
                                Sub Unit Organisasi
                            </td>
                            <td>:</td>

                            <td><?php echo  $kop->Nm_Sub_Unit_Gab; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row">
            <div class="table-responsive">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr style="text-align: center;">
                            <th rowspan="2">Kode</th>
                            <th rowspan="2" colspan="5">Uraian</th>
                            <th colspan="2">Belanja</th>
                            <th colspan="3">Hasil</th>
                        </tr>
                        <tr style="text-align: center;">
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Rencana</th>
                            <th colspan="1">Realisasi</th>
                            <th>Satuan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor_program = 1 ?>
                        <?php foreach ($program as $p) : ?>
                            <tr style=" font-weight: bold;">
                                <td class="kecilkan"><strong><?php echo  $p->Kd_Gab_Prog; ?></strong></td>
                                <td colspan="5">
                                    <strong>
                                        &emsp;
                                        <ol start="<?php echo $nomor_program++; ?>">
                                            <li><?php echo $p->Nm_Program; ?></li>
                                        </ol>
                                    </strong>

                                </td>
                                <td style="text-align: right;"><?php echo number_format($p->SUM_Anggaran_Program, 2, ",", "."); ?></td>
                                <td style="text-align: right;"><?php echo number_format($p->SUM_Realisasi_Program, 2, ",", "."); ?></td>
                                <td>100</td>
                                <td colspan="1"><?php echo number_format(($p->SUM_Anggaran_Program != 0) ? ($p->SUM_Realisasi_Program / $p->SUM_Anggaran_Program) * 100 : 0, 2, ",", ".") ?></td>
                                <td>%</td>
                            </tr>
                            <?php $nomor_kegiatan = 1 ?>
                            <?php $kegiatans = $model->get_kegiatan($p)->getResult() ?>
                            <?php foreach ($kegiatans as $k) : ?>
                                <tr>
                                    <td class="kecilkan"><?php echo $k->Kd_Gab_Keg; ?></td>
                                    <td style="width: 0.1rem; border-right: hidden !important;"></td>
                                    <td colspan="4">
                                        <ol start="<?php echo $nomor_kegiatan++; ?>" style="margin-top: 0.2rem;margin-bottom: 0.2rem;">
                                            <li><?php echo $k->Nm_Kegiatan; ?></li>
                                        </ol>
                                    </td>
                                    <td style="text-align: right;"><?php echo number_format($k->SUM_Anggaran, 2, ",", "."); ?></td>
                                    <td style="text-align: right;"><?php echo number_format($k->SUM_Realisasi, 2, ",", "."); ?></td>
                                    <td>100</td>
                                    <td colspan="1"><?php echo number_format(($k->SUM_Anggaran != 0) ? ($k->SUM_Realisasi / $k->SUM_Anggaran) * 100 : 0, 2, ",", ".") ?></td>
                                    <td>%</td>
                                </tr>

                                <?php $nomor_sub_kegiatan = 1 ?>
                                <?php $sub_kegiatans = $model->get_sub_kegiatan($k)->getResult() ?>
                                <?php foreach ($sub_kegiatans as $sub_k) : ?>

                                    <tr>
                                        <td class="kecilkan" rowspan="2" style="white-space: nowrap;"><?php echo $sub_k->Kd_Gab_Sub_Keg; ?></td>
                                        <td style="width: 0.1rem;"></td>
                                        <td style="width: 0.1rem;border-right: hidden !important;border-left: hidden !important;"></td>
                                        <td colspan="3">
                                            <ol start="<?php echo $nomor_sub_kegiatan++; ?>" style="margin-bottom: 0;">
                                                <li><?php echo $sub_k->Nm_Sub_Kegiatan; ?></li>
                                            </ol>
                                        </td>
                                        <!-- <td colspan="6">&nbsp</td> -->
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                 
                                    </tr>

                                    <tr>
                                        <!-- <td>&nbsp;</td>
                                        <td class="kiri_kanan">&nbsp;</td> -->
                                        <td colspan="3" style="white-space: nowrap;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Indikator 1 :</td>
                                        <td colspan="2" style="min-width: 15rem; border-left: hidden !important;"> Dana </td>
                                        <?php $anggaran_value = number_format($sub_k->Anggaran, 2, ",", "."); ?>
                                        <?php $realisasi_value = number_format($sub_k->Realisasi, 2, ",", "."); ?>
                                        <td style="text-align: right;"><?php echo $anggaran_value; ?></td>
                                        <td style="text-align: right;"><?php echo $realisasi_value; ?></td>
                                        <td>100</td>
                                        <td colspan="1"><?php echo number_format(($sub_k->Anggaran != 0) ? ($sub_k->Realisasi / $sub_k->Anggaran) * 100 : 0, 2, ",", ".") ?> </td>
                                        <td>%</td>
                                    </tr>

                                    <?php $nomor = 2 ?>
                                    <?php $indikator = $model->get_indikator($sub_k)->getResult() ?>
                                    <?php foreach ($indikator as $i) : ?>
                                        <tr>

                                            <td style="border-top-style: hidden !important;">&nbsp;</td>
                                            <td colspan="3">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Indikator <?php echo $nomor++ ?> :</td>
                                            <td colspan="2" style="border-left: hidden !important;"><?= $i->tolak_ukur; ?></td>
                                            <td colspan="1">&nbsp</td>
                                            <td colspan="1">&nbsp</td>
                                            <td><?php echo fnumber($i->target_angka); ?></td>
                                            <td><?= $i->realisasi; ?> </td>
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

            </div>
        </div>
        <!--
        <div class="row" style="float:right; ">
            <div class="card" style="width: 18rem; border:none; ">
                <div class="card-body" style="color: black;">
                    <h6 style="text-align: center;">Kediri,&emsp;<?php echo strftime('%B %Y', $hariIni->getTimestamp()) ?></h6>
                    <h6 style="text-align: center;"><?php echo  $ttd->jbt_pimpinan; ?></h6>
                    <br> <br> <br> <br>
                    <h6 style="text-align: center; margin-bottom: 0rem; "><strong><?php echo  $ttd->nm_pimpinan; ?></strong></h6>
                    <hr style="margin-top: 0rem; margin-bottom: 0rem; width:85%;border-top: 1px solid rgb(12 12 12 / 67%);">
                    <h6 style="text-align: center; margin-top: 0rem; ">NIP.&nbsp;<?php echo  $ttd->nip_pimpinan; ?></h6>

                </div>
            </div>
        </div>
                                    -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>