<?php

$paged = isset($_REQUEST['paged']) && ($_REQUEST['paged'] > 1) && ($_REQUEST['paged'] <= $total_pages) ? $_REQUEST['paged'] : 1;
?>

<div class="tablenav-pages">
    <span class="displaying-num"><?php echo $total_items; ?><?php echo __(' mục', 'ducanh-shop'); ?></span>
    <span class="pagination-links">
        <?php if ($paged > 1) : ?>
            <a class="first-page button" href="http://localhost/phukienoto/wp-admin/edit.php">
                <span class="screen-reader-text"><?php echo __('Trang Tĩnh Đầu Tiên', 'ducanh-shop'); ?></span><span aria-hidden="true">«</span>
            </a>
            <a class="prev-page button" href="admin.php?page=ducanh-orders&paged=<?= $paged - 1; ?>">
                <span class="screen-reader-text"><?php echo __('Trang trước', 'ducanh-shop'); ?></span><span aria-hidden="true">‹</span>
            </a>
        <?php else : ?>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
        <?php endif; ?>
        <span for="current-page-selector" class="screen-reader-text"><?php echo __('Trang hiện tại', 'ducanh-shop'); ?></span>
        <span id="table-paging" class="paging-input">
            <span class="tablenav-paging-text"><?php echo $paged; ?><?php echo __(' trên ', 'ducanh-shop'); ?>
                <span class="total-pages"><?php echo $total_pages; ?></span>
            </span>
        </span>
        <?php if ($paged < $total_pages) : ?>
            <a class="next-page button" href="admin.php?page=ducanh-orders&paged=<?= $paged + 1; ?>">
                <span class="screen-reader-text"><?php echo __('Trang sau', 'ducanh-shop'); ?></span><span aria-hidden="true">›</span>
            </a>
            <a class="last-page button" href="#">
                <span class="screen-reader-text"><?php echo __('Trang cuối', 'ducanh-shop'); ?></span><span aria-hidden="true">»</span>
            </a>
        <?php else : ?>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span>
        <?php endif; ?>
    </span>
</div>