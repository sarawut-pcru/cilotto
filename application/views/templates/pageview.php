<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{page_title}</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link href="{base_url}assets/css/bootstrap5.min.css" rel="stylesheet">
	<link href="{base_url}assets/css/sweetalert2.min.css" rel="stylesheet">
	<link href="{base_url}assets/css/select2.min.css" rel="stylesheet">
	<link href="{base_url}assets/css/fontawesome.css" rel="stylesheet">
	<link href="{base_url}assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="{base_url}assets/css/responsive.bootstrap4.min.css" rel="stylesheet">
	<link href="{base_url}assets/css/buttons.bootstrap4.min.css" rel="stylesheet">
	<link href="{base_url}assets/css/master.css" rel="stylesheet">
	{another_css}
</head>

<body class="bg-body">
	<div class="bg-loader">
		<span class="loader"></span>
	</div>
	<div class="body-content animate-bottom">
		<header>
			<div class="px-3 py-2 bg-dark text-white">
				<div class="container">
					<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
						<a href="{base_url}" class="d-flex  align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" style="margin-right: auto;">
							<div style="font-size: 30px;"><i class="fab fa-pied-piper-square"></i></div>
						</a>

						<ul class="nav col-auto col-lg-auto my-2 justify-content-center my-md-0 text-small">
							<?php foreach ($tab_header as $key => $val) : ?>
								<li>
									<a href="<?= $val['href'] ?>" class="nav-link text-white">
										<div class="nav-item">
											<div class="icon"><?= $val['icon'] ?></div>
											<div class="text"><?= $val['text'] ?></div>
										</div>
									</a>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
				</div>
			</div>
		</header>

		<div class="container-fluid my-4 ">
			{page_content}
		</div>
		<footer>

		</footer>
	</div>

	<script src="{base_url}assets/js/jquery.min.js"></script>
	<script src="{base_url}assets/js/bootstrap5.bundle.min.js"></script>
	<script src="{base_url}assets/js/fontawesom.min.js"></script>
	<script src="{base_url}assets/js/sweetalert2.all.min.js"></script>
	<script src="{base_url}assets/js/select2.min.js"></script>
	<script src="{base_url}assets/js/jquery.dataTables.min.js"></script>
	<script src="{base_url}assets/js/dataTables.bootstrap4.min.js"></script>
	<script src="{base_url}assets/js/dataTables.responsive.min.js"></script>
	<script src="{base_url}assets/js/responsive.bootstrap4.min.js"></script>
	<script src="{base_url}assets/js/dataTables.buttons.min.js"></script>
	<script src="{base_url}assets/js/buttons.bootstrap4.min.js"></script>
	<script src="{base_url}assets/js/jszip.min.js"></script>
	<script src="{base_url}assets/js/pdfmake.min.js"></script>
	<script src="{base_url}assets/js/vfs_fonts.js"></script>
	<script src="{base_url}assets/js/buttons.html5.min.js"></script>
	<script src="{base_url}assets/js/buttons.print.min.js"></script>
	<script src="{base_url}assets/js/buttons.colVis.min.js"></script>
	<script src="{base_url}assets/js/ci_utilities.js?ft=" <?= time() ?>></script>
	{another_js}
	<script>
		const baseURL = '<?= $base_url ?>';
		const siteURL = '<?= $site_url ?>';
		$(document).ready(function(e) {
			$('.select2').select2()
			setTimeout(() => {
				$('.body-content').css('display', 'unset')
				$('.bg-loader ').remove()
				$('.loader').remove()
			}, 1000);
		})
	</script>


</body>


</html>