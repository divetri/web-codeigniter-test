<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daftar Pengguna</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="main.css">
</head>

<body>

	<div id="container" class="text-center">
		<h1>Selamat datang</h1>
		<div id="main">
			Daftar Pengguna
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<table id="daftar-table" class="table table-bordered">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
			<br>
			<button type="button" data-toggle="modal" data-target="#signupModal" class="btn btn-success">Sign Up</button>
		</div>
		<div class="modal fade" id="signupModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Masukkan Data Diri</h4>
					</div>
					<div class="modal-body">
						<form action="create.js" method="POST">
                            <input class="form-control" type="text" placeholder="E-mail Rumahweb" name="email"></input>
                            <input class="form-control" type="password" placeholder="Password" name="password"></input>
                            <input class="form-control" type="date" name="date"></input>
                            <input class="btn btn-warning" type="submit" value="Daftar" name="submit">
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
<script src="daftar.js"></script>
