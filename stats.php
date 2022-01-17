<?php
/*
Template Name: Stats
*/
    get_header();
?>
<style>
    .table{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
        align-self: center;
    }
    .main{
        width: 500px;
        height: 500px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        text-align: center;
        justify-content: center;
    }
</style>
<main class="main">
<?php
        global $wpdb;
        $result = $wpdb->get_results("select * from games");
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="table-success"> Game </th>
                <th> Played </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($result as $game){ ?>
                <tr>
                    <td><?php echo $game->name; ?> </td>
                    <td class="table-success"><?php echo $game->plays; ?> </td>
            <?php }?>
        </tbody>
    </table>
</main>

<?php get_footer(); ?>