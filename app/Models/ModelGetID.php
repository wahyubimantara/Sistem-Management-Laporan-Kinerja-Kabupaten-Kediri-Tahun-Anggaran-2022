<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGetID extends Model
{
    protected $DBGroup = 'dbsql';
    protected $table = "kinerja_rinci";
    protected $primaryKey='id';
    protected $useSoftDeletes = true;
	
	protected $deletedField  = 'deleted_at';
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

    public function get_no_id_kd_indikator($kd_urusan,$kd_bidang,$kd_unit,$kd_sub,$kd_prog,$id_prog,$kd_keg){
        $sql="SELECT MAX(no_id)+1 as nomor_id, MAX(kd_indikator)+1 as kode_indikator
            FROM kinerja_rinci
            WHERE 
                kd_urusan=$kd_urusan AND
                kd_bidang=$kd_bidang AND
                kd_unit=$kd_unit AND
                kd_sub=$kd_sub AND
                kd_prog=$kd_prog AND
                id_prog=$id_prog AND
                kd_keg = $kd_keg
        ";    
        $query = $this->db->query($sql);
        return $query;

    }
    
}