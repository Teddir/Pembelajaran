<div class="container">
</div>
<form action="<?= BASEURL; ?>/Sigup/tambah" method="post">
    <div class="login-box">
    <h4><?php Flasher::sigup(); ?></h4>
        <h1>Register</h1>
        <div class="textbox">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <label for="name"></label>
            <input type="text" placeholder="name" name="name" id="name" autocomplete="off">
        </div>
        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <label for="password"></label>
                <input type="password" placeholder="password" name="password" id="password" autocomplete="off">
        </div>
        
        <button class="btn" type="submit" name="submit" value="submit" herf="<?= BASEURL; ?>/Artikel/detail/<?= $kamu['id'] ?>">Daftar</button>
            <i class="fa fa-spinner" aria-hidden="true">...</i>
    </div>
</form>


