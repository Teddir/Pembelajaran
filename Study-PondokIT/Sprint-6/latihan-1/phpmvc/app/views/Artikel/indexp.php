<h4><?php Flasher::sigup(); ?></h4>
<div class="container">
    <nav class="navbar navbar-light bg-with">
        <a class="navbar-brand text-dark" href="<?= BASEURL ; ?>/Blog">Navbar</a>  
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <form action="<?= BASEURL ; ?>/Login/tambah" >
        <button type="button" class="btn btn-primary tombolTambahData1" data-toggle="modal" 
        data-target="#modal">
        Login
        </button>
        </form>

    </nav>
</div>
<hr>
<div class="container">
    <p><i class="fa fa-toggle-on" aria-hidden="true" onclick="myFunction()"float="right">DarkMode</i></p>
    <h1>The 12rA Blog</h1>

    <hr>
    <div class="row non-gutters float-right mp-2"style="width: 19rem;">
        <div class="col-md- bg-none  pt-4">
            <div class="card-body">
            <ul class="nav flex-column ">
                <li class="nav-item">
                <h2><a class="nav-link active text-dark" href="?page=1">
                    Categori</a></h2><p><a href="#">Agama</a></p><p><a href="#">pendidikan</a></p><p><a href="#">Sejarah</a></p>
                </li>

                <?php foreach ($data['ls'] as $kamu) : ?>
                <li class="nav-item" line-height="25px">
                </li>
                <?php endforeach ;?>

            </ul>
            <div class="card-body bg-dark">
            <h2 class="card-title text-white bg-dark">QUOTES</h2><hr class="bg-secondry">
            <h5 class="card-title text-white bg-dark">مَنْ جَدَّ وَجَدَ</h5>
            <p class="card-text text-white bg-dark">Setiap orang yang bersungguh-sungguh, akan mendapatkan bagian.</p>
            </div>
            <h3>About PondokIT</h3>
            <div class="image" style="width: 18rem;">
                    <img src="<?= BASEURL ; ?>/img/pondok_programmer.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Pondok IT adalah sebuah tempat pendidikan IT Non formal berbasis pondok 
                        yang berada di yogyakarta, Membekali santrinya dengan skill IT & ilmu agama Dan
                        mengarahkan santri belajar sesuai PASSION mereka..
                    </p>
                </div>
                <div class="details">
                <a href="https://www.youtube.com/channel/UCOXiols4p--ntn9B0D4FjTA">
                <i class="fa fa-youtube-play" aria-hidden="true" font-size="12px"></i>
                </a>
            </div>    
        </div>    
    </div>
</div>
</div>
        </div>
    </div>          
</div> 
<?php foreach ($data['ls'] as $kamu) : ?>
<div class="container">
    <h1 class="title">
        <a href="">
    <?= $kamu['judulArtikel'] ?>
        </a>
    </h1> 
    <div class="details">
        <span class="date">
        <i class="fa fa-calendar" aria-hidden="true"></i>
        <?= $kamu['tanggal'] ?>
        </span>
        <span class="categori">
            <i class="fa fa-folder" aria-hidden="true"></i>
            <?= $kamu['kategori'] ?>
        </span>
    </div>
    <div class="content">
        <p class="m-right-xs-5">
        <?= substr($kamu['artikel'], 0, 350); ?>.....
        </p>
        <p><a href="<?= BASEURL; ?>/Blog/detail/<?= $kamu['id'] ?>" class="primary">Read More</a></p>
        <br>
    </div>
</div>
<?php endforeach ;?>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel1">Halaman Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body1">

            <form action="<?= BASEURL; ?>/Blog/" method="post">
                <label for="name"></label>
                <input type="img" class="form-control" id="name" name="name" placeholder="Username">
                <label for="password"></label>
                <input type="img" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </div>
  </div>
</div>


