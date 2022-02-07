<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $allowedFields = ['id','email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
    'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at', 'kd_urusan','kd_bidang', 'kd_unit','kd_sub','kunci'];
    protected $useTimestamps = false;

    public function user_list(){

        $query= $this->table("users")->select('users.id as userid, username,email, name,fullname,kunci')
                                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                                    ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                                    ->get();
        return $query;
    }

    public function detail($id=0){

        $query= $this->table("users")->select('users.id as userid, username,email,fullname, user_image, name,kd_urusan,kd_bidang, kd_unit,kd_sub,kunci')
                                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                                    ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                                    ->where('users.id',$id)
                                    ->get();
        return $query;
    }

    public function get_kd_urusan($id=0){
        $sql="SELECT kd_urusan FROM users WHERE id= $id";    
        $query = $this->db->query($sql);
        return $query;

    }
    public function get_kd_bidang($id=0){
        $sql="SELECT kd_bidang FROM users WHERE id= $id";    
        $query = $this->db->query($sql);
        return $query;

    }
    public function get_kd_unit($id=0){
        $sql="SELECT kd_unit FROM users WHERE id= $id";    
        $query = $this->db->query($sql);
        return $query;

    }
    public function get_kd_sub($id=0){
        $sql="SELECT kd_sub FROM users WHERE id= $id";    
        $query = $this->db->query($sql);
        return $query;

    }
    

}