<form action="<?= BASEURL; ?>/Login/tambah" method="post">
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <input type="text" placeholder="Name" name="name" id="name">
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="pass" id="password">
        </div>

        <div class="row">
    <div class="col-lg-6">
    <?php Flasher::flash(); ?>
    </div>
    
    </div>
        <button class="btn" type="submit" name="submit" value="submit">Sig in</button>
            <i class="fa fa-spinner" aria-hidden="true">...</i>
    </div>

</form>