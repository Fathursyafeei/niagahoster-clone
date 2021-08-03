<?php
  include "./connection.php";

  $plans = mysqli_query($conn, 'SELECT * FROM pricing_plans');
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<!-- Bootstrap Icons -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="./assets/images/favicon.png" />

		<!-- Font-Awesome CDN -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
			integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>

		<!-- Montserrat Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet" />

		<!-- Roboto Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="./assets/css/styles.css" />

		<title>Niagahoster</title>
	</head>
	<body>
		<div class="container" id="topContent">
			<div class="row">
				<div class="col d-flex justify-content-start align-items-center mt-2">
					<i class="bi bi-bookmark-star-fill"></i>
					<span class="ms-2" id="top-text">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</span>
				</div>
				<div class="col d-flex justify-content-end align-items-center mt-2">
					<i class="bi bi-telephone-fill"></i>
					<span class="rightCol-topText mx-3">0274-5305505</span>
					<i class="bi bi-chat-fill"></i>
					<span class="rightCol-topText mx-3">Live Chat</span>
					<i class="bi bi-person-circle"></i>
					<span class="rightCol-topText mx-3">Member Area</span>
				</div>
			</div>
		</div>

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg border-top border-bottom border-1 mt-2">
			<div class="container">
				<img src="./assets/images/niagahoster-logo.png" alt="Niagahoster Logo" width="200" class="img-fluid" />
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="bi bi-menu-button-wide-fill"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Hosting</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Domain</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Server</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Website</a>
						</li>
						<li class="nav-item ms-3 me-2">
							<a class="nav-link" href="#">Afiliasi</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Promo</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Pembayaran</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Review</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Kontak</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End of Navbar -->

		<!-- Jumbotron -->
		<div class="container text-montserrat">
			<div class="row my-5 justify-content-center align-items-center">
				<div class="col">
					<div class="d-flex flex-column">
						<h1 class="fw-bold h1-jumbotron">PHP Hosting</h1>
						<h3 class="h3-jumbotron mb-4">Cepat, handal, penuh dengan<br />modul PHP yang Anda butuhkan</h5>
						<p class="p-jumbotron"><i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Solusi PHP untuk performa query yang lebih cepat.</span></p>
						<p class="p-jumbotron"><i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Konsumsi memori yang lebih rendah.</span></p>
						<p class="p-jumbotron"><i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</span></p>
						<p class="p-jumbotron"><i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Fitur enkripsi IonCube dan Zend Guard Loaders</span></p>
					</div>
				</div>
				<div class="col d-flex justify-content-end">
					<img src="./assets/svg/illustration banner PHP hosting-01.svg" alt="Illustration Banner PHP" width="500" class="img-fluid" />
				</div>
			</div>
		</div>
		<!-- End of Jumbotron -->

		<!-- Content Section -->
		<section class="border-top border-bottom border-1">
			<div class="container">
				<!-- Zen Guard, Composer, ionCube -->
				<div class="row justify-content-center align-items-center mt-5 text-montserrat">
					<div class="col-10 text-center">
						<div class="row align-items-center">
							<div class="col d-flex justify-content-center mt-5">
								<div class="d-flex flex-column mt-5">
									<embed src="./assets/svg/icon PHP Hosting_zendguard.svg" type="" alt="PHP Zen Guard Loader" width="150" class="img-fluid" />
									<p class="mt-3">PHP Zen Guard Loader</p>
								</div>
							</div>
							<div class="col d-flex justify-content-center">
								<div class="d-flex flex-column">
									<embed src="./assets/svg/icon PHP Hosting_composer.svg" type="" alt="PHP Composer" width="150" class="img-fluid" />
									<p class="mt-3">PHP Composer</p>
								</div>
							</div>
							<div class="col d-flex justify-content-center mt-5">
								<div class="d-flex flex-column mt-5">
									<embed src="./assets/svg/icon PHP Hosting_ioncube.svg" type="" alt="PHP ionCube Loader" width="150" class="img-fluid" />
									<p class="mt-3">PHP ionCube Loader</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Zen Guard, Composer, ionCube -->

				<!-- Text Paket Card -->
				<div class="row text-center mt-5 text-montserrat">
					<div class="col d-flex justify-content-center">
						<div class="d-flex-flex-column">
							<h2 class="fw-bold h2-paketCard">Paket Hosting Singapura yang Tepat</h2>
							<p class="p-paketCard">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
						</div>
					</div>
				</div>
				<!-- End of Text Paket Card -->

				<!-- Pricing Card -->
				<div class="row justify-content-center mt-5" >
					<div class="card-group">
					<?php while($plan = mysqli_fetch_assoc($plans)) : ?>
						<div class="card border-0 text-center" >
							<table class="table table-bordered" style="<?= ($plan['best_seller'] == 'yes') ? 'border:solid #008FEE;' : '' ?>">
								<?= ($plan['best_seller'] == 'yes') ? '<div class="ribbon text-uppercase">Best Seller</div>' : '' ?>
								<thead class="fw-bold text-montserrat fs-3">
									<tr>
										<th scope="col" style="<?= ($plan['best_seller'] == 'yes') ? 'background-color: #008FEE; color: #f7f7f7;' : '' ?>"><?= $plan['pricing_name'] ?></th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-montserrat">
										<td style="<?= ($plan['best_seller'] == 'yes') ? 'background-color: #008FEE; color: #f7f7f7;' : '' ?>"><div class="disc text-decoration-line-through">Rp <?= $plan['old_price'] ?></div><span class="align-top">Rp.</span><span class="fw-bolder" style="font-size: 50px;"><?= $plan['front_newPrice'] ?></span> <span class=" align-top"><b>.<?= $plan['back_newPrice'] ?></b>/ bln</span></td>
									</tr>
									<tr class="text-roboto" style="<?= ($plan['best_seller'] == 'yes') ? 'background-color:#007FDE; color: #f7f7f7;' : '' ?>">
										<td style="font-size: 14px;"><b><?= $plan['registered_user'] ?></b> Pengguna Terdaftar</td>
									</tr>
									<tr>
										<td>
											<ul class="text-roboto list-unstyled mt-3" style="line-height: 2rem; font-size: 14px;">
												<li class="text-uppercase"><b><?= $plan['resource_power'] ?>x Resource Power</b></li>
												<li><b><?= $plan['disk_space'] ?></b> Disk Space</li>
												<li><b>Unlimited</b> Bandwith</li>
												<li><?= ($plan['POP3'] == 'yes') ? '<b>Unlimited</b> POP3 Email' : '' ?></li>
												<li><b>Unlimited</b> Databases</li>
												<li><b><?= $plan['domain'] ?></b> <?= ($plan['pricing_name'] == 'Bayi') ? '' : 'Addon' ?> <?= ($plan['pricing_name'] == 'Bayi') ? 'Domain' : 'Domains' ?> </li>
												<li><b><?= ($plan['pricing_name'] == 'Bisnis') ? 'Magic Auto' : 'Instant' ?></b> Backup <?= ($plan['pricing_name'] == 'Bisnis') ? '& Restore' : '' ?></li>
												<li><?= ($plan['free_domain'] == 'yes') ? '<b>Unlimited</b> POP3 Email' : '' ?></li>
												<li><b>Unlimited SSL</b> Gratis Selamanya</li>
												<li><?= ($plan['name_server'] == 'yes') ? '<b>Private</b> Name Server' : '' ?></li>
												<li><?= ($plan['service_support'] == 'yes') ? '<b>Prioritas</b> Layanan Support' : '' ?></li>
												<li><?= ($plan['pricing_name'] == 'Bisnis') ? '<b class="fw-bold fs-5" style="color: #008fee;">★★★★★</b>' : '' ?></li>
												<li>
													<?php
														if($plan['mail_protection'] == 'SpamAssasin'){
															echo '<b>SpamAssasin</b> Mail Protection';
														}else if($plan['mail_protection'] == 'SpamExpert'){
															echo '<b>SpamExpert</b> Pro Mail Protection';
														}else{
															echo '';
														}
													 ?>
												</li>
											</ul>
											<?php 
												if($plan['best_seller'] == 'yes' ){
													echo '<button href="" class="btn btn-primary mt-5 mb-3 text-montserrat fw-bold">Pilih Sekarang</button>';
												}else{
													if($plan['pricing_name'] == 'Bisnis'){
														echo '<a href="" class="btn btn-outline-dark mt-5 mb-3 text-montserrat fw-bold" style="border-radius: 20px; border: 2px solid;">Diskon 40%</a>';
													}else{
														echo '<a href="" class="btn btn-outline-dark mt-5 mb-3 text-montserrat fw-bold" style="border-radius: 20px; border: 2px solid;">Pilih Sekarang</a>';
													}
												}
											?>
											
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
				<!-- End of Pricing Card -->

				<!-- Text Powerful -->
				<div class="row text-center mt-5 text-montserrat">
					<div class="col d-flex justify-content-center">
						<p class="fs-3">Powerful dengan Limit PHP yang Lebih Besar</p>
					</div>
				</div>
				<!-- End of Text Powerful -->

				<!-- 2 Table -->
				<div class="row justify-content-center text-center mt-3 text-roboto">
					<div class="col-10">
						<div class="row">
							<div class="col border mx-2">
								<div class="row">
									<div class="col">
										<div class="row align-items-center">
											<div class="col-4 d-flex justify-content-start">
												<i class="bi bi-check-circle-fill" style="color: #00b348"></i>
											</div>
											<div class="col-8 d-flex justify-content-start">
												<p class="mt-3">max execution time 300s</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row" style="background-color: #f7f7f7">
									<div class="col">
										<div class="row align-items-center">
											<div class="col-4 d-flex justify-content-start">
												<i class="bi bi-check-circle-fill" style="color: #00b348"></i>
											</div>
											<div class="col-8 d-flex justify-content-start">
												<p class="mt-3">max execution time 300s</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="row align-items-center">
											<div class="col-4 d-flex justify-content-start">
												<i class="bi bi-check-circle-fill" style="color: #00b348"></i>
											</div>
											<div class="col-8 d-flex justify-content-start">
												<p class="mt-3">php memory limit 1024 MB</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col border mx-2">
								<div class="row">
									<div class="col">
										<div class="row align-items-center">
											<div class="col-4 d-flex justify-content-start">
												<i class="bi bi-check-circle-fill" style="color: #00b348"></i>
											</div>
											<div class="col-8 d-flex justify-content-start">
												<p class="mt-3">post max size 128 MB</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row" style="background-color: #f7f7f7">
									<div class="col">
										<div class="row align-items-center">
											<div class="col-4 d-flex justify-content-start">
												<i class="bi bi-check-circle-fill" style="color: #00b348"></i>
											</div>
											<div class="col-8 d-flex justify-content-start">
												<p class="mt-3">upload max filesize 128 MB</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="row align-items-center">
											<div class="col-4 d-flex justify-content-start">
												<i class="bi bi-check-circle-fill" style="color: #00b348"></i>
											</div>
											<div class="col-8 d-flex justify-content-start">
												<p class="mt-3">max input vars 2500</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of 2 Table -->

				<!-- Text Paket Hosting -->
				<div class="row text-center mt-5 text-montserrat">
					<div class="col d-flex justify-content-center">
						<p class="fs-3">Semua Paket Hosting Sudah Termasuk</p>
					</div>
				</div>
				<!-- End of Text Paket Hosting -->

				<!-- Fitur Hosting -->
				<div class="row justify-content-center text-center mt-3 text-roboto">
					<div class="col-4">
						<img src="./assets/svg/icon PHP Hosting_PHP Semua Versi.svg" alt="Hosting PHP Semua Versi" width="75" class="img-fluid" />
						<div class="d-flex flex-column">
							<h6 class="judul-fitur mt-4">PHP Semua Versi</h6>
							<p class="fitur-hosting">Pilih mulai dari versi PHP 5.3 s/d PHP 7.<br />Ubah sesuka Anda!</p>
						</div>
					</div>
					<div class="col-4">
						<img src="./assets/svg/icon PHP Hosting_My SQL.svg" alt="Hosting MySQL" width="75" class="img-fluid" />
						<div class="d-flex flex-column">
							<h6 class="judul-fitur mt-4">MySQL Versi 5.6</h6>
							<p class="fitur-hosting">Nikmati MySQL versi terbaru, tercepat dan<br />kaya akan fitur.</p>
						</div>
					</div>
					<div class="col-4">
						<img src="./assets/svg/icon PHP Hosting_CPanel.svg" alt="Hosting CPanel" width="75" class="img-fluid" />
						<div class="d-flex flex-column">
							<h6 class="judul-fitur mt-4">Panel Hosting cPanel</h6>
							<p class="fitur-hosting">Kelola website dengan panel canggih yang<br />familiar di hati Anda.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center text-center mt-5">
					<div class="col-4">
						<img src="./assets/svg/icon PHP Hosting_garansi uptime.svg" alt="Hosting Garansi Uptime" width="75" class="img-fluid" />
						<div class="d-flex flex-column">
							<h6 class="judul-fitur mt-4">Garansi Uptime 99.9%</h6>
							<p class="fitur-hosting">Data center yang mendukung kelangsungan<br />website Anda 24/7.</p>
						</div>
					</div>
					<div class="col-4">
						<img src="./assets/svg/icon PHP Hosting_InnoDB.svg" alt="Database InnoDB Unlimited" width="75" class="img-fluid" />
						<div class="d-flex flex-column">
							<h6 class="judul-fitur mt-4">Database InnoDB Unlimited</h6>
							<p class="fitur-hosting">Jumlah dan ukuran database yang tumbuh<br />sesuai kebutuhan Anda.</p>
						</div>
					</div>
					<div class="col-4">
						<img src="./assets/svg/icon PHP Hosting_My SQL remote.svg" alt="Wildcard Remote MySQL" width="75" class="img-fluid" />
						<div class="d-flex flex-column">
							<h6 class="judul-fitur mt-4">Wildcard Remote MySQL</h6>
							<p class="fitur-hosting">Mendukung s/d 25 max user connections<br />dan 100 max connections.</p>
						</div>
					</div>
				</div>
				<!-- End of Fitur Hosting -->

				<!-- Text Framework Laravel -->
				<div class="row text-center mt-5 text-montserrat">
					<div class="col">
						<p class="fs-2">Mendukung Penuh Framework Laravel</p>
					</div>
				</div>
				<!-- End of Text Framework Laravel -->

				<!-- Framework Laravel -->
				<div class="row mt-2">
					<div class="col">
						<div class="row">
							<div class="d-flex flex-column">
								<p class="text-montserrat p-laravel">Tak perlu menggunakan dedicated server ataupun VPS<br />yang mahal. Layanan PHP hosting murah kami<br />mendukung penuh framework favorit Anda</p>
								<p class="text-roboto p-laravel">
									<i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Install Laravel <b>1 klik</b> dengan Softaculous Installer.</span>
								</p>
								<p class="text-roboto p-laravel">
									<i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json</b> dan <b>fileinfo.</b></span>
								</p>
								<p class="text-roboto p-laravel">
									<i class="bi bi-check-circle-fill" style="color: #00b348"></i><span class="ms-2">Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</span>
								</p>
								<p class="text-roboto" style="font-size: 12px">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
							</div>
						</div>
						<button class="btn btn-pilihHosting text-start text-montserrat">Pilih Hosting Anda</button>
					</div>
					<div class="col d-flex justify-content-end mt-3">
						<img src="./assets/svg/illustration banner support laravel hosting.svg" alt="Support Laravel Hosting" width="450" />
					</div>
				</div>
				<!-- End of Framework Laravel -->
			</div>
		</section>
		<!-- End of Content Section -->

		<div class="container">
			<!-- Text Modul -->
			<div class="row text-center mt-5 text-montserrat">
				<div class="col d-flex justify-content-center">
					<p class="fs-3">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</p>
				</div>
			</div>
			<!-- End of Text Modul -->

			<!-- Modul Lengkap -->
			<div class="row justify-content-center text-roboto">
				<div class="col-9">
					<div class="row text-start p-modul">
						<div class="col mt-5 d-flex justify-content-center">
							<div class="d-flex flex-column" style="line-height: 0.7rem">
								<p>IcePHP</p>
								<p>apc</p>
								<p>apcu</p>
								<p>apm</p>
								<p>ares</p>
								<p>bcmath</p>
								<p>bcompiler</p>
								<p>big_int</p>
								<p>bitset</p>
								<p>bloomy</p>
								<p>bz2_filter</p>
								<p>clamav</p>
								<p>coin_acceptor</p>
								<p>crack</p>
								<p>dba</p>
							</div>
						</div>
						<div class="col mt-5 d-flex justify-content-center">
							<div class="d-flex flex-column" style="line-height: 0.7rem">
								<p>http</p>
								<p>huffman</p>
								<p>idn</p>
								<p>igbinary</p>
								<p>imagick</p>
								<p>imap</p>
								<p>inclued</p>
								<p>inotify</p>
								<p>interbase</p>
								<p>intl</p>
								<p>ioncube_loader</p>
								<p>ioncube_loader_4</p>
								<p>jsmin</p>
								<p>json</p>
								<p>ldap</p>
							</div>
						</div>
						<div class="col mt-5 d-flex justify-content-center">
							<div class="d-flex flex-column" style="line-height: 0.7rem">
								<p>nd_pdo_mysql</p>
								<p>oauth</p>
								<p>oci8</p>
								<p>odbc</p>
								<p>opcache</p>
								<p>pdf</p>
								<p>pdo</p>
								<p>pdo_dblib</p>
								<p>pdo_firebird</p>
								<p>pdo_mysql</p>
								<p>pdo_odbc</p>
								<p>pdo_pgsql</p>
								<p>pdo_sqlite</p>
								<p>pgsql</p>
								<p>phalcon</p>
							</div>
						</div>
						<div class="col mt-5 d-flex justify-content-center">
							<div class="d-flex flex-column" style="line-height: 0.7rem">
								<p>stats</p>
								<p>stem</p>
								<p>stomp</p>
								<p>suhosin</p>
								<p>sybase_ct</p>
								<p>sysvmsg</p>
								<p>sysvsem</p>
								<p>sysvshm</p>
								<p>tidy</p>
								<p>timezonedb</p>
								<p>trader</p>
								<p>translit</p>
								<p>uploadprogress</p>
								<p>uri_template</p>
								<p>uuid</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col d-flex justify-content-center">
					<button class="btn btn-selengkapnya text-montserrat">Selengkapnya</button>
				</div>
			</div>
			<!-- End of Modul Lengkap -->

			<!-- Support Image -->
			<div class="row mt-5">
				<div class="col mt-5">
					<div class="d-flex flex-column">
						<p class="fs-3 text-montserrat">Linux Hosting yang Stabil<br />dengan Teknologi LVE</p>
						<p class="text-roboto p-supportImage">
							SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan<br />teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi<br />dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache
							load balancer<br />berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection<br />dan auto backup untuk keamanan website PHP Anda.
						</p>
					</div>
					<button class="btn btn-pilihHosting mb-5 text-montserrat">Pilih Hosting Anda</button>
				</div>
				<div class="col d-flex justify-content-end mt-5">
					<img src="./assets/images/Image support.png" alt="Image Support" width="600" />
				</div>
			</div>
			<!-- End of Support Image -->
		</div>

		<!-- Section Likes -->
		<section style="background-color: #f7f7f7">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col d-flex justify-content-start mt-3 text-montserrat">
						<p class="p-likes">Bagikan jika Anda menyukai halaman ini.</p>
					</div>
					<div class="col d-flex justify-content-end text-roboto">
						<button class="btn"><i class="bi bi-facebook fs-5 mt-1" style="color: #23599b"></i><span class="border ms-1 mt-1" style="padding: 5px 10px">80k</span></button>
						<button class="btn"><i class="bi bi-twitter fs-5 mt-1" style="color: #00aef1"></i><span class="border ms-1 mt-1" style="padding: 5px 10px">450</span></button>
						<button class="btn"><i class="fab fa-google-plus-square fs-5 mt-2" style="color: #fc4a35"></i><span class="border ms-1 mt-1" style="padding: 5px 10px">1900</span></button>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Section Likes -->

		<!-- Section Help -->
		<section style="background-color: #00a2f3; color: white">
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-start align-items-center mt-5 mb-4 text-montserrat">
						<p class="p-help">Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b></p>
					</div>
					<div class="col d-flex justify-content-end align-items-center my-5">
						<button class="btn btn-liveChat text-roboto"><i class="bi bi-chat-left-fill"></i><span class="ms-3">Live Chat</span></button>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Section Help -->

		<!-- Section Footer -->
		<section id="footer" style="background-color: #303030; color: #d8d8d8">
			<div class="container text-roboto">
				<div class="row">
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">HUBUNGI KAMI</p>
							<p>0274-5305505</p>
							<p>Senin - Minggu</p>
							<p>24 Jam Nonstop</p>
							<p></p>
							<p>Jl.Selokan Mataram Monjali</p>
							<p>Karanjati MT I/304</p>
							<p>Sinduadi, Mlati, Sleman</p>
							<p>Yogyakarta 55284</p>
						</div>
					</div>
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">LAYANAN</p>
							<p>Domain</p>
							<p>Shared Hosting</p>
							<p>Cloud VPS Hosting</p>
							<p>Managed VPS Hosting</p>
							<p>Web Builder</p>
							<p>Keamanan SSL / HTTPS</p>
							<p>Jasa Pembuatan Website</p>
							<p>Program Affiliasi</p>
						</div>
					</div>
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">SERVICE HOSTING</p>
							<p>Hosting Murah</p>
							<p>Hosting Indonesia</p>
							<p>Hosting Singapura SG</p>
							<p>Hosting PHP</p>
							<p>Hosting Laravel</p>
						</div>
					</div>
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">TUTORIAL</p>
							<p>Knowledgebase</p>
							<p>Blog</p>
							<p>Cara Pembayaran</p>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">TENTANG KAMI</p>
							<p>Tim Niagahoster</p>
							<p>Karir</p>
							<p>Events</p>
							<p>Penawaran & Promo Spesial</p>
							<p>Kontak Kami</p>
						</div>
					</div>
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">KENAPA PILIH NIAGA HOSTER?</p>
							<p>Support Terbaik</p>
							<p>Garansi Harga Termurah</p>
							<p>Domain Gratis Selamanya</p>
							<p>Datacenter Hosting Terbaik</p>
							<p>Review Pelanggan</p>
						</div>
					</div>
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="fw-bold mb-5" style="color: #8e8e8e">NEWSLETTER</p>
							<form action="" class="input_email right">
								<input type="text" name="email" id="email" placeholder="Email" class="form-control" />
								<button class="btn btn-primary me-1">Berlangganan</button>
							</form>
							<p class="mt-2" style="color: #6e6e6e">Dapatkan promo dan konten menarik</p>
							<p style="color: #6e6e6e">dari penyedia hosting terbaik Anda.</p>
						</div>
					</div>
					<div class="col mt-5">
						<div class="d-flex flex-column footer-lineHeight">
							<p class="mb-5"></p>
							<div class="row">
								<div class="col">
									<button class="btn"><i class="fab fa-facebook-f fs-5 fb-footer"></i></button>
								</div>
								<div class="col">
									<button class="btn"><i class="fab fa-twitter fs-5 twitter-footer"></i></button>
								</div>
								<div class="col">
									<button class="btn"><i class="fab fa-google-plus-g fs-5 gplus-footer"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col">
						<div class="d-flex flex-column footer-lineHeight" >
							<p class="fw-bold mb-4" style="color: #8e8e8e">PEMBAYARAN</p>
							<img src="./assets/images/payment.png" alt="Payment" width="825" class="img-fluid" />
							<p class="mt-4 mb-5" style="color: #6e6e6e">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
						</div>
					</div>
				</div>
				<hr style="color: #292929; border: 2px solid; border-color: #292929" />
				<div class="row mt-4">
					<div class="col">
						<div class="d-flex flex-column footer-lineHeight" >
							<p class="footer-bottom">Copyright ©2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta</p>
							<p class="footer-bottom">CloudVPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
						</div>
					</div>
					<div class="col-3 d-flex justify-content-end">
						<p class="footer-bottom">Syarat dan Ketentuan | Kebijakan Privasi</p>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Footer -->

		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
