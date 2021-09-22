<?php
require_once __DIR__ . '/vendor/autoload.php';

use Trafesium\Trafesium;
use Persegi\Persegi;
use Lingkaran\Lingkaran;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <style>
    
body
{
    background-color: rgb(37, 188, 188);
}
div .h3
{
    text-align: center;
    justify-content: space-between;
}
select
{
    color: rgb(17, 17, 17);
    color-adjust: #657;
    background-color: cadetblue;
    width: auto;
    margin-top: ;
}
form
{
    height: fit-content;
}
h1
{
    text-align: center;
    text-overflow: inherit;
    font-family: 'Oswald', sans-serif;
    margin-top: 10vh;
}
    </style>
</head>
<body>
<form action="" method="post">
    <hr>
    <div class="input-group mb-3">
        <h3>Hy Brother!! Menu --></h3> <br> <hr>
            <select name="opera" id="opera"> 
                <option value="persegi">Persegi</option>
                <option value="lingkaran">Lingkaran</option>
                <option value="trafesium">Trafesium</option>
            </select>
        <button class="btn btn-outline-secondary" type="submit" name="submit">Button</button>
    </div>
</form>
    <?php if (isset($_POST['submit'])) : ?>  <hr>
        <?php if ($_POST['opera'] == "persegi") : ?>
    <form method="post">
        <div class="form-group">
            <label for="panjang">Panjang Persegi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panjang" name="panjang">
            <small id="emailHelp" class="form-text text-muted">Harap diisi sesuai kebutuhan.</small>
        </div>
        <div class="form-group">
            <label for="tinggi">Tinggi Persegi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tinggi" name="tinggi">
        </div>
            <button type="submit" class="btn btn-primary" name="saper">Submit</button>
        <?php endif ?> 
    <?php endif ?>
</form> 
<?php if (isset($_POST["saper"])) {
    $panjang = $_POST['panjang'];
    $tinggi = $_POST['tinggi'];
    new Persegi($panjang, $tinggi);
}
?>
<?php if ($_POST['opera'] == "lingkaran") : ?>
    <form method="post">
    <div class="form-group">
    <label for="jari">Jari-Jari</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jari*" name="jari">
    <small id="emailHelp" class="form-text text-muted">Harap diisi sesuai kebutuhan.</small>
    </div>
    <button type="submit" class="btn btn-primary" name="sali">Submit</button>
    <?php endif ?> 
</form> 
<?php if (isset($_POST["sali"])) {
    new Lingkaran($_POST["jari"]);
}
?>
<?php if ($_POST['opera'] == "trafesium") : ?>
    <form method="post">
    <div class="form-group">
    <label for="sisi1">Sisi A</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panjang" name="sisi1">
    <small id="emailHelp" class="form-text text-muted">Harap diisi sesuai kebutuhan.</small>
    </div>
    <div class="form-group">
    <label for="sisi2">Sisi B</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panjang" name="sisi2">
    <small id="emailHelp" class="form-text text-muted">Harap diisi sesuai kebutuhan.</small>
    </div>
    <div class="form-group">
    <label for="tinggi">Tinggi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tinggi" name="tinggi">
    <small id="emailHelp" class="form-text text-muted">Harap diisi sesuai kebutuhan.</small>
    </div>
    <button type="submit" class="btn btn-primary" name="sate">Submit</button>
    <?php endif ?> 
</form> 
<?php if (isset($_POST["sate"])) {
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $tinggi = $_POST['tinggi'];
    new Trafesium($sisi1, $sisi2, $tinggi);
}
?>
<hr>
</div>
<br><br><br>
<h1>Selamat Datang</h1>
</body>
</html>
