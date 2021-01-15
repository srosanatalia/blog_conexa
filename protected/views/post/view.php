<?php
/* @var $this PostController */
/* @var $model Post */
?>
<body>

<!-- Navigation -->

<!-- Page Content -->
<div class="container">
<div class="row">
	<!-- Post Content Column -->
	<div class="col-lg-8">

	<!-- Title -->
	<h1 class="mt-4"><?php echo $model->titulo; ?></h1>

	<!-- Author -->
	<p class="lead">
		por
		<?php echo $model->autor; ?>
	</p>

	<hr>

	<!-- Date/Time -->
	<p>Postado em  <?php echo $model->data; ?>, categoria: <?php echo $categoria; ?></p>

	<hr>

	<!-- Post Content -->

	<p><?php echo $model->conteudo; ?></p>

	<hr>

	<!-- Comments Form -->
	<div id = "comentario"class="card my-4">
		<h5 class="card-header">Deixar um comentário:</h5>
		<div class="card-body">

		<?php $this->renderPartial('/comentario/_form',array(
			'model'=>$comentario,
		)); ?>

		<!--<form>
			<div class="form-group">
			<textarea class="form-control" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>-->
		</div>
	</div>

	<!-- Single Comment -->

	<h3>Comentários</h3>
	<?php
	if($model->comentarios){
		foreach ($model->comentarios as $comentario) {
			?><div class="media mb-4">
			<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
			<div class="media-body">
			
			<h5 class="mt-0">Por <?php
			echo $comentario->autor;
			?> em <?php 
			echo $comentario->data;?></h5><?php
			echo $comentario->conteudo;?></div>
			</div><?php
		}
	} else{
		?>
		<div class="media mb-4">
			<div class="media-body">
			<h5>Seja o primeiro a comentar este post.</h5>
			</div>
			</div>
		<?php
	}
	?>

	</div>

	<!-- Sidebar Widgets Column -->
	<div class="col-md-4">

	<!-- Side Widget -->
	<div class="card my-4">
		<h5 class="card-header">Blog</h5>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6">
				<ul class="list-unstyled mb-0">
					<li>
					<a href="<?= Yii::app()->createUrl("post/create")?>">Criar novo Post</a>
					</li>
					<li>
					<a href="<?= Yii::app()->createUrl("post/index")?>">Ver todas os posts</a>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Search Widget -->
	<!--<div class="card my-4">
		<h5 class="card-header">Search</h5>
		<div class="card-body">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-append">
			<button class="btn btn-secondary" type="button">Go!</button>
			</span>
		</div>
		</div>
	</div>-->

	<!-- Categories Widget -->
	<!--<div class="card my-4">
		<h5 class="card-header">Categories</h5>
		<div class="card-body">
		<div class="row">
			<div class="col-lg-6">
			<ul class="list-unstyled mb-0">
				<li>
				<a href="#">Web Design</a>
				</li>
				<li>
				<a href="#">HTML</a>
				</li>
				<li>
				<a href="#">Freebies</a>
				</li>
			</ul>
			</div>
			<div class="col-lg-6">
			<ul class="list-unstyled mb-0">
				<li>
				<a href="#">JavaScript</a>
				</li>
				<li>
				<a href="#">CSS</a>
				</li>
				<li>
				<a href="#">Tutorials</a>
				</li>
			</ul>
			</div>
		</div>
		</div>
	</div>-->

	</div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

