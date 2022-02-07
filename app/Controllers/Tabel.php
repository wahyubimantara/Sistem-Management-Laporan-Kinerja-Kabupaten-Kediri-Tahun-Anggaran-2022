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
        $kd_urusan=user()->kd_urusan;
        $kd_bidang=user()->kd_bidang;
        $kd_unit=user()->kd_unit;
        $kd_sub=user()->kd_sub;
        $data['program'] = $this->model->get_where($kd_urusan,$kd_bidang, $kd_unit, $kd_sub)->getResult();
        $data['model'] = $this->model;
        

        return view('tabel/index2', $data); 

    }
    public function edit($id){
        $this->Model_edit = new \App\Models\ModelGetID();
        return json_encode($this->Model_edit->find($id));
    }

    public function simpan(){
        
        if ($this->request) {
            $realisasi = $this->request->getPost('realisasi');

            $data =[
                
                'realisasi'=> $realisasi,
            ];
            $this->Model_edit = new \App\Models\ModelGetID();
            $this->Model_edit->update($this->request->getVar('id'), $data);  

            $hasil['sukses']="Hore Anda Berhasil";
            $hasil['error']= false;
        
        } else {
            $hasil['sukses']=false;
            $hasil['error']= "Error Bro";
        }
        return json_encode($hasil);
    }
}
