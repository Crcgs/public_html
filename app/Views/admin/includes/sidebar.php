<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= adminUrl(); ?>" class="brand-link">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="<?= adminUrl('posts'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Posts</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= adminUrl('add-post'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>Add Post</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
