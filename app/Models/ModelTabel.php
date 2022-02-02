<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTabel extends Model
{
    protected $DBGroup = 'dbsql';
    protected $table = "coba";
    protected $allowedFields = [
                                'Kd_Urusan'
                                ,'Kd_Bidang'
                                ,'kd_unit'
                                ,'kd_sub'
                                ,'Kd_Prog'
                                ,'kd_unit90'
                                ,'Id_Prog'
                                ,'kd_program'
                                ,'Kd_Keg'
                                ,'kd_kegiatan'
                                ,'kd_sub_kegiatan'
                                ,'Kd_Gab_Prog'
                                ,'Kd_Gab_Keg'
                                ,'Kd_Gab_Sub_Keg'
                                ,'Nm_Program'
                                ,'Nm_Kegiatan'
                                ,'Nm_Sub_Kegiatan'
                                ,'Anggaran'
                                ,'Realisasi'
                                ,'Selisih'
                                ,'persentase'
    ];
    protected $useTimestamps = false;

    public function get_where($Kd_Urusan,$Kd_Bidang, $kd_unit, $kd_sub){

        $query= $this->table("coba")->select('Kd_Gab_Prog, Nm_Program, Kd_Urusan, Kd_Bidang, kd_unit, kd_sub')
                                    ->where('Kd_Urusan',$Kd_Urusan)
                                    ->where('Kd_Bidang',$Kd_Bidang)
                                    ->where('kd_unit',$kd_unit)
                                    ->where('kd_sub',$kd_sub)
                                    ->distinct(true)
                                    ->get();
        return $query;
    }

    public function get_kegiatan($p){

        $query= $this->table("coba")->select('Kd_Gab_Keg, Kd_Urusan, Kd_Bidang, kd_unit, kd_sub, Nm_Kegiatan, Kd_Gab_Prog, SUM(Anggaran) SUM_Anggaran, SUM(Realisasi) SUM_Realisasi')
                                    ->where('Kd_Urusan',$p->Kd_Urusan)
                                    ->where('Kd_Bidang',$p->Kd_Bidang)
                                    ->where('kd_unit',$p->kd_unit)
                                    ->where('kd_sub',$p->kd_sub)
                                    ->where('Kd_Gab_Prog', $p->Kd_Gab_Prog)
                                    ->groupBy('Kd_Gab_Keg, Kd_Urusan, Kd_Bidang, kd_unit, kd_sub, Nm_Kegiatan, Kd_Gab_Prog')                             
                                    ->get();
        return $query;
    }

    public function get_sub_kegiatan($kegiatan){

        $query= $this->table("coba")->select('Kd_Gab_Prog,Kd_Gab_Keg,Kd_Gab_Sub_Keg, Kd_Urusan, Kd_Bidang, kd_unit, kd_sub, Nm_Sub_Kegiatan,Anggaran,Realisasi,Kd_Keg')
                                    ->where('Kd_Urusan',$kegiatan->Kd_Urusan)
                                    ->where('Kd_Bidang',$kegiatan->Kd_Bidang)
                                    ->where('kd_unit',$kegiatan->kd_unit)
                                    ->where('kd_sub',$kegiatan->kd_sub)
                                    ->where('Kd_Gab_Prog', $kegiatan->Kd_Gab_Prog)
                                    ->where('Kd_Gab_Keg', $kegiatan->Kd_Gab_Keg)                                   
                                    ->get();
        return $query;
    }
    // public function get_indikator($sub_kegiatan){
    //     $query =  $this->table("kinerja_rinci")->select('
    //                                                     kinerja_rinci.kd_urusan,
    //                                                     kinerja_rinci.kd_bidang,
    //                                                     kinerja_rinci.kd_unit,
    //                                                     kinerja_rinci.kd_sub,
    //                                                     kd_indikator,
    //                                                     tolak_ukur,
    //                                                     target_angka,
    //                                                     target_uraian,
    //                                                     kinerja_rinci.realisasi
    //                                             ')
    //                                            ->JOIN('coba','
    //                                                             kinerja_rinci.kd_urusan = coba.Kd_Urusan
    //                                                             AND kinerja_rinci.kd_bidang = coba.Kd_Bidang
    //                                                             AND kinerja_rinci.kd_unit = coba.kd_unit
    //                                                             AND kinerja_rinci.kd_sub = coba.kd_sub
    //                                                             AND kinerja_rinci.kd_prog = coba.Kd_Prog
    //                                                             AND kinerja_rinci.id_prog = coba.Id_Prog
    //                                                             AND kinerja_rinci.kd_keg = coba.Kd_Keg
    //                                                   ')
                                                
    //                                             ->WHERE('kinerja_rinci.kd_urusan', $sub_kegiatan->Kd_Urusan)
    //                                             ->WHERE('kinerja_rinci.kd_bidang',$sub_kegiatan->Kd_Bidang) 
    //                                             ->WHERE('kinerja_rinci.kd_unit',$sub_kegiatan->kd_unit )
    //                                             ->WHERE('kinerja_rinci.kd_sub',$sub_kegiatan->kd_sub )
    //                                             ->WHERE('coba.Kd_Gab_Prog',$sub_kegiatan->Kd_Gab_Prog )
    //                                             ->WHERE('coba.Kd_Gab_Keg',$sub_kegiatan->Kd_Gab_Keg )
    //                                             ->WHERE('coba.Kd_Gab_Sub_Keg',$sub_kegiatan->Kd_Gab_Sub_Keg )
    //                                             ->WHERE('kinerja_rinci.kd_keg',$sub_kegiatan->Kd_Keg)
                                              
    //                                            ->get();
    //     return $query;
    // }

    public function get_indikator($sub_kegiatan){
        $ini=(string)$sub_kegiatan->Kd_Gab_Sub_Keg;
     
        $sql="SELECT kinerja_rinci.kd_urusan,
        kinerja_rinci.kd_bidang,
        kinerja_rinci.kd_unit,
        kinerja_rinci.kd_sub,
        kinerja_rinci.kd_indikator,
        kinerja_rinci.tolak_ukur,
        kinerja_rinci.target_angka,
        kinerja_rinci.target_uraian,
        kinerja_rinci.realisasi,
        kinerja_rinci.id

        
    FROM coba
    
        INNER JOIN kinerja_rinci ON 
        kinerja_rinci.kd_urusan = coba.Kd_Urusan
        AND kinerja_rinci.kd_bidang = coba.Kd_Bidang
        AND kinerja_rinci.kd_unit = coba.kd_unit
        AND kinerja_rinci.kd_sub = coba.kd_sub
        AND kinerja_rinci.kd_prog = coba.Kd_Prog
        AND kinerja_rinci.id_prog = coba.Id_Prog
        AND kinerja_rinci.kd_keg = coba.Kd_Keg
        
    WHERE coba.kd_urusan = $sub_kegiatan->Kd_Urusan AND
            coba.kd_bidang = $sub_kegiatan->Kd_Bidang AND
            coba.kd_unit = $sub_kegiatan->kd_unit AND
            coba.kd_sub =$sub_kegiatan->kd_sub AND     
            coba.Kd_Gab_Sub_Keg='$ini'
    ";    

        $query = $this->db->query($sql);
        return $query;

    }

    
}