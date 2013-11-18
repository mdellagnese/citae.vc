<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt-br" />
	<meta name="keywords" content="citae tcc referencia" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
		<div id="menu-wrapper">
			<div id="logo"><?php echo CHtml::link(CHtml::image($this->assetsUrl . '/images/header/logo-citae.png'), Yii::app()->baseUrl) ?></div>
			<div id="mainmenu">
				<?php 
				$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Sobre', 	'url'=>array('/sobre')),
						array('label'=>'Secoes', 	'url'=>array('/secoes',)),
						array('label'=>'Livros', 	'url'=>array('/livros')),
						array('label'=>'Revisores', 'url'=>array('/revisores')),
						array('label'=>'Graficas',	'url'=>array('/graficas'))
					),
				)); ?>
			</div>
		</div>
		<div id="search-wrapper">
			<div class="search-content">
				<?php echo CHtml::image($this->assetsUrl . '/images/header/busca.png', '', array('class'=>'search-icon'));?>
				<?php echo CHtml::textField('search-content');?>
			</div>
			<div class="scaled-background"></div>
		</div>
	</header><!-- header -->
	
	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
		<div id="main-layer">
			<div class="section">
				<h3>citae.vc</h3>
				<ul class="container">
					<!-- Seções do Menu  -->
					<li>Sobre</li>
					<li>Sobre</li>
					<li>Sobre</li>
					<li>Sobre</li>
				</ul>
			</div>
			<div class="section">
				<h3>Information</h3>
				<ul class="container">
					<!-- Seções do Menu  -->
					<li>Sobre</li>
					<li>Sobre</li>
					<li>Sobre</li>
					<li>Sobre</li>
				</ul>
			</div>
			<div class="section">
				<h3>Legal</h3>
				<ul class="container">
					<!-- Seções do Menu  -->
					<li>Sobre</li>
					<li>Sobre</li>
					<li>Sobre</li>
					<li>Sobre</li>
				</ul>
			</div>
			<div class="scaled-background"></div>
		</div>
		<div id="second-layer">
			<div class="rights">
				<div>
				</div>
				<div>
					Todas citações inseridas aqui pertencem aos seus autores
				</div>
				<div class="scaled-background"></div>
			</div>
			<div class="legal">
				<span>
					<!-- Internacionalizar -->
					O Citae.vc facilita sua vida acadêmica ajudando você em suas pesquisas..
				</span>
				<div class="scaled-background"></div>
			</div>
		</div>
	</footer><!-- footer -->

</div><!-- page -->

</body>
</html>
