<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Enumorator</h1>

            <div class="col md-6">
              <?php if($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data enumerator 
                  <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
            </div>


        </div>  
      </div>
      
    </div><!-- /.container-fluid -->

      


    </section>
   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengaturan Enumorator</h3>
                <a href="<?= base_url()?>index.php/pengaturan_enum" class="btn btn-primary float-right">Tambah Enumorator</a>
                
                  
              </div>

              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">No HP</th>
                      <th scope="col">Kecamatan</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach( $enum as $enm ): ?>
                    <tr>
                      <td><?= $enm['Nama_Petugas']; ?></td>
                      <td><?= $enm['NO_HP']; ?></td>
                      <td><?= $enm['Kecamatan']; ?></td>
                      <td><a href="<?= base_url()?>index.php/enum/cek_data/<?= $enm['ID'] ?>" class="btn btn-primary">Cek Data</a></td>
                      <td><a href="<?= base_url()?>index.php/pengaturan_enum/edit_enum/<?= $enm['ID'] ?>" class="btn btn-success">Edit</a></td>
                      <?php if($enm['Status']=="aktif"): ?>
                        <td><a href="<?= base_url()?>index.php/pengaturan_enum/block_enum/<?= $enm['ID'] ?>" class="btn btn-warning">Block</a></td>
                      <?php else: ?>
                        <td><a href="<?= base_url()?>index.php/pengaturan_enum/unblock_enum/<?= $enm['ID'] ?>" class="btn btn-warning">Unblock</a></td>
                      <?php endif ?>                      
                      <td><a href="<?= base_url()?>index.php/pengaturan_enum/hapus_enum/<?= $enm['ID'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda akan menghapus?');">Hapus</a></td>                      
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>