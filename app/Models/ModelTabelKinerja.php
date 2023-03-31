<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTabelKinerja extends Model
{
    protected $table = "data_kinerja";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'kodeSkpd', 'kodeUnitSkpd', 'kodeProgram', 'kodeKegiatan', 'kodeSubKegiatan', 'namaSubUnit', 'namaProgram', 'namaKegiatan', 'namaSubKegiatan', 'namaIndikator', 'anggaran', 'realisasiBelanja', 'satuan', 'jenis', 'target', 'realisasi', 'kunci'];
    protected $useTimestamps = false;


    public function getAllDataKinerja()
    {
        $sql = "SELECT *FROM data_kinerja"; 
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_where($kodeUnitSkpd)
    {

        $sql = "SELECT *
            FROM data_kinerja
            WHERE kodeUnitSkpd= '$kodeUnitSkpd'
            GROUP BY 'kodeSkpd', 'kodeUnitSkpd', 'kodeProgram', 'kodeKegiatan', 'kodeSubKegiatan'
            ";
            
        $query = $this->db->query($sql);
        return $query;
    }

    public function storeProcedureKinerja($kodeUnitSkpd)
    {
        $sql = "call kinerja_procedure('$kodeUnitSkpd')";
            
        $query = $this->db->query($sql);
        return $query;
    }

    

}
