<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/adminStyle.css">
</head>
<body>
<div class="container">
			<nav>
				<h3 class="logo">Administrator</h3>
				<ul>
          <li><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
          <li><a href="<?= site_url('classes'); ?>">Classes</a></li>
          <li><a href="<?= site_url('subjects'); ?>">Subjects</a></li>
          <li><a href="<?= site_url('studentaddnew'); ?>">Student Add New</a></li>
          <li><a href="<?= site_url('studentlist'); ?>">Student List</a></li>
				</ul>
			</nav>
			<div class="main-content">
				<div class="judul-page-halaman">
					<h4 class="judul">Sistem Laporan Siswa Online</h4>
					<h3 class="judul-page">Dashboard</h3>
				</div>
				<div class="content">
					<!-- kita bakal ngodingnya  di bagian class content nya ini -->
					<div class="card totalStudent">
						<div class="CardIcon">
            <img src="<?= base_url('assets/images/multiple-users-silhouette.png'); ?>" alt="Total Classes">
						</div>
						<div class="cardText">
							<h5>Total Student</h5>
							<p>3</p>
						</div>
					</div>
					<div class="card totalClasses">
						<div class="CardIcon">
            <img src="<?= base_url('assets/images/list.png'); ?>" alt="Total Classes">
						</div>
						<div class="cardText">
							<h5>Total Classes</h5>
							<p>3</p>
						</div>
					</div>
					<div class="card totalSubject">
						<div class="CardIcon">
             <img src="<?= base_url('assets/images/book.png'); ?>" alt="Total Classes">
						</div>
						<div class="cardText">
							<h5>Total Subject</h5>
							<p>3</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
