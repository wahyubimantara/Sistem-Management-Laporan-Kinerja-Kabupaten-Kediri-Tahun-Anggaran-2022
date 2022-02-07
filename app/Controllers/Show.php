<?php

namespace App\Controllers;
use App\Models\ModelTabel;
use App\Models\ModelUser;
class Show extends BaseController

{
    public function __construct()
    {
        $this->model = new \App\Models\ModelTabel();
    
    }
    public function a($id)
    {
        $this->UntukShow = new \App\Models\ModelUser();
        $kd_urusan=user()->kd_urusan;
        $kd_bidang=user()->kd_bidang;
        $kd_unit=user()->kd_unit;
        $kd_sub=user()->kd_sub;

        // $kd_urusan = $this->UntukShow->get_kd_urusan($id)->getRow();
        // $kd_bidang = $this->UntukShow->get_kd_bidang($id)->getRow();
        // $kd_unit = $this->UntukShow->get_kd_unit($id)->getRow();
        // $kd_sub = $this->UntukShow->get_kd_sub($id)->getRow();
    
        $data['program'] = $this->model->get_where($kd_urusan,$kd_bidang, $kd_unit, $kd_sub)->getResult();
        $data['model'] = $this->model;
        $this->TTD = new \App\Models\ModelTTD();
        $data['ttd'] = $this->TTD->get_TTD($kd_urusan,$kd_bidang, $kd_unit, $kd_sub)->getRow();
        
        return view('tabel/print_admin', $data); 

    }
}
