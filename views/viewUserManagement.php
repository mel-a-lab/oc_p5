<?php include 'extensions/adminMenu.php' ?>
<section class="blog-area section" style="padding: 0px 0 40px;">
    <div class="container">
        <div class="row">
            <?php foreach ($users as $user): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">
                        <div class="blog-image" style="padding: 22px"></div>
                        <a class="avatar" href="#"><img
                                src=<?= !empty($user->getPicture()) ? "uploads/".$user['picture'] : "images/default-profile.png" ?>
                                alt="Photo de profil"></a>
                        <div class="blog-info">
                            <h4 class="title"><a href="#"><b><?= $user->getFirstName() .' '. $user->getLastName() ?>
                                        (<?= $user->getRole() == 1 ? 'Admin' : 'User' ?>)</b></a></h4>
                            <ul class="post-footer">
                                <?php if ($user->getRole() == 0) { ?>
                                <li><a href="admin&modifyUser&id=<?= $user->getId() ?>" title="Passer en Admin"><i
                                            class="ion-android-person-add"></i></a></li>
                                <?php } ?>
                                <li><a href="admin&deleteUser&id=<?= $user->getId() ?>" title="Supprimer"><i
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