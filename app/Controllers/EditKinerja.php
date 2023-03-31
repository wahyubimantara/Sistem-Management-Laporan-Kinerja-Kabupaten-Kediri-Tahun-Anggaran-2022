<?php

namespace App\Controllers;

use App\Models\ModelTabel;
use App\Models\ModelUser;

class EditKinerja extends BaseController

{
    public function __construct()
    {
        $this->model =new \App\Models\ModelTabelKinerja();
    }

    public function index()
    {
        $kodeUnitSkpd=user()->kodeUnitSkpd;
        $data['storeProcedure'] = $this->model->storeProcedureKinerja($kodeUnitSkpd)->getResult();
        $data['param'] = user()->kodeUnitSkpd;
        return view('tabel/indexEditKinerjaUser', $data);

    }

    public function EditKinerjaSKPD($id)
    {
        // User
        $this->abc = new \App\Models\ModelUser();
        $kodeUnitSkpd = $this->abc->get_kode($id)->getRow('kodeUnitSkpd');
        // // User
        
        $data['storeProcedure'] = $this->model->storeProcedureKinerja($kodeUnitSkpd)->getResult();
        $data['param'] = $id;
        return view('tabel/indexEditKinerjaAdmin', $data);
    }

    public function edit($id){
        return json_encode($this->model->find($id));
    }

    public function simpanRealisasi(){
        
        if ($this->request) {
            $realisasi = $this->request->getPost('realisasi');

            $data =[
                
                'realisasi'=> $realisasi,
            ];
            $this->model->update($this->request->getVar('id'), $data);  

            $hasil['sukses']="Hore Anda Berhasil";
            $hasil['error']= false;
        
        } else {
            $hasil['sukses']=false;
            $hasil['error']= "Error Bro";
        }
        return json_encode($hasil);
    }

   }
