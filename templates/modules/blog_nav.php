<?php $blog_categories = get_terms('blog_categories'); ?>

<div class="blog__nav">
    <div class="blog__nav__title">
        <a href="<?php echo home_url( get_post_type() ); ?>"><?php echo get_post_type() ?></a>
    </div>
    <?php if (is_array($blog_categories) && count($blog_categories) && (is_post_type_archive('blog' ) || get_post_type()=='blog') ) { ?>
    <div class="blog__nav__search-hamburger">
        <a href="#" class="blog__nav__search"><span></span></a>
        <a href="#" class="blog__nav__hamburger"><span></span></a>
    </div>
    <?php } ?>
     <?php if (is_array($blog_categories) && count($blog_categories)) { ?>
    <div class="blog__nav__list">
        <ul>
           <?php foreach ($blog_categories as $category_key => $category_value) { ?>
                    <li>
                        <a href="/blog_category/<?php echo $category_value->slug ?>">
                            <?php echo $category_value->name ?>
                        </a>
                    </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
</div>
