<!DOCTYPE HTML>
<html lang='en'>

<body>
     <div class="content">
     <?php get_header(); ?>
        <h1 id="title" class="text-center text-[20vh] text-white underline underline-offset-[20px]">
            <?php echo get_the_title(); ?>
        </h1>
        <h1>page</h1>
     <?php echo get_the_content(); ?>

    </div>
<?php get_footer(); ?> 
</body>
</html>