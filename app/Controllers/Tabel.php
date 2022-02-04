<?php

namespace App\Controllers;
use App\Models\ModelTabel;
class Tabel extends BaseController

{
    public function __construct()
    {
        $this->model = new \App\Models\ModelTabel();
    }
    public function index()
    {
        $Kd_Urusan=user()->kd_urusan;
        $Kd_Bidang=user()->kd_bidang;
        $kd_unit=user()->kd_unit;
        $kd_sub=user()->kd_sub;
        $data['program'] = $this->model->get_where($Kd_Urusan,$Kd_Bidang, $kd_unit, $kd_sub)->getResult();
        $data['model'] = $this->model;
        

        return view('tabel/index2', $data); 

    }
    public function edit($id){
        $this->Model_edit = new \App\Models\ModelGetID();
        return json_encode($this->Model_edit->find($id));
    }


}
