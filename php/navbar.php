<div class="col-md-12 p-3 text-center mt-5">
<a href="<?php echo Theme::siteUrl(); ?>"><img alt="<?php echo $site->title(); ?>" class="img-fluid" width="40" height="40" src="<?php echo $site->logo(); ?>"/> <br/>
			<h1><strong><?php echo $site->title(); ?></strong></h1>
			<h2><?php echo $site->description(); ?></h2>
		</a>
</div>
<nav class="navbar border-top border-bottom">
<a class="nav-link" href="<?php echo Theme::siteUrl(); ?>">Home</a>
<?php foreach ($staticContent as $staticPage): ?>
  <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
  <?php endforeach ?>
</nav>
