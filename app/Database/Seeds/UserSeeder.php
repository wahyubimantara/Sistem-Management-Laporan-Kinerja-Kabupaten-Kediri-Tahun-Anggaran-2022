<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use \Myth\Auth\Password;

class UserSeeder extends Seeder
{
  public function run()
  {
    $datas = [
      ['username'=>'admin', 'email'=>'admin@kedirikab.go.id', 'password_hash'=>Password::hash('bpkadjaya2022'), 'kodeSkpd'=>'1111111111111110000', 'kodeUnitSkpd'=>'1111111111111110000','active'=>1,'kunci'=>1],
['username'=>'pendidikan', 'email'=>'pendidikan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.01.2.19.0.00.01.0000', 'kodeUnitSkpd'=>'1.01.2.19.0.00.01.0000','active'=>1,'kunci'=>0],
['username'=>'kesehatan', 'email'=>'kesehatan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.02.0.00.0.00.02.0000', 'kodeUnitSkpd'=>'1.02.0.00.0.00.02.0000','active'=>1,'kunci'=>0],
['username'=>'rskk', 'email'=>'rskk@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.02.0.00.0.00.02.0000', 'kodeUnitSkpd'=>'1.02.0.00.0.00.02.0001','active'=>1,'kunci'=>0],
['username'=>'rsslg', 'email'=>'rsslg@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.02.0.00.0.00.02.0000', 'kodeUnitSkpd'=>'1.02.0.00.0.00.02.0002','active'=>1,'kunci'=>0],
['username'=>'dpupr', 'email'=>'dpupr@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.03.0.00.0.00.03.0000', 'kodeUnitSkpd'=>'1.03.0.00.0.00.03.0000','active'=>1,'kunci'=>0],
['username'=>'dperkim', 'email'=>'dperkim@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.04.1.03.2.10.04.0000', 'kodeUnitSkpd'=>'1.04.1.03.2.10.04.0000','active'=>1,'kunci'=>0],
['username'=>'satpolpp', 'email'=>'satpolpp@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.05.0.00.0.00.05.0000', 'kodeUnitSkpd'=>'1.05.0.00.0.00.05.0000','active'=>1,'kunci'=>0],
['username'=>'bpbd', 'email'=>'bpbd@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.05.0.00.0.00.29.0000', 'kodeUnitSkpd'=>'1.05.0.00.0.00.29.0000','active'=>1,'kunci'=>0],
['username'=>'dinsos', 'email'=>'dinsos@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'1.06.0.00.0.00.06.0000', 'kodeUnitSkpd'=>'1.06.0.00.0.00.06.0000','active'=>1,'kunci'=>0],
['username'=>'disnaker', 'email'=>'disnaker@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.07.3.32.0.00.07.0000', 'kodeUnitSkpd'=>'2.07.3.32.0.00.07.0000','active'=>1,'kunci'=>0],
['username'=>'dkpp', 'email'=>'dkpp@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.09.3.27.0.00.08.0000', 'kodeUnitSkpd'=>'2.09.3.27.0.00.08.0000','active'=>1,'kunci'=>0],
['username'=>'dlh', 'email'=>'dlh@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.11.0.00.0.00.09.0000', 'kodeUnitSkpd'=>'2.11.0.00.0.00.09.0000','active'=>1,'kunci'=>0],
['username'=>'dukcapil', 'email'=>'dukcapil@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.12.0.00.0.00.10.0000', 'kodeUnitSkpd'=>'2.12.0.00.0.00.10.0000','active'=>1,'kunci'=>0],
['username'=>'dpmpd', 'email'=>'dpmpd@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.13.0.00.0.00.11.0000', 'kodeUnitSkpd'=>'2.13.0.00.0.00.11.0000','active'=>1,'kunci'=>0],
['username'=>'dppkbp3a', 'email'=>'dppkbp3a@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.14.2.08.0.00.12.0000', 'kodeUnitSkpd'=>'2.14.2.08.0.00.12.0000','active'=>1,'kunci'=>0],
['username'=>'perhubungan', 'email'=>'perhubungan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.15.0.00.0.00.13.0000', 'kodeUnitSkpd'=>'2.15.0.00.0.00.13.0000','active'=>1,'kunci'=>0],
['username'=>'kominfo', 'email'=>'kominfo@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.16.2.21.2.20.14.0000', 'kodeUnitSkpd'=>'2.16.2.21.2.20.14.0000','active'=>1,'kunci'=>0],
['username'=>'kopusmik', 'email'=>'kopusmik@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.17.0.00.0.00.15.0000', 'kodeUnitSkpd'=>'2.17.0.00.0.00.15.0000','active'=>1,'kunci'=>0],
['username'=>'dpmptsp', 'email'=>'dpmptsp@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.18.0.00.0.00.16.0000', 'kodeUnitSkpd'=>'2.18.0.00.0.00.16.0000','active'=>1,'kunci'=>0],
['username'=>'darsipus', 'email'=>'darsipus@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'2.24.2.23.0.00.17.0000', 'kodeUnitSkpd'=>'2.24.2.23.0.00.17.0000','active'=>1,'kunci'=>0],
['username'=>'perikanan', 'email'=>'perikanan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'3.25.0.00.0.00.18.0000', 'kodeUnitSkpd'=>'3.25.0.00.0.00.18.0000','active'=>1,'kunci'=>0],
['username'=>'dparbud', 'email'=>'dparbud@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'3.26.2.22.0.00.19.0000', 'kodeUnitSkpd'=>'3.26.2.22.0.00.19.0000','active'=>1,'kunci'=>0],
['username'=>'dipertabun', 'email'=>'dipertabun@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'3.27.0.00.0.00.20.0000', 'kodeUnitSkpd'=>'3.27.0.00.0.00.20.0000','active'=>1,'kunci'=>0],
['username'=>'perdagangan', 'email'=>'perdagangan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'3.30.3.31.0.00.21.0000', 'kodeUnitSkpd'=>'3.30.3.31.0.00.21.0000','active'=>1,'kunci'=>0],
['username'=>'hukum', 'email'=>'hukum@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0001','active'=>1,'kunci'=>0],
['username'=>'kesra', 'email'=>'kesra@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0002','active'=>1,'kunci'=>0],
['username'=>'perekonomian', 'email'=>'perekonomian@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0003','active'=>1,'kunci'=>0],
['username'=>'pembangunan', 'email'=>'pembangunan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0004','active'=>1,'kunci'=>0],
['username'=>'umum', 'email'=>'umum@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0005','active'=>1,'kunci'=>0],
['username'=>'organisasi', 'email'=>'organisasi@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0006','active'=>1,'kunci'=>0],
['username'=>'pemerintahan', 'email'=>'pemerintahan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'4.01.5.06.0.00.25.0007','active'=>1,'kunci'=>0],
['username'=>'inspektorat', 'email'=>'inspektorat@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.02.0.00.0.00.26.0000', 'kodeUnitSkpd'=>'4.02.0.00.0.00.26.0000','active'=>1,'kunci'=>0],
['username'=>'bappeda', 'email'=>'bappeda@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'5.01.0.00.0.00.22.0000', 'kodeUnitSkpd'=>'5.01.0.00.0.00.22.0000','active'=>1,'kunci'=>0],
['username'=>'bpkad', 'email'=>'bpkad@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'5.02.0.00.0.00.23.0000', 'kodeUnitSkpd'=>'5.02.0.00.0.00.23.0000','active'=>1,'kunci'=>0],
['username'=>'bapenda', 'email'=>'bapenda@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'5.02.0.00.0.00.24.0000', 'kodeUnitSkpd'=>'5.02.0.00.0.00.24.0000','active'=>1,'kunci'=>0],
['username'=>'bkd', 'email'=>'bkd@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'5.03.5.04.0.00.25.0000', 'kodeUnitSkpd'=>'5.03.5.04.0.00.25.0000','active'=>1,'kunci'=>0],
['username'=>'balitbang', 'email'=>'balitbang@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'5.05.0.00.0.00.26.0000', 'kodeUnitSkpd'=>'5.05.0.00.0.00.26.0000','active'=>1,'kunci'=>0],
['username'=>'sekwan', 'email'=>'sekwan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'6.01.0.00.0.00.27.0000', 'kodeUnitSkpd'=>'6.01.0.00.0.00.27.0000','active'=>1,'kunci'=>0],
['username'=>'mojo', 'email'=>'mojo@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.30.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.30.0000','active'=>1,'kunci'=>0],
['username'=>'kras', 'email'=>'kras@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.31.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.31.0000','active'=>1,'kunci'=>0],
['username'=>'ngadiluwih', 'email'=>'ngadiluwih@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.32.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.32.0000','active'=>1,'kunci'=>0],
['username'=>'kandat', 'email'=>'kandat@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.33.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.33.0000','active'=>1,'kunci'=>0],
['username'=>'wates', 'email'=>'wates@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.34.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.34.0000','active'=>1,'kunci'=>0],
['username'=>'ngancar', 'email'=>'ngancar@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.35.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.35.0000','active'=>1,'kunci'=>0],
['username'=>'puncu', 'email'=>'puncu@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.36.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.36.0000','active'=>1,'kunci'=>0],
['username'=>'plosoklaten', 'email'=>'plosoklaten@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.37.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.37.0000','active'=>1,'kunci'=>0],
['username'=>'gurah', 'email'=>'gurah@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.38.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.38.0000','active'=>1,'kunci'=>0],
['username'=>'pagu', 'email'=>'pagu@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.39.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.39.0000','active'=>1,'kunci'=>0],
['username'=>'gampengrejo', 'email'=>'gampengrejo@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.40.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.40.0000','active'=>1,'kunci'=>0],
['username'=>'grogol', 'email'=>'grogol@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.41.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.41.0000','active'=>1,'kunci'=>0],
['username'=>'papar', 'email'=>'papar@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.42.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.42.0000','active'=>1,'kunci'=>0],
['username'=>'purwoasri', 'email'=>'purwoasri@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.43.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.43.0000','active'=>1,'kunci'=>0],
['username'=>'plemahan', 'email'=>'plemahan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.44.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.44.0000','active'=>1,'kunci'=>0],
['username'=>'pare', 'email'=>'pare@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.45.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.45.0000','active'=>1,'kunci'=>0],
['username'=>'kepung', 'email'=>'kepung@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.46.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.46.0000','active'=>1,'kunci'=>0],
['username'=>'kandangan', 'email'=>'kandangan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.47.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.47.0000','active'=>1,'kunci'=>0],
['username'=>'tarokan', 'email'=>'tarokan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.48.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.48.0000','active'=>1,'kunci'=>0],
['username'=>'kunjang', 'email'=>'kunjang@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.49.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.49.0000','active'=>1,'kunci'=>0],
['username'=>'banyakan', 'email'=>'banyakan@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.50.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.50.0000','active'=>1,'kunci'=>0],
['username'=>'ringinrejo', 'email'=>'ringinrejo@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.51.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.51.0000','active'=>1,'kunci'=>0],
['username'=>'kayenkidul', 'email'=>'kayenkidul@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.52.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.52.0000','active'=>1,'kunci'=>0],
['username'=>'ngasem', 'email'=>'ngasem@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.53.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.53.0000','active'=>1,'kunci'=>0],
['username'=>'badas', 'email'=>'badas@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.54.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.54.0000','active'=>1,'kunci'=>0],
['username'=>'semen', 'email'=>'semen@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'7.01.0.00.0.00.55.0000', 'kodeUnitSkpd'=>'7.01.0.00.0.00.55.0000','active'=>1,'kunci'=>0],
['username'=>'bakesbangpol', 'email'=>'bakesbangpol@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'8.01.0.00.0.00.28.0000', 'kodeUnitSkpd'=>'8.01.0.00.0.00.28.0000','active'=>1,'kunci'=>0],
['username'=>'sekda', 'email'=>'sekda@kedirikab.go.id', 'password_hash'=>Password::hash('123456'), 'kodeSkpd'=>'4.01.5.06.0.00.25.0000', 'kodeUnitSkpd'=>'0','active'=>1,'kunci'=>0]



    ];

    // Using Query Builder
    foreach ($datas as $data) {
      $this->db->table('users')->insert($data);
    }
  }
}
