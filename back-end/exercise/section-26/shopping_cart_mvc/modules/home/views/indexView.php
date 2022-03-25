<?php
get_header();
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_mobile['url']; ?>"><?php echo $info_cat_mobile['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_mobile)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_mobile as $item) {
                            ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price'], 'đ') ?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    <?php
                    } ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_macbook['url']; ?>"><?php echo $info_cat_macbook['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_macbook)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_macbook as $item) {
                            ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price'], 'đ') ?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>