<?php require_once __DIR__ . '/../../functions.php'; ?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/admin/", true) ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>">
                    <i class="fa fa-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/recette/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/recette/">
                    <i class="fa fa-globe"></i>
                    Pays
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/categorie/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/categorie/">
                    <i class="fa fa-plane"></i>
                    Séjours
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-book"></i>
                    Catégories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-comments"></i>
                    Commentaires
                </a>
            </li>
        </ul>
    </div>
</nav>