<?php include 'extensions/adminMenu.php' ?>
<section class="blog-area section" style="padding: 0px 0 40px;">
    <div class="container">
        <div class="row">
            <?php foreach ($comments as $comment): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">
                        <div class="blog-info">
                            <h4 class="title" style="padding: 10px 10px 0px;"><a
                                    href="post&id=<?= $comment['id_post'] ?>"><b><?= substr($comment['chapo'], 0, 30). "..." ?></b></a>
                            </h4>
                            <hr>
                        </div>
                        <div class="blog-info">
                            <h6 class="title" style="padding: 0px 10px 10px;"><?= $comment['content'] ?></h6>
                            <ul class="post-footer">
                                <li><a href="admin&validateComment&id=<?= $comment['id'] ?>"><i
                                            class="ion-android-done"></i></a></li>
                                <li><a href="admin&deleteComment&id=<?= $comment['id'] ?>"><i
                                            class="ion-android-delete"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>