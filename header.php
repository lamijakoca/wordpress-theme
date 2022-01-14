<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .topnav {
    overflow: hidden;
    text-decoration: none;
    display: flex;
    justify-content: center;
    }
  
    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    color: black;
    text-decoration: none;
    font-size: 17px;
    }
    .topnav a:hover {
    background-color: #ddd;
    color: green;
    text-decoration: none;
    }
  
    .topnav a.active {
    color: green;
    text-decoration: none;
    }
    </style>

    <title>STEM GAMES</title>

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header id="masthead" class="site-header">
        <div class="topnav">
            <a class="active" href="http://localhost/wordpress/">Home</a>
            <a href="#site-footer">Contact</a>
            <a href="http://localhost/wordpress/games/">Games</a>
        </div>

        <div>
            <!-- <h3> <?php the_title(); ?> </h3>  -->
            <div class="wp-content">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </header>