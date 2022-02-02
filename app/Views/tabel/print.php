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

    <style>
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
            border: 1px solid #3e3e3e;
        }

        .table thead th {
            border-bottom: 2px #3e3e3e;
        }

        .table {
            color: #121212;
        }

        .border-dark {
            border-color: #000000 !important;
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

        @media print {
            @page {
                size: Legal landscape;

            }
        }

        

        body {
            margin-left: 3cm;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.8rem;
            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            text-align: left;
            background-color: #fff;
        }
    </style>

</head>

<body id="page-top">

    <div class="container-fluid">

        <div class="row">

            <div class="table-responsive">
                <table class="table table-responsive-md table-bordered border-dark">
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
                                <td colspan="5"><strong><br><?php echo $nomor_program++ . '. ' . $p->Nm_Program; ?></br><br></strong></td>
                                <td style="text-align: right;"><?php echo number_format($p->SUM_Anggaran_Program, 2, ",", "."); ?></td>
                                <td style="text-align: right;"><?php echo number_format($p->SUM_Realisasi_Program, 2, ",", "."); ?></td>
                                <td>100</td>
                                <td colspan="1"><?php echo number_format((100.0 * $p->SUM_Realisasi_Program / $p->SUM_Anggaran_Program), 2, ",", ".") ?></td>
                                <td>%</td>
                            </tr>

                            <?php $nomor_kegiatan = 1 ?>
                            <?php $kegiatans = $model->get_kegiatan($p)->getResult() ?>
                            <?php foreach ($kegiatans as $k) : ?>
                                <tr>
                                    <td class="kecilkan"><?php echo $k->Kd_Gab_Keg; ?></td>
                                    <!-- <td>&nbsp;</td> -->
                                    <td colspan="5">&emsp;<?php echo $nomor_kegiatan++ . '&emsp;' . $k->Nm_Kegiatan; ?></td>
                                    <td style="text-align: right;"><?php echo number_format($k->SUM_Anggaran, 2, ",", "."); ?></td>
                                    <td style="text-align: right;"><?php echo number_format($k->SUM_Realisasi, 2, ",", "."); ?></td>
                                    <td>100</td>
                                    <td colspan="1"><?php echo number_format((100.0 * $k->SUM_Realisasi / $k->SUM_Anggaran), 2, ",", ".") ?></td>
                                    <td>%</td>
                                </tr>

                                <?php $nomor_sub_kegiatan = 1 ?>
                                <?php $sub_kegiatans = $model->get_sub_kegiatan($k)->getResult() ?>
                                <?php foreach ($sub_kegiatans as $sub_k) : ?>

                                    <tr>
                                        <td class="kecilkan" rowspan="2" style="white-space: nowrap;"><?php echo $sub_k->Kd_Gab_Sub_Keg; ?></td>
                                        <!-- <td>&nbsp;</td>
                                        <td class="kiri_kanan">&nbsp;</td> -->
                                        <td colspan="5">&emsp;&emsp;&ensp;<?php echo $nomor_sub_kegiatan++ . '&emsp;' . $sub_k->Nm_Sub_Kegiatan; ?></td>
                                        <td style="text-align: right;">&nbsp</td>
                                        <td style="text-align: right;">&nbsp</td>
                                        <!-- <td>&nbsp;</td> -->
                                        <td colspan="4">&nbsp;</td>
                                        <!-- <td>&nbsp;</td> -->
                                    </tr>

                                    <tr>
                                        <!-- <td>&nbsp;</td>
                                        <td class="kiri_kanan">&nbsp;</td> -->
                                        <td colspan="3" style="white-space: nowrap;">&emsp;&emsp;&emsp;&emsp;Indikator 1 :</td>
                                        <td class="kiri" colspan="2" style="min-width: 15rem;"> Dana </td>
                                        <?php $anggaran_value = number_format($sub_k->Anggaran, 2, ",", "."); ?>
                                        <?php $realisasi_value = number_format($sub_k->Realisasi, 2, ",", "."); ?>
                                        <td style="text-align: right;"><?php echo $anggaran_value; ?></td>
                                        <td style="text-align: right;"><?php echo $realisasi_value; ?></td>
                                        <td>100</td>
                                        <td colspan="1"><?php echo number_format((100.0 * $sub_k->Realisasi / $sub_k->Anggaran), 2, ",", ".") ?> </td>
                                        <td>%</td>
                                    </tr>

                                    <?php $nomor = 2 ?>
                                    <?php $indikator = $model->get_indikator($sub_k)->getResult() ?>
                                    <?php foreach ($indikator as $i) : ?>
                                        <tr>

                                            <td class="atas">&nbsp;</td>
                                            <!-- <td class="kanan">&nbsp;</td> -->
                                            <!-- <td>&nbsp;</td> -->

                                            <td colspan="3">&emsp;&emsp;&emsp;&emsp;Indikator <?php echo $nomor++ ?> :</td>
                                            <td class="kiri" colspan="2"><?= $i->tolak_ukur; ?></td>
                                            <td colspan="2">&nbsp</td>
                                            <td><?php echo number_format($i->target_angka); ?></td>
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