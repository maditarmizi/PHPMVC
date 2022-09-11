<div class="container mt-3">


  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


  <div class="row mb-3">
   <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal"> Tambah Data Mahasiswa
    </button>
   </div>
  </div>


  <div class="row mb-3">
   <div class="col-lg-6">
    <form action="<?php echo BASEURL; ?>/mahasiswa/cari" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
      </div>
    </div>
    </form>
   </div>
  </div>

 



    <div class="row">
        <div class="col-lg-6">
            <h3>DAFTAR MAHASISWA</h3>
            <!-- Button trigger modal -->
                
                
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item">
                        <?php echo $mhs['nama']; ?>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('anda yakin hapus!');">Hapus</a>

                        <a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Ubah</a>

                        
                        <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>
                <?php endforeach; ?>
                </ul>
            
        </div>
    </div>


</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama1">Nama</label>
            <input type="text" class="form-control" id="nama1" name="nama" placeholder="Masukkan Nama">
        </div>

        <div class="form-group">
            <label for="nim1">NIM</label>
            <input type="number" class="form-control" id="nim1" name="nim" placeholder="Masukkan NIM">
        </div>

        <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" class="form-control" id="email1" name="email" placeholder="Masukkan Email">
        </div>

        <div class="form-group">
            <label for="jurusan1">Jurusan</label>
            <select class="form-control" id="jurusan1" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Informasi">Teknik Informasi</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>