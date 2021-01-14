<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/blog-post.css" rel="stylesheet">

	</head>

<body>

<div class="container" id="page">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
	<a class="navbar-brand" href="#">Blog</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
		<a class="nav-link" href="<?= Yii::app()->createUrl("post/index")?>">Postagens
			<span class="sr-only">(current)</span>
		</a>
		</li>
		<!--<li class="nav-item">
		<a class="nav-link" href="#">About</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Services</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Contact</a>
		</li>-->
	</ul>
	</div>
</div>
</nav> 

	<?php echo $content; ?>

	<div class="clear"></div>

	<!-- Footer -->
	<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
	</div>
	<!-- /.container -->
	</footer>

</div><!-- page -->

</body>
</html>
