<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Enumorator</h1>
          </div>  
        </div>
      </div><!-- /.container-fluid -->
    </section>


    
<div class="container">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Isi Identitas Enumerator
                
            </div>
            <div class="card-body">
            <div class="container">
            
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $enum['ID']; ?>">
                        <div class="form-group row">
                            <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" value="<?= $enum['Nama_Petugas']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_petugas')  ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $enum['Nama_Lengkap']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_lengkap')  ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" name="nik" class="form-control" id="nik" value="<?= $enum['NIK']; ?>">
                            <small class="form-text text-danger"><?= form_error('nik')  ?></small>
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="email" value="<?= $enum['Email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email')  ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="password" value="<?= $enum['Password']; ?>">
                            <input type="checkbox" onclick="myFunction()">Lihat Password
                            <small class="form-text text-danger"><?= form_error('password')  ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                            <div class="col-sm-10">
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $enum['NO_HP']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp')  ?></small>
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $enum['Kecamatan']; ?>">
                            <small class="form-text text-danger"><?= form_error('kecamatan')  ?></small>
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <label for="desa" class="col-sm-2 col-form-label">Kelurahan/Desa</label>
                            <div class="col-sm-10">
                            <input type="text" name="desa" class="form-control" id="desa" value="<?= $enum['KelurahanDesa']; ?>">
                            <small class="form-text text-danger"><?= form_error('desa')  ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-10">
                            <input type="text" name="rw" class="form-control" id="rw" value="<?= $enum['RW']; ?>">
                            <small class="form-text text-danger"><?= form_error('rw')  ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                            <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= $enum['Jabatan']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="master" class="col-sm-2 col-form-label">Master</label>
                            <div class="col-sm-10">
                            <input type="text" name="master" class="form-control" id="master" value="<?= $enum['Master']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status"  class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                            <select class="form-control" id="status" name="status">
                                <option value="aktif">Aktif</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="supervisi" class="col-sm-2 col-form-label">Supervisi</label>
                            <div class="col-sm-10">
                            <input type="text" name="supervisi" class="form-control" id="supervisi" value="<?= $enum['Supervisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('supervisi')  ?></small>
                            </div>
                        </div>                        
                        <button type="submit" name="edit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
                </div>
            </div>

            </div>
            </div>
  </div>