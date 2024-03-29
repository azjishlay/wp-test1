<header class="banner">
    <nav class="navbar nav-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand navbar-brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><div class="circle"></div></a>
            </div><!-- /.navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu([
                      'theme_location' => 'primary_navigation',
                      'menu_class' => 'nav navbar-nav navbar-right']);
                endif;
                ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
