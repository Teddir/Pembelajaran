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
                        <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>PENGALAMAN ORGANISASI</title>

<body>
    <b>
<div class="judul"><b><p style="font-size: 25px">PENGALAMAN ORGANISASI</p></b>
    </b>
    </div>

    <table><tr>
    <td>ORGANISASI RESMI</td>
    <td>:</td>
    <td>- ANGGOTA HIMSI PERTAMA WKWKWK</td>
</tr>
<tr>
    <td>ORGANISASI TIDAK RESMI</td>
    <td>:</td>
    <td>BANYAKKK</td>
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


----------------------------------------------------------------


                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>
