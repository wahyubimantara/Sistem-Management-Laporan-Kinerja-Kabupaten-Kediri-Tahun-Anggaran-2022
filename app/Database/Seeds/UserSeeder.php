<?php

////testos

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        $datas = [
          ['username'=>'pendidikan', 'email'=>'pendidikan@kedirikab.go.id', 'password_hash'=>Password::hash('pendidikan'), 'kd_urusan'=>1, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'kesehatan', 'email'=>'kesehatan@kedirikab.go.id', 'password_hash'=>Password::hash('kesehatan'), 'kd_urusan'=>1, 'kd_bidang'=>2, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'rskk', 'email'=>'rskk@kedirikab.go.id', 'password_hash'=>Password::hash('rskk'), 'kd_urusan'=>1, 'kd_bidang'=>2, 'kd_unit'=>1, 'kd_sub'=>2],
          ['username'=>'rsslg', 'email'=>'rsslg@kedirikab.go.id', 'password_hash'=>Password::hash('rsslg'), 'kd_urusan'=>1, 'kd_bidang'=>2, 'kd_unit'=>1, 'kd_sub'=>3],
          ['username'=>'dpupr', 'email'=>'dpupr@kedirikab.go.id', 'password_hash'=>Password::hash('dpupr'), 'kd_urusan'=>1, 'kd_bidang'=>3, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dperkim', 'email'=>'dperkim@kedirikab.go.id', 'password_hash'=>Password::hash('dperkim'), 'kd_urusan'=>1, 'kd_bidang'=>4, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'satpolpp', 'email'=>'satpolpp@kedirikab.go.id', 'password_hash'=>Password::hash('satpolpp'), 'kd_urusan'=>1, 'kd_bidang'=>5, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'bpbd', 'email'=>'bpbd@kedirikab.go.id', 'password_hash'=>Password::hash('bpbd'), 'kd_urusan'=>1, 'kd_bidang'=>5, 'kd_unit'=>1, 'kd_sub'=>2],
          ['username'=>'dinsos', 'email'=>'dinsos@kedirikab.go.id', 'password_hash'=>Password::hash('dinsos'), 'kd_urusan'=>1, 'kd_bidang'=>6, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'disnaker', 'email'=>'disnaker@kedirikab.go.id', 'password_hash'=>Password::hash('disnaker'), 'kd_urusan'=>2, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dkpp', 'email'=>'dkpp@kedirikab.go.id', 'password_hash'=>Password::hash('dkpp'), 'kd_urusan'=>2, 'kd_bidang'=>3, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dlh', 'email'=>'dlh@kedirikab.go.id', 'password_hash'=>Password::hash('dlh'), 'kd_urusan'=>2, 'kd_bidang'=>5, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dukcapil', 'email'=>'dukcapil@kedirikab.go.id', 'password_hash'=>Password::hash('dukcapil'), 'kd_urusan'=>2, 'kd_bidang'=>6, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dpmpd', 'email'=>'dpmpd@kedirikab.go.id', 'password_hash'=>Password::hash('dpmpd'), 'kd_urusan'=>2, 'kd_bidang'=>7, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dppkbp3a', 'email'=>'dppkbp3a@kedirikab.go.id', 'password_hash'=>Password::hash('dppkbp3a'), 'kd_urusan'=>2, 'kd_bidang'=>8, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'perhubungan', 'email'=>'perhubungan@kedirikab.go.id', 'password_hash'=>Password::hash('perhubungan'), 'kd_urusan'=>2, 'kd_bidang'=>9, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'kominfo', 'email'=>'kominfo@kedirikab.go.id', 'password_hash'=>Password::hash('kominfo'), 'kd_urusan'=>2, 'kd_bidang'=>10, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'kopusmik', 'email'=>'kopusmik@kedirikab.go.id', 'password_hash'=>Password::hash('kopusmik'), 'kd_urusan'=>2, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dpmptsp', 'email'=>'dpmptsp@kedirikab.go.id', 'password_hash'=>Password::hash('dpmptsp'), 'kd_urusan'=>2, 'kd_bidang'=>12, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'darsipus', 'email'=>'darsipus@kedirikab.go.id', 'password_hash'=>Password::hash('darsipus'), 'kd_urusan'=>2, 'kd_bidang'=>18, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'perikanan', 'email'=>'perikanan@kedirikab.go.id', 'password_hash'=>Password::hash('perikanan'), 'kd_urusan'=>3, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dparbud', 'email'=>'dparbud@kedirikab.go.id', 'password_hash'=>Password::hash('dparbud'), 'kd_urusan'=>3, 'kd_bidang'=>2, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'dipertabun', 'email'=>'dipertabun@kedirikab.go.id', 'password_hash'=>Password::hash('dipertabun'), 'kd_urusan'=>3, 'kd_bidang'=>3, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'perdagangan', 'email'=>'perdagangan@kedirikab.go.id', 'password_hash'=>Password::hash('perdagangan'), 'kd_urusan'=>3, 'kd_bidang'=>6, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'hukum', 'email'=>'hukum@kedirikab.go.id', 'password_hash'=>Password::hash('hukum'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'kesra', 'email'=>'kesra@kedirikab.go.id', 'password_hash'=>Password::hash('kesra'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>2],
          ['username'=>'perekonomian', 'email'=>'perekonomian@kedirikab.go.id', 'password_hash'=>Password::hash('perekonomian'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>3],
          ['username'=>'pembangunan', 'email'=>'pembangunan@kedirikab.go.id', 'password_hash'=>Password::hash('pembangunan'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>4],
          ['username'=>'umum', 'email'=>'umum@kedirikab.go.id', 'password_hash'=>Password::hash('umum'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>5],
          ['username'=>'organisasi', 'email'=>'organisasi@kedirikab.go.id', 'password_hash'=>Password::hash('organisasi'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>6],
          ['username'=>'pemerintahan', 'email'=>'pemerintahan@kedirikab.go.id', 'password_hash'=>Password::hash('pemerintahan'), 'kd_urusan'=>4, 'kd_bidang'=>1, 'kd_unit'=>1, 'kd_sub'=>7],
          ['username'=>'inspektorat', 'email'=>'inspektorat@kedirikab.go.id', 'password_hash'=>Password::hash('inspektorat'), 'kd_urusan'=>4, 'kd_bidang'=>2, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'bappeda', 'email'=>'bappeda@kedirikab.go.id', 'password_hash'=>Password::hash('bappeda'), 'kd_urusan'=>4, 'kd_bidang'=>3, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'bpkad', 'email'=>'bpkad@kedirikab.go.id', 'password_hash'=>Password::hash('bpkad'), 'kd_urusan'=>4, 'kd_bidang'=>4, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'bapenda', 'email'=>'bapenda@kedirikab.go.id', 'password_hash'=>Password::hash('bapenda'), 'kd_urusan'=>4, 'kd_bidang'=>4, 'kd_unit'=>1, 'kd_sub'=>2],
          ['username'=>'bkd', 'email'=>'bkd@kedirikab.go.id', 'password_hash'=>Password::hash('bkd'), 'kd_urusan'=>4, 'kd_bidang'=>5, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'balitbang', 'email'=>'balitbang@kedirikab.go.id', 'password_hash'=>Password::hash('balitbang'), 'kd_urusan'=>4, 'kd_bidang'=>7, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'sekwan', 'email'=>'sekwan@kedirikab.go.id', 'password_hash'=>Password::hash('sekwan'), 'kd_urusan'=>4, 'kd_bidang'=>8, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'mojo', 'email'=>'mojo@kedirikab.go.id', 'password_hash'=>Password::hash('mojo'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>1],
          ['username'=>'kras', 'email'=>'kras@kedirikab.go.id', 'password_hash'=>Password::hash('kras'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>2],
          ['username'=>'ngadiluwih', 'email'=>'ngadiluwih@kedirikab.go.id', 'password_hash'=>Password::hash('ngadiluwih'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>3],
          ['username'=>'kandat', 'email'=>'kandat@kedirikab.go.id', 'password_hash'=>Password::hash('kandat'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>4],
          ['username'=>'wates', 'email'=>'wates@kedirikab.go.id', 'password_hash'=>Password::hash('wates'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>5],
          ['username'=>'ngancar', 'email'=>'ngancar@kedirikab.go.id', 'password_hash'=>Password::hash('ngancar'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>6],
          ['username'=>'puncu', 'email'=>'puncu@kedirikab.go.id', 'password_hash'=>Password::hash('puncu'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>7],
          ['username'=>'plosoklaten', 'email'=>'plosoklaten@kedirikab.go.id', 'password_hash'=>Password::hash('plosoklaten'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>8],
          ['username'=>'gurah', 'email'=>'gurah@kedirikab.go.id', 'password_hash'=>Password::hash('gurah'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>9],
          ['username'=>'pagu', 'email'=>'pagu@kedirikab.go.id', 'password_hash'=>Password::hash('pagu'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>10],
          ['username'=>'gampengrejo', 'email'=>'gampengrejo@kedirikab.go.id', 'password_hash'=>Password::hash('gampengrejo'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>11],
          ['username'=>'grogol', 'email'=>'grogol@kedirikab.go.id', 'password_hash'=>Password::hash('grogol'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>12],
          ['username'=>'papar', 'email'=>'papar@kedirikab.go.id', 'password_hash'=>Password::hash('papar'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>13],
          ['username'=>'purwoasri', 'email'=>'purwoasri@kedirikab.go.id', 'password_hash'=>Password::hash('purwoasri'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>14],
          ['username'=>'plemahan', 'email'=>'plemahan@kedirikab.go.id', 'password_hash'=>Password::hash('plemahan'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>15],
          ['username'=>'pare', 'email'=>'pare@kedirikab.go.id', 'password_hash'=>Password::hash('pare'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>16],
          ['username'=>'kepung', 'email'=>'kepung@kedirikab.go.id', 'password_hash'=>Password::hash('kepung'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>17],
          ['username'=>'kandangan', 'email'=>'kandangan@kedirikab.go.id', 'password_hash'=>Password::hash('kandangan'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>18],
          ['username'=>'tarokan', 'email'=>'tarokan@kedirikab.go.id', 'password_hash'=>Password::hash('tarokan'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>19],
          ['username'=>'kunjang', 'email'=>'kunjang@kedirikab.go.id', 'password_hash'=>Password::hash('kunjang'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>20],
          ['username'=>'banyakan', 'email'=>'banyakan@kedirikab.go.id', 'password_hash'=>Password::hash('banyakan'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>21],
          ['username'=>'ringinrejo', 'email'=>'ringinrejo@kedirikab.go.id', 'password_hash'=>Password::hash('ringinrejo'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>22],
          ['username'=>'kayenkidul', 'email'=>'kayenkidul@kedirikab.go.id', 'password_hash'=>Password::hash('kayenkidul'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>23],
          ['username'=>'ngasem', 'email'=>'ngasem@kedirikab.go.id', 'password_hash'=>Password::hash('ngasem'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>24],
          ['username'=>'badas', 'email'=>'badas@kedirikab.go.id', 'password_hash'=>Password::hash('badas'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>25],
          ['username'=>'semen', 'email'=>'semen@kedirikab.go.id', 'password_hash'=>Password::hash('semen'), 'kd_urusan'=>4, 'kd_bidang'=>11, 'kd_unit'=>1, 'kd_sub'=>26],
          ['username'=>'bakesbangpol', 'email'=>'bakesbangpol@kedirikab.go.id', 'password_hash'=>Password::hash('bakesbangpol'), 'kd_urusan'=>4, 'kd_bidang'=>12, 'kd_unit'=>1, 'kd_sub'=>1],
        ];

       // Using Query Builder
       foreach($datas as $data) {
          $this->db->table('users')->insert($data);
       }
    }
}
