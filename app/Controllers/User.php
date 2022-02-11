<?php

namespace App\Controllers;
use App\Models\ModelUser;
use \Myth\Auth\Models\UserModel;
// Password untuk mendapatkan enkripsi hash
use \Myth\Auth\Password;
class user extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\ModelUser();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        
        $data['users']=$this->model->user_list()->getResult();

        return view('user/index',$data);
    }
    public function detail($id=0)
    {
        $data['title'] = 'User Detail'; 
        $data['user'] = $this->model->detail($id)->getRow();

        return view('user/index',$data);
    }

    public function updateUser(){
        
        if ($this->request) {
            // $userid= $this->request->getPost('userid');
            $username= $this->request->getVar('username');
            $email= $this->request->getVar('email');
            $kd_urusan = $this->request->getVar('kd_urusan');
            $kd_bidang = $this->request->getVar('kd_bidang');
            $kd_unit = $this->request->getVar('kd_unit');
            $kd_sub = $this->request->getVar('kd_sub');

            $data =[
                // 'id' => $userid,
                'username' =>  $username,
                'email' =>  $email,
                'kd_urusan' => $kd_urusan,
                'kd_bidang' => $kd_bidang,
                'kd_unit' => $kd_unit,
                'kd_sub' => $kd_sub,  

            ];
            $userModel = new ModelUser();
            $userModel->update($this->request->getVar('id'), $data);

            return redirect()->to(base_url('/user'));
        } else {
            return redirect()->to(base_url('/user/detail/').$this->request->getVar('id'));
         
        } 
    }
    public function changePassword($id = null)
    {
        $data['title'] = 'Ubah Password'; 
        if ($id==null) 
        {
            return redirect()->to(base_url('/user'));
        } else
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
            ];
            return view('user/set_password', $data);            
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
 
            return view('user/set_password', $data);
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
 
            return redirect()->to(base_url('/user'));
        }
    }


}
