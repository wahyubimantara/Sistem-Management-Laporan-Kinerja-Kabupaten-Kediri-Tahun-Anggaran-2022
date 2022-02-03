<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTTD extends Model
{
    protected $DBGroup = 'dbsql';
    protected $table = "tanda_tangan";
    protected $allowedFields = [
        'kd_urusan,kd_bidang,kd_unit,kd_sub,jbt_pimpinan,nm_pimpinan,nip_pimpinan'
    ];
    protected $useTimestamps = false;

    public function get_TTD($Kd_Urusan,$Kd_Bidang, $kd_unit, $kd_sub)
    {
        $query= $this->table("tanda_tangan")->select('jbt_pimpinan,nm_pimpinan,nip_pimpinan')
                                    ->where('Kd_Urusan',$Kd_Urusan)
                                    ->where('Kd_Bidang',$Kd_Bidang)
                                    ->where('kd_unit',$kd_unit)
                                    ->where('kd_sub',$kd_sub)
                                    ->get();
        return $query;
    }
}