<section class="comment-section">
    <div class="container">
        <?php if (isset($result)) { ?>
        <div class="row">
            <div class="col-lg-3 col-md-0"></div>
            <div class="col-lg-6 col-md-12">
                <div class="comment-form center-text">
                    <div class="alert-info" role="alert"><?php echo $result ?> </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-2 col-md-0"></div>
            <div class="col-lg-8 col-md-12">
                <div class="comment-form">
                    <form method="post" action="admin&addPost=action" class="contact1-form validate-form">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" name="id_user" value=<?= $_SESSION['id'] ?>>
                                <input type="text" aria-required="true" minlength="3" name="title" class="form-control"
                                    placeholder="Titre de l'article" aria-invalid="true" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" aria-required="true" name="chapo" class="form-control"
                                    placeholder="Châpo de l'article" aria-invalid="true" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="cars">Choisissez une catégorie:</label>
                                <select name="category" aria-required="true" class="form-control" aria-invalid="true"
                                    required>
                                    <?php foreach($categories as $categorie): ?>
                                    <option value=<?= $categorie['id'] ?>><?= $categorie['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="col-sm-12">
                                <textarea aria-required="true" name="content" class="form-control"
                                    placeholder="Description de l'article" aria-invalid="true" required></textarea>
                            </div>
                            <div class="col-sm-12 center-text">
                                <button class="submit-btn" type="submit" id="form-submit"><b>AJOUTER</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>