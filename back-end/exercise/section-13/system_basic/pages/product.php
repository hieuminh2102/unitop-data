<div id="content">
    <h2>Sản phẩm</h2>
    <?php
    if (!empty($list_product)) {
    ?>
        <ul class="list_product">
            <?php

            foreach ($list_product as $product) {
            ?>
                <li>
                    <a href="" class="product_name"><?php echo $product['product_name']; ?></a>
                    <p class="price"><?php echo $product['price']; ?></p>
                </li>
            <?php
            } ?>
        </ul>
    <?php
    }
    ?>
</div>