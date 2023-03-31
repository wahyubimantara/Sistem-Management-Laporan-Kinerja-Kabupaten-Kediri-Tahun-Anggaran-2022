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

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #818582 !important;
        }

        .table thead th {
            border-bottom: 2px #818582 !important;
        }

        .table {
            color: #121212;
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
                    <h6 style="text-align: center; margin-bottom: 0rem; font-size:14px;"><strong>LAPORAN KINERJA SATUAN KERJA PERANGKAT DAERAH TAHUN ANGGARAN 2022</strong></h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-responsive table-borderless">
                    <tbody style="font-size: 12px;color:black; font-weight: bold;">
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                        <tr>
                            <td>
                                Sub Unit SKPD
                            </td>
                            <td>:</td>

                            <td><?php echo  $kop->namaSubUnit; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row">
            <div class="table-responsive">
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
                                <td style="text-align: right; "><?php echo  $sp->target; ?></td>
                                <td colspan="2" style="text-align: right; "><?php echo  $sp->realisasi; ?></td>
                                
                                <td style="text-align:center; "><?php echo  $sp->satuan; ?></td>
                        </tr>
                        
                    <?php endforeach ?>
                    <!-- End Loop-->

                </tbody>
            </table>

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