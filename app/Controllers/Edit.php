<?php

namespace App\Controllers;

use App\Models\ModelTabel;
use App\Models\ModelUser;

class Edit extends BaseController

{
    public function __construct()
    {
        $this->model = new \App\Models\ModelTabel();
    }
    public function EditSKPD($id)
    {
        // User
        $this->UntukEdit = new \App\Models\ModelUser();
        $kd_urusan = $this->UntukEdit->get_kode($id)->getRow('kd_urusan');
        $kd_bidang = $this->UntukEdit->get_kode($id)->getRow('kd_bidang');
        $kd_unit = $this->UntukEdit->get_kode($id)->getRow('kd_unit');
        $kd_sub = $this->UntukEdit->get_kode($id)->getRow('kd_sub');
        // // User
        
        // tabel coba
        $kd_urusan_coba = $this->model->get_7kode($id)->getRow('kd_urusan');
        $kd_bidang_coba = $this->model->get_7kode($id)->getRow('kd_bidang');
        $kd_unit_coba = $this->model->get_7kode($id)->getRow('kd_unit');
        $kd_sub_coba = $this->model->get_7kode($id)->getRow('kd_sub');
        $kd_prog_coba = $this->model->get_7kode($id)->getRow('Kd_Prog');
        $id_prog_coba = $this->model->get_7kode($id)->getRow('Id_Prog');
        $kd_keg_coba = $this->model->get_7kode($id)->getRow('Kd_Keg');

        $data['program'] = $this->model->get_where($kd_urusan, $kd_bidang, $kd_unit, $kd_sub)->getResult();
        $data['model'] = $this->model;
        $data['param'] = $id;
        $this->KODE7 = new \App\Models\ModelGetID();
        $data['kode7'] = $this->KODE7->get_no_id_kd_indikator($kd_urusan_coba, $kd_bidang_coba, $kd_unit_coba, $kd_sub_coba,$kd_prog_coba,$id_prog_coba,$kd_keg_coba)->getRow();

        return view('tabel/indexEdit', $data);
    }


    public function simpan_tambah_indikator()
    {

        if ($this->request) {
            $indikator = $this->request->getPost('tolak_ukur');

            $data = [

                'tolak_ukur' => $indikator,
            ];
            $this->Model_edit = new \App\Models\ModelGetID();
            $this->Model_edit->update($this->request->getVar('id'), $data);

            $hasil['sukses'] = "Hore Anda Berhasil";
            $hasil['error'] = false;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = "Error Bro";
        }
        return json_encode($hasil);
    }

    public function hapus(){

        if ($this->request->isAJAX()) {
            $param_id = $this->request->getPost('id');
            // $data =[
            //     'id'=> $param_id,
            // ];
            $this->Model_hapus = new \App\Models\ModelGetID();
            $this-> Model_hapus-> delete($param_id);

            $msg = [
                'sukses' => 'Data Berhasil difinalisasi'
            ];
            echo json_encode($msg);
        }
        

        
        
    }
}
