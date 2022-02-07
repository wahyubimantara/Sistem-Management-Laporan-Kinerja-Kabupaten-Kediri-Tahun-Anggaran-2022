<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use \Myth\Auth\Password;

class Inject extends Seeder
{
  public function run()
  {
    $datas = [
      ['username' => 'pendidikan', 'email' => 'pendidikan@kedirikab.go.id', 'password' => Password::hash('4275'), 'kd_urusan' => 1, 'kd_bidang' => 1, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kesehatan', 'email' => 'kesehatan@kedirikab.go.id', 'password' => Password::hash('6418'), 'kd_urusan' => 1, 'kd_bidang' => 2, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'rskk', 'email' => 'rskk@kedirikab.go.id', 'password' => Password::hash('2238'), 'kd_urusan' => 1, 'kd_bidang' => 2, 'kd_unit' => 2, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'rsslg', 'email' => 'rsslg@kedirikab.go.id', 'password' => Password::hash('7238'), 'kd_urusan' => 1, 'kd_bidang' => 2, 'kd_unit' => 3, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dpupr', 'email' => 'dpupr@kedirikab.go.id', 'password' => Password::hash('1421'), 'kd_urusan' => 1, 'kd_bidang' => 3, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dperkim', 'email' => 'dperkim@kedirikab.go.id', 'password' => Password::hash('2294'), 'kd_urusan' => 1, 'kd_bidang' => 4, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'satpolpp', 'email' => 'satpolpp@kedirikab.go.id', 'password' => Password::hash('4124'), 'kd_urusan' => 1, 'kd_bidang' => 5, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'bpbd', 'email' => 'bpbd@kedirikab.go.id', 'password' => Password::hash('9585'), 'kd_urusan' => 1, 'kd_bidang' => 5, 'kd_unit' => 2, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dinsos', 'email' => 'dinsos@kedirikab.go.id', 'password' => Password::hash('6346'), 'kd_urusan' => 1, 'kd_bidang' => 6, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'disnaker', 'email' => 'disnaker@kedirikab.go.id', 'password' => Password::hash('9228'), 'kd_urusan' => 2, 'kd_bidang' => 1, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dkpp', 'email' => 'dkpp@kedirikab.go.id', 'password' => Password::hash('9483'), 'kd_urusan' => 2, 'kd_bidang' => 3, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dlh', 'email' => 'dlh@kedirikab.go.id', 'password' => Password::hash('3563'), 'kd_urusan' => 2, 'kd_bidang' => 5, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dukcapil', 'email' => 'dukcapil@kedirikab.go.id', 'password' => Password::hash('3064'), 'kd_urusan' => 2, 'kd_bidang' => 6, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dpmpd', 'email' => 'dpmpd@kedirikab.go.id', 'password' => Password::hash('4274'), 'kd_urusan' => 2, 'kd_bidang' => 7, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dppkbp3a', 'email' => 'dppkbp3a@kedirikab.go.id', 'password' => Password::hash('8361'), 'kd_urusan' => 2, 'kd_bidang' => 8, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'perhubungan', 'email' => 'perhubungan@kedirikab.go.id', 'password' => Password::hash('6567'), 'kd_urusan' => 2, 'kd_bidang' => 9, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kominfo', 'email' => 'kominfo@kedirikab.go.id', 'password' => Password::hash('1288'), 'kd_urusan' => 2, 'kd_bidang' => 10, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kopusmik', 'email' => 'kopusmik@kedirikab.go.id', 'password' => Password::hash('2710'), 'kd_urusan' => 2, 'kd_bidang' => 11, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dpmptsp', 'email' => 'dpmptsp@kedirikab.go.id', 'password' => Password::hash('1513'), 'kd_urusan' => 2, 'kd_bidang' => 12, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'darsipus', 'email' => 'darsipus@kedirikab.go.id', 'password' => Password::hash('2637'), 'kd_urusan' => 2, 'kd_bidang' => 18, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'perikanan', 'email' => 'perikanan@kedirikab.go.id', 'password' => Password::hash('7103'), 'kd_urusan' => 3, 'kd_bidang' => 1, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dparbud', 'email' => 'dparbud@kedirikab.go.id', 'password' => Password::hash('7934'), 'kd_urusan' => 3, 'kd_bidang' => 2, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'dipertabun', 'email' => 'dipertabun@kedirikab.go.id', 'password' => Password::hash('7430'), 'kd_urusan' => 3, 'kd_bidang' => 3, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'perdagangan', 'email' => 'perdagangan@kedirikab.go.id', 'password' => Password::hash('3280'), 'kd_urusan' => 3, 'kd_bidang' => 6, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'hukum', 'email' => 'hukum@kedirikab.go.id', 'password' => Password::hash('6867'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kesra', 'email' => 'kesra@kedirikab.go.id', 'password' => Password::hash('1791'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 2, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'perekonomian', 'email' => 'perekonomian@kedirikab.go.id', 'password' => Password::hash('9727'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 3, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'pembangunan', 'email' => 'pembangunan@kedirikab.go.id', 'password' => Password::hash('5767'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 4, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'umum', 'email' => 'umum@kedirikab.go.id', 'password' => Password::hash('9371'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 5, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'organisasi', 'email' => 'organisasi@kedirikab.go.id', 'password' => Password::hash('9475'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 6, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'pemerintahan', 'email' => 'pemerintahan@kedirikab.go.id', 'password' => Password::hash('3812'), 'kd_urusan' => 4, 'kd_bidang' => 1, 'kd_unit' => 7, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'inspektorat', 'email' => 'inspektorat@kedirikab.go.id', 'password' => Password::hash('4167'), 'kd_urusan' => 4, 'kd_bidang' => 2, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'bappeda', 'email' => 'bappeda@kedirikab.go.id', 'password' => Password::hash('3539'), 'kd_urusan' => 4, 'kd_bidang' => 3, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'bpkad', 'email' => 'bpkad@kedirikab.go.id', 'password' => Password::hash('8087'), 'kd_urusan' => 4, 'kd_bidang' => 4, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'bapenda', 'email' => 'bapenda@kedirikab.go.id', 'password' => Password::hash('1159'), 'kd_urusan' => 4, 'kd_bidang' => 4, 'kd_unit' => 2, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'bkd', 'email' => 'bkd@kedirikab.go.id', 'password' => Password::hash('6635'), 'kd_urusan' => 4, 'kd_bidang' => 5, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'balitbang', 'email' => 'balitbang@kedirikab.go.id', 'password' => Password::hash('7000'), 'kd_urusan' => 4, 'kd_bidang' => 7, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'sekwan', 'email' => 'sekwan@kedirikab.go.id', 'password' => Password::hash('7882'), 'kd_urusan' => 4, 'kd_bidang' => 8, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'mojo', 'email' => 'mojo@kedirikab.go.id', 'password' => Password::hash('2615'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kras', 'email' => 'kras@kedirikab.go.id', 'password' => Password::hash('9609'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 2, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'ngadiluwih', 'email' => 'ngadiluwih@kedirikab.go.id', 'password' => Password::hash('9200'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 3, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kandat', 'email' => 'kandat@kedirikab.go.id', 'password' => Password::hash('3074'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 4, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'wates', 'email' => 'wates@kedirikab.go.id', 'password' => Password::hash('7341'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 5, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'ngancar', 'email' => 'ngancar@kedirikab.go.id', 'password' => Password::hash('9664'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 6, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'puncu', 'email' => 'puncu@kedirikab.go.id', 'password' => Password::hash('3188'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 7, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'plosoklaten', 'email' => 'plosoklaten@kedirikab.go.id', 'password' => Password::hash('5406'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 8, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'gurah', 'email' => 'gurah@kedirikab.go.id', 'password' => Password::hash('8467'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 9, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'pagu', 'email' => 'pagu@kedirikab.go.id', 'password' => Password::hash('9219'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 10, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'gampengrejo', 'email' => 'gampengrejo@kedirikab.go.id', 'password' => Password::hash('4789'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 11, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'grogol', 'email' => 'grogol@kedirikab.go.id', 'password' => Password::hash('6805'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 12, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'papar', 'email' => 'papar@kedirikab.go.id', 'password' => Password::hash('1796'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 13, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'purwoasri', 'email' => 'purwoasri@kedirikab.go.id', 'password' => Password::hash('3129'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 14, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'plemahan', 'email' => 'plemahan@kedirikab.go.id', 'password' => Password::hash('7490'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 15, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'pare', 'email' => 'pare@kedirikab.go.id', 'password' => Password::hash('2721'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 16, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kepung', 'email' => 'kepung@kedirikab.go.id', 'password' => Password::hash('1412'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 17, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kandangan', 'email' => 'kandangan@kedirikab.go.id', 'password' => Password::hash('6148'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 18, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'tarokan', 'email' => 'tarokan@kedirikab.go.id', 'password' => Password::hash('4925'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 19, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kunjang', 'email' => 'kunjang@kedirikab.go.id', 'password' => Password::hash('4334'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 20, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'banyakan', 'email' => 'banyakan@kedirikab.go.id', 'password' => Password::hash('2544'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 21, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'ringinrejo', 'email' => 'ringinrejo@kedirikab.go.id', 'password' => Password::hash('8718'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 22, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'kayenkidul', 'email' => 'kayenkidul@kedirikab.go.id', 'password' => Password::hash('6596'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 23, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'ngasem', 'email' => 'ngasem@kedirikab.go.id', 'password' => Password::hash('9527'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 24, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'badas', 'email' => 'badas@kedirikab.go.id', 'password' => Password::hash('8829'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 25, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'semen', 'email' => 'semen@kedirikab.go.id', 'password' => Password::hash('2990'), 'kd_urusan' => 4, 'kd_bidang' => 11, 'kd_unit' => 26, 'kd_sub' => 1, 'active' => 1],
      ['username' => 'bakesbangpol', 'email' => 'bakesbangpol@kedirikab.go.id', 'password' => Password::hash('1478'), 'kd_urusan' => 4, 'kd_bidang' => 12, 'kd_unit' => 1, 'kd_sub' => 1, 'active' => 1],

    ];

    // Using Query Builder
    foreach ($datas as $data) {
      $this->db->table('users')->insert($data);
    }
  }
}
