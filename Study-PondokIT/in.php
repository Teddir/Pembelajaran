<?php
class mobil {
  var $jenis = 'kamu';

  function setJenis($x) {
    $this->jenis = $x;
  }
}
$mob = new mobil();
$mob->setJenis('Teddi Rahman');
echo $mob->jenis;
?>