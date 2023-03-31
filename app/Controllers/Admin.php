<?php

namespace App\Controllers;
// UserModel untuk pengolahan data User yaitu aktivasi dan update/ubah password

use App\Models\ModelUser;
use \Myth\Auth\Models\UserModel;
// Password untuk mendapatkan enkripsi hash
use \Myth\Auth\Password;


class Admin extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\ModelUser();

    }
    public function index()
    {
        $data['title'] = 'User List';
        $data['users']=$this->model->user_list()->getResult();

        return view('admin/index',$data);
    }

    public function detail($id=0)
    {
        $data['title'] = 'User Detail'; 
        $data['user'] = $this->model->detail($id)->getRow();

        if(empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail',$data);
    }


    public function hapus($id){

        $this-> model-> delete($id);
        return redirect()->to(base_url('/admin'));
    }


    public function edit($id){
        return json_encode($this->model->find($id));
    }

    public function finalisasi(){
        
        if ($this->request->isAJAX()) {

            $data =[
                'kunci'=> 1,
            ];
            $userModel = new ModelUser();
            $userModel->update($this->request->getVar('id'), $data); 

            $msg = [
                'sukses' => 'Data Berhasil difinalisasi'
            ];
            echo json_encode($msg);
        }
        
    }

    public function buttonFinal($id){
        $data =[
            'kunci'=> 1,
        ];
        $userModel = new ModelUser();
            $userModel->update($id, $data);
        return redirect()->to(base_url('/admin'));
    }

    public function buttonUnFinal($id){
        $data =[
            'kunci'=> 0,
        ];
        $userModel = new ModelUser();
            $userModel->update($id, $data);
        return redirect()->to(base_url('/admin'));
    }

    public function updateUser(){
        
        if ($this->request) {
            // $userid= $this->request->getPost('userid');
            $username= $this->request->getVar('username');
            $email= $this->request->getVar('email');
            $kd_urusan = $this->request->getVar('fullname');
            $kd_bidang = $this->request->getVar('kodeSkpd');
            $kd_unit = $this->request->getVar('kodeUnitSkpd');
            $kd_sub = $this->request->getVar('kunci');

            $data =[
                // 'id' => $userid,
                'username' =>  $username,
                'email' =>  $email,
                'fullname' => $kd_urusan,
                'kodeSkpd' => $kd_bidang,
                'kodeUnitSkpd' => $kd_unit,
                'kodeUnitSkpd' => $kd_sub,  

            ];
            $userModel = new ModelUser();
            $userModel->update($this->request->getVar('id'), $data);

            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('/admin/detail/').$this->request->getVar('id')); 
        }

      
    }

    public function changePassword($id = null)
    {
        $data['title'] = 'Ubah Password'; 
        if ($id==null) 
        {
            return redirect()->to(base_url('/admin'));
        } else
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
            ];
            return view('admin/set_password', $data);            
        }
    }
 
    public function setPassword()
    {
        $data['title'] = 'Ubah Password'; 
        $id = $this->request->getVar('id');
        $rules = [
            // 'password'     => 'required|strong_password',
            'password'     => 'required',
            'pass_confirm' => 'required|matches[password]',
        ];
 
        if (! $this->validate($rules))
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
                'validation' => $this->validator,
            ];
 
            return view('admin/set_password', $data);
        }
        else
        {
            $userModel = new UserModel();
            $data = [            
                'password_hash' => Password::hash($this->request->getVar('password')),
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
            ];
            $userModel->update($this->request->getVar('id'), $data);  
 
            return redirect()->to(base_url('/admin'));
        }
    }


}
