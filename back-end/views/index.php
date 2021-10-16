<div id="container">
	hello world

	<?php foreach ($posts as $post) : ?>
		<h2><?php echo $post['title']; ?></h2>
	<?php endforeach; ?>
</div>