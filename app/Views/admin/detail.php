<?= $this->extend('templates/index'); ?>
<?= $this->section('page_content'); ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-11">
      <div class="card mb-" style="max-width: 740px;">

        <a class="nav-link" href="#" data-toggle="modal" data-target="#editModal">
          <i class="fas fa-edit" style="float: right;"></i>
        </a>

        <!-- Edit Modal-->

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 150%;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">

                <!-- isi -->
                <form action="<?= base_url(); ?>/admin/updateUser" method="post">
                  <input type="hidden" name="id" class="id" value="<?= $user->userid; ?>">

                  <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" value="<?= $user->username ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" value="<?= $user->email ?>">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="kode_urusan" class="col-sm-2 col-form-label">Kode Urusan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kd_urusan" value="<?= $user->kd_urusan ?>">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="kode_bidang" class="col-sm-2 col-form-label">Kode Bidang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kd_bidang" value="<?= $user->kd_bidang ?>">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="kode_unit" class="col-sm-2 col-form-label">Kode Unit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kd_unit" value="<?= $user->kd_unit ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="kode_sub" class="col-sm-2 col-form-label">Kode Sub</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kd_sub" value="<?= $user->kd_sub ?>">
                    </div>
                  </div>
                  <!-- isi -->


              </div>
              <div class="modal-footer">
                <input type="hidden" name="userid" class="userid">
                <button class="btn btn-secondary tombolKeluar" type="button" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary tombolSimpan" id="tombolSimpan">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        </form>

        <div class="row g-0" style="margin-left:5%;margin-top:5%;">
          <div class="col-md-4" style="text-align:center;">

            <img src="<?= base_url('/img/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= $user->username; ?>">

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
              </li>
              <li class="list-group-item">
                <small><a href="<?= base_url('admin'); ?>">&laquo; back to user list</a></small>
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
                    <td><?= $user->username; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Email</th>
                    <td>:</td>
                    <td><?= $user->email; ?></td>
                  </tr>


                  <tr>
                    <th scope="row">Kode Urusan</th>
                    <td>:</td>
                    <td><?= $user->kd_urusan; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Kode Bidang</th>
                    <td>:</td>
                    <td><?= $user->kd_bidang; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Kode Unit</th>
                    <td>:</td>
                    <td><?= $user->kd_unit; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Kode Sub</th>
                    <td>:</td>
                    <td><?= $user->kd_sub; ?></td>
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

<?= $this->section('scriptku'); ?>


<script>
  <?= $this->endSection(); ?>