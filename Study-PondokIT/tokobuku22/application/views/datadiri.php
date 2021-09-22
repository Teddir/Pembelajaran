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
    <b>
<div class="judul"><b><p style="font-size: 25px">DATA DIRI</p></b>
    </b>
    </div>

    <table><tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td>Yovita Erlinda Setiawan</td>
</tr>
<tr>
    <td>NPM</td>
    <td>:</td>
    <td>161709091</td>
</tr>
<tr>
    <td>Prodi</td>
    <td>:</td>
    <td>Sistem Informasi</td>
    </tr>
<tr>
    <td>Alamat</td>
    <td>:</td>
    <td>Kebumen, Central Java, Indonesia</td>
    </tr>
<tr>
    <td>Nomor Telepon</td>
    <td>:</td>
    <td>0819 854542</td>
    </tr>
<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>Perempuan</td>
<tr>
    <td>Sosial Media</td>
    <td>:</td>
    <td>instagram : @jovitaerline</td>
</tr>
</table>

</body>
</head>
</html>

<style>
td, tr {
    margin: auto;
    padding: 10px;
}

body {
    margin: 10px;
    padding: 5px;
}

.judul {
    margin: 10px;
}
</style>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>
