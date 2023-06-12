<?php
$objOrder = new ducanhOrder();
$result = $objOrder->panigate(4);

// echo '<pre>';
// print_r($_REQUEST);
// echo '</pre>';
// wp_die();

extract($result);
/*
'total_pages' 
'total_items' 
'items'       
*/

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action == 2) {                 //Bo vao thung rac
    $orderIds = $_REQUEST['post'];
    if ($orderIds) {
        foreach ($orderIds as $orderId) {
            $objOrder->trash($orderId);
        }
    }

    ducanh_redirect("admin.php?page=music-artist");
    exit();
}

?>


<div class="wrap">
    <h1 class="wp-heading-inline">
        <?php echo __('Quản lý đơn hàng', 'ducanh-shop'); ?>
    </h1>
    <hr class="wp-header-end">
    <ul class="subsubsub">
        <li class="all">
            <a href="admin.php?page=ducanh-orders" class="current"><?php echo __('Tất cả', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="admin.php?page=ducanh-orders&status=1"><?php echo __('Đơn hàng mới', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="admin.php?page=ducanh-orders&status=2"><?php echo __('Đang vận chuyển', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="admin.php?page=ducanh-orders&status=3"><?php echo __('Đã hoàn thành', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="admin.php?page=ducanh-orders&status=4"><?php echo __('Đã hủy', 'ducanh-shop'); ?> <span class="count">(28)</span></a>
        </li>
    </ul>
    <form id="order-filter" method="GET">

        <input type="hidden" name="page" value="ducanh-orders"> <!-- Page menu slug -->
        <!-- <input type="hidden" name="paged" value="1"> -->
        <input type="hidden" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging">

        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input"><?php echo __('Tìm các bài viết:', 'ducanh-shop'); ?></label>
            <input type="search" id="post-search-input" name="s" value="">
            <input type="submit" id="search-submit" class="button" value="<?php echo __('Tìm các đơn hàng', 'ducanh-shop'); ?>">
        </p>


        <div class="tablenav top">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label>
                <select name="action" id="bulk-action-selector-top">
                    <option value="0">Hành động</option>
                    <option value="1" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="2">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
                <label class="screen-reader-text" for="cat">Lọc theo danh mục</label>
                <select name="filter" id="cat" class="postform">
                    <option value="0">Tất cả</option>
                    <option class="level-0" value="1">Thanh toán khi nhận hàng</option>
                    <option class="level-0" value="2">Chuyển khoản thanh toán trước</option>
                    <option class="level-0" value="3">Trả góp</option>
                </select>
                <input type="submit" id="post-query-submit" class="button" value="Lọc">
            </div>

            <h2 class="screen-reader-text">Điều hướng danh sách các bài viết</h2>
            <!-- paginate -->
            <?php include DUCANH_SHOP_PATH . 'includes/templates/elements/elm-paginate.php'; ?>

            <br class="clear">
        </div>


        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1"><?php echo __('Chọn toàn bộ', 'ducanh-shop'); ?></label><input id="cb-select-all-1" type="checkbox"></td>
                    <th class="manage-column column-primary"><?php echo __('Mã đơn hàng', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Tổng tiền', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Khách hàng', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Điện thoại', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Trạng thái', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Thời gian', 'ducanh-shop'); ?></th>
                </tr>
            </thead>

            <tbody id="the-list">
                <?php foreach ($items as $item) : ?>
                    <tr id="order-<?= $item->id; ?>" class="iedit author-self level-0 post-3 status-publish hentry">
                        <th scope="row" class="check-column">
                            <input id="cb-select-<?= $item->id; ?>" type="checkbox" name="post[]" value="<?= $item->id; ?>">
                        </th>
                        <!-- <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề"> -->
                        <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                            <strong>
                                <a class="row-title" href=""># <?= $item->id; ?></a>
                            </strong>
                        </td>
                        <td><?= number_format($item->total); ?></td>
                        <td><?php echo $item->customer_name; ?></td>
                        <td><?php echo $item->customer_phone; ?></td>
                        <td>
                            <select name="" id="" class="order_status" data-id="<?php echo $item->id; ?>">
                                <option <?= $item->status == 1 ? 'selected' : '' ?> value="1"><?php echo __('Đơn hàng mới', 'ducanh-shop'); ?></option>
                                <option <?= $item->status == 2 ? 'selected' : '' ?> value="2"><?php echo __('Đơn đang vận chuyển', 'ducanh-shop'); ?></option>
                                <option <?= $item->status == 3 ? 'selected' : '' ?> value="3"><?php echo __('Đơn đã hoàn thành', 'ducanh-shop'); ?></option>
                                <option <?= $item->status == 4 ? 'selected' : '' ?> value="4"><?php echo __('Đơn đã hủy', 'ducanh-shop'); ?></option>
                            </select>
                        </td>
                        <td class="date column-date"><?php echo date('d-m-Y', strtotime($item->created)); ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>

            <tfoot>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1"><?php echo __('Chọn toàn bộ', 'ducanh-shop'); ?></label><input id="cb-select-all-1" type="checkbox"></td>
                    <th class="manage-column column-primary"><?php echo __('Mã đơn hàng', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Tổng tiền', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Khách hàng', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Điện thoại', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Trạng thái', 'ducanh-shop'); ?></th>
                    <th class="manage-column"><?php echo __('Thời gian', 'ducanh-shop'); ?></th>
                </tr>
            </tfoot>

        </table>
        <div class="tablenav bottom">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label><select name="action2" id="bulk-action-selector-bottom">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction2" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
            </div>

            <!-- paginate -->
            <?php include DUCANH_SHOP_PATH . 'includes/templates/elements/elm-paginate.php'; ?>

            <br class="clear">
        </div>
    </form>
</div>

<script>
    let ajax_url = '<?= admin_url('admin-ajax.php'); ?>';
    jQuery(document).ready(function() {
        jQuery('.order_status').on('change', function() {
            // alert(ajax_url);
            let order_id = jQuery(this).data('id'); //data-id
            let status = jQuery(this).val();
            console.log(order_id, status);
            jQuery.ajax({
                url: ajax_url,
                method: 'POST',
                dataType: 'json',
                data: {
                    action: 'ducanh_order_change_status',
                    order_id: order_id,
                    status: status,
                },
                success: function(res) {

                },
                error: function(err) {

                }
            })


        });
    });
</script>