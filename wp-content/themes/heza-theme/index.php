<?php
get_header();
?>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    the_content();
                endwhile;
            else:
                echo '<h2>Nothing Found</h2>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>