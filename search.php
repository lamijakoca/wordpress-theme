<?php get_header();?>
<style>
    .search{
        height: 400px;
    }
</style>
    <div class="search">
    <?php
        if(have_posts()){
            while( have_posts()){
                the_post();
            }
        }
    ?>
    </div>
<?php get_footer();?>