
<div class="container mt-3">

    <div class="row">
    <div class="col-lg-6">
    <?php Flasher::flash(); ?>
    </div>
    
    </div>


    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" 
        data-target="#modal">
        Tambah Data
        </button>
        </div>    
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/Santri/cari" method="post">
                <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Artikel..." name="keyword" id="keeyword" autocomplete="off">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
        </div>
        </div>
        </form>
        </div>    
    </div>
    




    <div class="row">
        <div class="col-6">
        <h3>Kategori Artikel</h3>
            <ul class="list-group">
                <?php foreach ($data['str'] as $kamu) : ?>
                <li class="list-group-item ">
                <?= $kamu['kategori'] ?>
                <a href="<?= BASEURL; ?>/Santri/hapus/<?= $kamu['id'] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin');">Hapus</a>
                <a href="<?= BASEURL; ?>/Santri/update/<?= $kamu['id'] ?>" class="badge badge-primary float-right ml-2 tampilModalUbah"  data-toggle="modal" 
        data-target="#modal" data-id="<?= $kamu['id']; ?>">Update</a>
                <a href="<?= BASEURL; ?>/Santri/detail/<?= $kamu['id'] ?>" class="badge badge-warning float-right ml-2">Detail</a>
                </li>
                <?php endforeach ;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

            <form action="<?= BASEURL; ?>/Santri/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="image">Image</label>
                <input type="img" class="form-control" id="image" name="image" placeholder="">
            </div>
            
            <div class="form-group">
                <label for="judulArtikel">Judul Artikel</label>
                <input type="text" class="form-control" id="judulArtikel" name="judulArtikel" placeholder="">
            </div>

            <div class="form-group">
                <label for="artikel">Isi Artikel</label>
                <input type="text" class="form-control" id="artikel" name="artikel" placeholder=".....">
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori Artikel</label>
                    <select class="form-control" id="kategori" name="kategori">
                    <option value="Agama">Agama</option>
                    <option value="Pendidikan">Pendidikan</option></option>
                    <option value="Sejarah">Sejarah</option>
                </select>
            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
  </div>
</div>