<!-- start contact info -->
<section class="catalog cover">
    <div class="nav cover mt2">
        <a href="#">درباره شرکت</a>
        <span></span>
        <a class="next-link" href="#">دانلود مقالات</a>
    </div>
    <div class="top-pic"></div>
    <div class="catalog-info cover">
        <p>در این صفحه شما می توانید مقالات مورد نیاز خود را دانلود کنید.</p>
        <div class="info mlra">
            <?php
                wp_nav_menu(array(
                    'theme_location'  => 'catalog menu',
                    'container'       => false, 
                    'container_class' => '', 
                    'menu_class'      => '', 
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
                ));
            ?>
        </div>
    </div>
    <div class="bottom-pic"></div>
</section>