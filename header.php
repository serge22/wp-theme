<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= site_url() ?>"><img alt="Brand" src=""></a>
				</div>

				<div class="collapse navbar-collapse" id="top-menu">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?= site_url('example') ?>">Link</a></li>
						<li><a href="<?= site_url('test') ?>">Link</a></li>
					</ul>
				</div>
			</div>
		</nav>

