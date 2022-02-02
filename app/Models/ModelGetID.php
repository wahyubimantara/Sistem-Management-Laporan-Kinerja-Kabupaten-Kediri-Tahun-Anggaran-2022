<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGetID extends Model
{
    protected $DBGroup = 'dbsql';
    protected $table = "kinerja_rinci";
    protected $primaryKey='id';
    protected $allowedFields = [
                                'kd_urusan'
                                ,'kd_bidang'
                                ,'kd_unit'
                                ,'kd_sub'
                                ,'nm_unit'
                                ,'kd_prog'
                                ,'id_prog'
                                ,'kd_keg'
                                ,'no_id'
                                ,'kd_indikator'
                                ,'tolak_ukur'
                                ,'target_angka'
                                ,'target_uraian'
                                ,'realisasi'
                                ,'id'
    ];
    protected $useTimestamps = false;

       
}