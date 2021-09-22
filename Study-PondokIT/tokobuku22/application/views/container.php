<!DOCTYPE html>

    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
        
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php $this->load->view("admin/_partials/sidebar.php") ?>
                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Container 1 - Gambar</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 bg-warning text-center">
                <h5>Container 1 - Gambar<h5>
            </div>
            <div class="col-4 bg-info text-center">
                <br>
                <br>
                <br><img src="<?php echo base_url(); ?>/assets/img/gedung.jpg" width="300" height="230">
                <br><b>Gedung Bonaventura</b>
            </div>
            <div class="col-4 bg-secondary text-center">
                <br>
                <br>
                <br><img src="<?php echo base_url(); ?>/assets/img/logo.png" width="206" height="245">
                <br><b>Logo UAJY</b>
            </div>
            <div class="col-4 bg-success text-center">
                <img src="<?php echo base_url(); ?>/assets/img/himsi.png" width="286" height="400">
                <br><b>Logo HIMSI</b>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-success text-center">
                <h5>Container 2 - Biodata Diri<h5>
            </div>
            <div class="col-6 bg-info text-center">
                <b>Data Diri</b>
                <br>
                <br>
                Nama                    : Yovita Erlinda Setiawan
                <br>
                NPM                     : 161709053
                <br>
                Kelamin                 : Perempuan
                <br>
                Tempat, Tanggal Lahir   : Kebumen, 9 Juni
                <br>
                Alamat                  : Kebumen, Jawa Tengah 54412
                <br>
                File                    : Minggu 3
            </div>
            <div class="col-6 bg-warning text-center">
                <b>Deskripsi Singkat</b>
                <br>
                <br>
                - Ambisius
                <br>
                - Optimis
                <br>
                - Kreatif
                <br>
                - Perfeksionis
                <br>
                - Kritis
                <br>
                - Mandiri
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>
