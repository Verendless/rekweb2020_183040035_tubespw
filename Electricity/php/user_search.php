<?php 

require 'functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM user WHERE
            username LIKE '%$keyword%' OR
            email LIKE '%$keyword%'";

$user = query($query);
 ?>
<?php $i = 1 ?>
<table>
	<tr>
  		<th>#</th>
  		<th><a class="sort_user" id="username" data-order="desc" href="#">Username</a></th>
  		<th><a class="sort_user" id="email" data-order="desc" href="#">Email</a></th>

  	</tr>
  	<?php if (empty($user)): ?>
  	<td colspan="3">
	  <h5 class="3">User Tidak Di Temukan</h5>
	</td>
	<?php endif ?>
  	<?php foreach ($user as $users): ?>
  	<tr>
  		<td><?= $i++ ?></td>
  		<td><?= $users['username'] ?></td>
  		<td><?= $users['email'] ?></td>
  	</tr>	
  	<?php endforeach ?>
</table>