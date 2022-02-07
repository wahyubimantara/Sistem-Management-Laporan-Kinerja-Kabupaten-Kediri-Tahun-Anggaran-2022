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
      <th scope="col">Status</th>
      <th scope="col">Show</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1;?>
      <?php foreach($users as $user): ?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?= $user->username; ?></td>
      <td><?= $user->email; ?></td>
      <td>
      <?php if ($user->name == 'admin') { ?>
        <span class="badge badge-warning"><?= $user->name; ?></span>
      <?php   } else {?>
        <span class="badge badge-primary"><?= $user->name; ?></span>
      <?php   } ?>
      </td>

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

     <td>
     <?php if ($user->kunci == '0') { ?>
        <span class="badge badge-warning">Belum Final</span>
      <?php   } else {?>
        <span class="badge badge-success">Final</span>
      <?php   } ?>
     </td>

     <td>
     <?php if ($user->name == 'user') { ?>
      <a href= "<?= base_url(); ?>/show/a/<?= $user->userid;?>" target="_blank" class="btn btn-primary btn-circle btn-sm" title="Tampilkan SKPD">
      <i class="far fa-eye"></i> 
        </a>
      <?php   } ?>
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
 
    
