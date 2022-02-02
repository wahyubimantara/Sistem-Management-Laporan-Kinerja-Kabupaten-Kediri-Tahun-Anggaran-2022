<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function __construct()
    {

        $db2      = \Config\Database::connect();
        $builder = $db2->table('ref_unit');
    }
    public function index()
    {

        $data['data'] = $this->builder->select('*')->get();
       
        return view('tabel/index', $data);
    }
}
