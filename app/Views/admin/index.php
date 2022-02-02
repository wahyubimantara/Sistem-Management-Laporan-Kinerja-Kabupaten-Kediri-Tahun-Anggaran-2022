<?= $this->extend('templates/index'); ?>
<?= $this->section('page_content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-11">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col" style="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1;?>
      <?php foreach($users as $user): ?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?= $user->username; ?></td>
      <td><?= $user->email; ?></td>
      <td><?= $user->name; ?></td>

      <td style="text-align: center;">
              
        <a href= <?= base_url('admin/' .$user->userid); ?> class="btn btn-primary btn-circle btn-sm" title="Detail">
        <i class="fas fa-info"></i>    
        </a>

        <a href="<?= base_url(); ?>/admin/changePassword/<?= $user->userid;?>" class="btn btn-warning btn-circle btn-sm" title="Ubah Password" >
            <i class="fas fa-key"></i>
        </a>

        <a href="#" class="btn btn-danger btn-circle btn-sm"  title="Hapus" 
            onclick="hapus('<?= $user->userid; ?>')">
            
            <i class="fas fa-trash"></i>
        </a>

     </td>
    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('scriptku'); ?>

<script>

function hapus($id){
        var $hasil = confirm("Yakin Anda akan Menghapus Data ini?");
        if ($hasil){
            window.location= "<?php echo site_url("admin/hapus")?>/" +$id;
        }
    }

</script>


<?= $this->endSection(); ?>
 
    
