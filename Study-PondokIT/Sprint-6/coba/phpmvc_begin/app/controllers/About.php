<?php
$user = "localhost";
$conn = mysqli_connect($user);
while($list = mysqli_fetch_assoc($conn)) {
?>
<div><?php echo $list['username']; ?></div>

<?php
}
?>