<section class="comment-section">
    <div class="container">
        <?php if (isset($result)) { ?>
        <div class="row">
            <div class="col-lg-3 col-md-0"></div>
            <div class="col-lg-6 col-md-12">
                <div class="comment-form center-text">
                    <div class="alert-info" role="alert"><?php echo htmlspecialchars($result) ?> </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-2 col-md-0"></div>
            <div class="col-lg-8 col-md-12">
                <div class="comment-form">
                    <form method="post" action="admin&editPost=action" class="contact1-form validate-form">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" name="id_user" value=<?= $_SESSION['id'] ?>>
                                <input type="hidden" name="idPost" value=<?= $post['id'] ?>>
                                <input type="text" aria-required="true" minlength="3" name="title" class="form-control"
                                    value="<?= $post['title']?>" aria-invalid=" true" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" aria-required="true" name="chapo" class="form-control"
                                    value="<?= $post['chapo']?>" aria-invalid="true" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="cars">Choisissez une catégorie:</label>
                                <select name="category" aria-required="true" class="form-control" aria-invalid="true"
                                    required>
                                    <?php foreach($categories as $categorie): ?>
                                    <option value=<?= $categorie['id'] ?>
                                        <?php if ($categorie['id'] == $post['id_category']) echo htmlspecialchars("selected") ?>>
                                        <?= $categorie['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <textarea aria-required="true" name="content" class="form-control" aria-invalid="true"
                                required><?= $post['content']?></textarea>
                        </div>
                        <div class="col-sm-12 center-text">
                            <button class="submit-btn" type="submit" id="form-submit"><b>MODIFIER</b></button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>