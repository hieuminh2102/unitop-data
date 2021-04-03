<?php
show_array($list_post);
?>
<div id="content">
    <h1>Tin tức</h1>
    <?php
    if (!empty($list_post)) {
    ?>
        <ul class="list_post">

            <?php
            foreach ($list_post as $post) {
            ?>
                <li>
                    <a href="" class="post-title"><?php echo $post['post_title']; ?></a>
                    <p class="post-desc"> <?php echo  $post['post_desc']; ?> </p>
                </li>
            <?php
            }
            ?>
        </ul>

    <?php
    }
    ?>
</div>