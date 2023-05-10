<?php
global $post;
$product_price = get_post_meta($post->ID, 'product_price', true);
$product_price_sales = get_post_meta($post->ID, 'product_price_sales', true);
$product_stock = get_post_meta($post->ID, 'product_stock', true);
?>


<table class="form-table">
    <tbody>
        <tr>
            <th scope="row"><label for="product-price"><?php echo __('Giá sản phẩm:', 'ducanh-shop') ?></label></th>
            <td><input name="product-price" type="text" value="<?php echo $product_price; ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th scope="row"><label for="product-price"><?php echo __('Giá khuyến mãi:', 'ducanh-shop') ?></label></th>
            <td><input name="product-price-sales" type="text" value="<?php echo $product_price_sales; ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th scope="row"><label for="product-price"><?php echo __('Số lượng:', 'ducanh-shop') ?></label></th>
            <td><input name="product-stock" type="text" value="<?php echo $product_stock; ?>" class="regular-text"></td>
        </tr>
    </tbody>
</table>