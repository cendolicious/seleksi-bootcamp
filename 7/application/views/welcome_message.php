<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>7</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<center>
	<h2>Seleksi Grand Bootcamp Arkademy</h2>
	<h5>Dicky Eka Ramadhan</h5></center>
	</br>
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Jumlah_product</th>
    </tr>
  </thead>
  <tbody>
  	<?php
		foreach ($data as $row){
	?>
	<tr>

	<?php
	echo '<th scope="row">'.$row['id'].'</th>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['Jumlah_product'].'</td>';
	?>

	</tr>
	<?php
	}
	?>
    
  </tbody>
</table>
</div>
</body>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</html>