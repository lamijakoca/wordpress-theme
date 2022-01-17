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
    .um {
    opacity: 1 !important;
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
            
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="topnav" style="list-style-type: none;">%3$s</ul>'
                    )
                );
            ?>

        </div>

        <div>
            <!-- <h3> <?php the_title(); ?> </h3>  -->
            <div class="wp-content">
                <?php
                    require "database.php";

                    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

                    $splitted = explode("/", $url);
                    
                    if($splitted[4] === 'games') {
                        // Posaljes request u bazu da inkrementira
                        // broj igranja animal kingdom za 1
                        if($splitted[5] !== "") {
                            $gameName = "";

                            if($splitted[5] === 'animalkingdom-2') {
                                $gameName = "Animal Kingdom";
                            } else if($splitted[5] === 'match-colors') {
                                $gameName = "Match Colors";
                            } else if($splitted[5] === 'math-under-pressure') {
                                $gameName = "Math Under Pressure";
                            }

                            $query = "UPDATE games SET plays = plays + 1 WHERE name = '$gameName'";

                            $incrementGameQuery = mysqli_query($CONNECTION, $query);

                            if($incrementGameQuery) {
                                // Proslo
                            } else {
                                // Nije proslo
                            }
                        }
                    }
                ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </header>