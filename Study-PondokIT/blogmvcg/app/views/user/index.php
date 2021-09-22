<div class="container">
    <h1>Selamat datang di user</h1>

<div class="row">
<div class="col-6">
<?php foreach ($data['usr'] as $user) : ?>
    <ul>
        <li><?=  $user['username'] ; ?></li>
        <li><?=  $user['password'] ; ?></li>
    </ul>
<?php endforeach ; ?>
</div>
</div>
</div>