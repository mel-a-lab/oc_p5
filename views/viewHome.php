<div class="slider" style="height: 30%">
    <div class="display-table  center-text">
		<?php if (isset($_SESSION['id'])) { ?>
        	<h1 class="title display-table-cell"><b><?= $_SESSION['firstName'] .' '. $_SESSION['lastName'] ?>, le développeur qu’il vous faut !</b></h1>
		<?php } else { ?>
			<h1 class="title display-table-cell"><b>Bienvenue sur mon blog !</b></h1>
		<?php } ?>
    </div>
</div>
<section class="blog-area section">
	<div class="container">
		<div class="row">
			<?php foreach ($posts as $post): ?>
			<div class="col-lg-4 col-md-6">
				<div class="card h-100">
					<div class="single-post post-style-1" style="padding-bottom:0%">
						<div class="blog-image" style="position: relative;">
							<img src="public/images/default-post.jpg" alt="Blog Image">
							<h1 class="title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><b><?= substr($post['title'], 0, 10) ?></b></h1>
						</div>
						<div class="blog-info">
                            <h4 class="title" style="padding: 20px 10px 0px"><a href="post&id=<?= $post['id'] ?>"><b><?= substr($post['chapo'], 0, 30). "..." ?></b></a></h4>
						</div>
						<div class="blog-info" style="padding: 20px 10px 0px">
							<h6 class="title" style="padding: 0px 10px 10px"><?= substr($post['content'], 0, 200). "..." ?></h6>
						</div>
						<div class="blog-info" style="padding: 10px 10px 0px">
							<?php if (isset($post['dateUpdated'])): ?>
								<h6 class="title" style="padding: 0px 10px 10px;text-align: left;">Dernière modification le : <?= $post['dateUpdated'] ?></h6>
							<?php else: ?>
								<h6 class="title" style="padding: 0px 10px 10px;text-align: left;">Publié le : <?= $post['dateCreated'] ?></h6>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		<!--
		<a class="load-more-btn" href="#"><b>AFFICHER PLUS</b></a>
		-->
	</div>
</section>
