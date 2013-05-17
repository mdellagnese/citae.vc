<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt-br" />
	<meta name="keywords" content="citae tcc referencia" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="menu-wrapper">
			<div id="logo"><?php echo CHtml::image($this->assetsUrl . '/images/header/logo-citae.png') ?></div>
			<div id="mainmenu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Sobre', 'url'=>array('/sobre')),
						array('label'=>'Se›es', 'url'=>array('/secoes')),
						array('label'=>'Livros', 'url'=>array('/livros')),
						array('label'=>'Revisores', 'url'=>array('/revisores')),
						array('label'=>'Gr‡ficas', 'url'=>array('/graficas'))
					),
				)); ?>
			</div>
		</div>
		<div id="search-wrapper">
			<div class="search-content">
				<?php echo CHtml::textField('search-content');?>
			</div>
			<div class="scaled-background"></div>
		</div>
	</div><!-- header -->
	
	<div id="content">
		<?php echo $content; ?>
	</div>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
