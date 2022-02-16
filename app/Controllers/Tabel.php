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

    public function simpan_indikator(){
        
        if ($this->request) {
            $indikator = $this->request->getPost('tolak_ukur');

            $data =[
                
                'tolak_ukur'=> $indikator,
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

    public function simpan_tambah_indikator(){
        
        if ($this->request) {
         
            $kd_urusan = $this->request->getPost('kd_urusan');
            $kd_bidang = $this->request->getPost('kd_bidang');
            $kd_unit = $this->request->getPost('kd_unit');
            $kd_sub = $this->request->getPost('kd_sub');
            $Kd_Prog = $this->request->getPost('kd_prog');
            $Id_Prog = $this->request->getPost('id_prog');
            $kode_kegiatan = $this->request->getPost('kd_keg');

            $no_id = $this->request->getPost('no_id');
            $kd_indikator = $this->request->getPost('kd_indikator');

            $indikator_tambah = $this->request->getPost('tolak_ukur');
            $rencana_tambah = $this->request->getPost('target_angka');
            $realisasi_tambah = $this->request->getPost('realisasi');
            $satuan_tambah = $this->request->getPost('target_uraian');

            $data =[ 
                   
                    'kd_urusan'=> $kd_urusan,
                    'kd_bidang'=> $kd_bidang,
                    'kd_unit'=> $kd_unit,
                    'kd_sub'=> $kd_sub,
                    'kd_prog'=> $Kd_Prog,
                    'id_prog'=> $Id_Prog,
                    'kd_keg'=> $kode_kegiatan,
                    'no_id'=> $no_id,
                    'kd_indikator'=> $kd_indikator,
                    'tolak_ukur'=> $indikator_tambah,
                    'target_angka'=> $rencana_tambah,
                    'target_uraian'=> $satuan_tambah,
                    'realisasi'=> $realisasi_tambah,
            ];
            $this->Model_edit = new \App\Models\ModelGetID();
            $this->Model_edit->insert($data);  

            $hasil['sukses']="Hore Anda Berhasil";
            $hasil['error']= false;
        
        } else {
            $hasil['sukses']=false;
            $hasil['error']= "Error Bro";
        }
        return json_encode($hasil);
    }

    public function edit2($id){
        $this->Model_2 = new \App\Models\ModelTabel();
        return json_encode($this->Model_2->find($id));
    }

}
