<?= $this->extend('templates/index'); ?>
<?= $this->section('page_content'); ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-11">
      <div class="card mb-" style="max-width: 740px;">

        <div class="row g-0" style="margin-left:5%;margin-top:5%;">
          <div class="col-md-4" style="text-align:center;">

            <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="badge badge-primary"><?= user()->username; ?></span>
              </li>
              <li class="list-group-item">
                <span>Ubah Password</span>
              <a href="<?= base_url(); ?>/user/changePassword/<?= user()->id; ?>" class="btn btn-warning btn-circle btn-sm" title="Ubah Password">
                  <i class="fas fa-key"></i>
                </a>
                
              </li>
            </ul>

          </div>

          <div class="col-md-8">
            <div class="card-body">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th scope="row">Username</th>
                    <td>:</td>
                    <td><?= user()->username; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Nama SKPD</th>
                    <td>:</td>
                    <td><?= user()->fullname; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Kode SKPD</th>
                    <td>:</td>
                    <td><?= user()->kodeSkpd; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Kode Unit SKPD</th>
                    <td>:</td>
                    <td><?= user()->kodeUnitSkpd; ?></td>
                  </tr>

                </tbody>
              </table>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>