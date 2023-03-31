<?php

namespace App\Controllers;
use App\Models\ModelTabel;
use App\Models\ModelUser;
class Show extends BaseController

{
    public function __construct()
    {
        $this->model =new \App\Models\ModelTabelKinerja();
        
    }
    public function a($id)
    {
        $this->user = new \App\Models\ModelUser();
        $kodeUnitSkpd = $this->user->get_kode($id)->getRow('kodeUnitSkpd');

        $data['storeProcedure'] = $this->model->storeProcedureKinerja($kodeUnitSkpd)->getResult();

        $data['kop'] = $this->model->get_where($kodeUnitSkpd)->getRow();
        // $this->TTD = new \App\Models\ModelTTD();
        // $data['ttd'] = $this->TTD->get_TTD($kodeUnitSkpd)->getRow();
        
        return view('tabel/print_admin', $data); 

    }
}
