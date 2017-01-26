<!-- templates/footer.php  -->
<section class="footer">
    <div class="footer__top">
    </div>
    <div class="footer__bottom">


        <?php
       
        wp_nav_menu(array(
            'theme_location' => 'footer_navigation',
            'container' => false
        ));

        ?>

    </div>
</section>

