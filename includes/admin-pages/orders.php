<?
// echo __FILE__;
?>
<div class="wrap">
    <h1 class="wp-heading-inline">
        <?php echo __('Quản lý đơn hàng', 'ducanh-shop'); ?>
    </h1>
    <hr class="wp-header-end">
    <ul class="subsubsub">
        <li class="all">
            <a href="#" class="current"><?php echo __('Tất cả', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="#"><?php echo __('Đơn hàng mới', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="#"><?php echo __('Đang vận chuyển', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="#"><?php echo __('Đã hoàn thành', 'ducanh-shop'); ?> <span class="count">(28)</span></a> |
        </li>
        <li class="publish">
            <a href="#"><?php echo __('Đã hủy', 'ducanh-shop'); ?> <span class="count">(28)</span></a>
        </li>
    </ul>
    <form id="order-filter" method="GET">
        <p class="search-box">

            <input type="search" id="post-search-input" name="s" value="">
            <input type="submit" id="search-submit" class="button" value="<?php echo __('Tìm các đơn hàng', 'ducanh-shop'); ?>">
        </p>

        <div class="tablenav top">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label><select name="action" id="bulk-action-selector-top">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
                <label for="filter-by-date" class="screen-reader-text">Lọc theo ngày</label>
                <select name="m" id="filter-by-date">
                    <option selected="selected" value="0">Tất cả các ngày</option>
                    <option value="202304">Tháng Tư 2023</option>
                </select>
                <label class="screen-reader-text" for="cat">Lọc theo danh mục</label><select name="cat" id="cat" class="postform">
                    <option value="0">Tất cả chuyên mục</option>
                    <option class="level-0" value="1">Chưa phân loại</option>
                    <option class="level-0" value="5">Cuộc sống</option>
                    <option class="level-0" value="3">Du lịch</option>
                    <option class="level-1" value="61">&nbsp;&nbsp;&nbsp;Sa Pa</option>
                    <option class="level-0" value="6">Thị trường ô tô</option>
                    <option class="level-0" value="4">Thông tin công nghệ</option>
                    <option class="level-0" value="7">Tin tức</option>
                </select>
                <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
            </div>
            <h2 class="screen-reader-text">Điều hướng danh sách các bài viết</h2>
            <div class="tablenav-pages"><span class="displaying-num">28 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Trang hiện tại</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> trên <span class="total-pages">2</span></span></span>
                    <a class="next-page button" href="http://localhost/phukienoto/wp-admin/edit.php?paged=2"><span class="screen-reader-text">Trang sau</span><span aria-hidden="true">›</span></a>
                    <a class="last-page button" href="http://localhost/phukienoto/wp-admin/edit.php?paged=2"><span class="screen-reader-text">Trang cuối</span><span aria-hidden="true">»</span></a></span>
            </div>
            <br class="clear">
        </div>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Chọn toàn bộ</label><input id="cb-select-all-1" type="checkbox"></td>
                    <th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="http://localhost/phukienoto/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu đề</span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" id="author" class="manage-column column-author">Tác giả</th>
                    <th scope="col" id="categories" class="manage-column column-categories">Chuyên mục</th>
                    <th scope="col" id="tags" class="manage-column column-tags">Thẻ</th>
                    <th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="http://localhost/phukienoto/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span class="screen-reader-text">Bình luận</span></span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" id="date" class="manage-column column-date sortable asc"><a href="http://localhost/phukienoto/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Thời gian</span><span class="sorting-indicator"></span></a></th>
                </tr>
            </thead>

            <tbody id="the-list">

                <tr id="post-184" class="iedit author-self level-0 post-184 type-post status-publish format-standard has-post-thumbnail hentry category-khong-phan-loai category-cuoc-song category-du-lich category-thi-truong-oto category-thong-tin-cong-nghe category-tin-tuc tag-o-to tag-tin-tuc">
                    <th scope="row" class="check-column"> <label class="screen-reader-text" for="cb-select-184">
                            Chọn Hai mẫu xe Trung Quốc sắp vào Việt Nam #3 </label>
                        <input id="cb-select-184" type="checkbox" name="post[]" value="184">
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “Hai mẫu xe Trung Quốc sắp vào Việt Nam #3” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                        <strong><a class="row-title" href="http://localhost/phukienoto/wp-admin/post.php?post=184&amp;action=edit" aria-label="“Hai mẫu xe Trung Quốc sắp vào Việt Nam #3” (Chỉnh sửa)">Hai mẫu xe Trung Quốc sắp vào Việt Nam #3</a></strong>

                        <div class="hidden" id="inline_184">
                            <div class="post_title">Hai mẫu xe Trung Quốc sắp vào Việt Nam #3</div>
                            <div class="post_name">hai-mau-xe-trung-quoc-3</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">open</div>
                            <div class="ping_status">open</div>
                            <div class="_status">publish</div>
                            <div class="jj">25</div>
                            <div class="mm">04</div>
                            <div class="aa">2023</div>
                            <div class="hh">04</div>
                            <div class="mn">23</div>
                            <div class="ss">05</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="category_184">1,5,3,6,4,7</div>
                            <div class="tags_input" id="post_tag_184">Ô tô, Tin tức</div>
                            <div class="sticky"></div>
                            <div class="post_format"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a href="http://localhost/phukienoto/wp-admin/post.php?post=184&amp;action=edit" aria-label="Sửa “Hai mẫu xe Trung Quốc sắp vào Việt Nam #3”">Chỉnh sửa</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Chỉnh sửa nhanh “Hai mẫu xe Trung Quốc sắp vào Việt Nam #3”" aria-expanded="false">Sửa nhanh</button> | </span><span class="trash"><a href="http://localhost/phukienoto/wp-admin/post.php?post=184&amp;action=trash&amp;_wpnonce=6549996b2e" class="submitdelete" aria-label="Bỏ “Hai mẫu xe Trung Quốc sắp vào Việt Nam #3” vào thùng rác">Thùng rác</a> | </span><span class="view"><a href="http://localhost/phukienoto/khong-phan-loai/hai-mau-xe-trung-quoc-3/" rel="bookmark" aria-label="Xem “Hai mẫu xe Trung Quốc sắp vào Việt Nam #3”">Xem</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
                    </td>
                    <td class="author column-author" data-colname="Tác giả"><a href="edit.php?post_type=post&amp;author=1">admin</a></td>
                    <td class="categories column-categories" data-colname="Chuyên mục"><a href="edit.php?category_name=khong-phan-loai">Chưa phân loại</a>, <a href="edit.php?category_name=cuoc-song">Cuộc sống</a>, <a href="edit.php?category_name=du-lich">Du lịch</a>, <a href="edit.php?category_name=thi-truong-oto">Thị trường ô tô</a>, <a href="edit.php?category_name=thong-tin-cong-nghe">Thông tin công nghệ</a>, <a href="edit.php?category_name=tin-tuc">Tin tức</a></td>
                    <td class="tags column-tags" data-colname="Thẻ"><a href="edit.php?tag=o-to">Ô tô</a>, <a href="edit.php?tag=tin-tuc">Tin tức</a></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <span aria-hidden="true">—</span><span class="screen-reader-text">Chưa có bình luận</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">Chưa có bình luận</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>25/04/2023 lúc 4:23 sáng</td>
                </tr>
                <tr id="post-180" class="iedit author-self level-0 post-180 type-post status-publish format-standard has-post-thumbnail hentry category-khong-phan-loai category-thi-truong-oto category-tin-tuc tag-tin-tuc">
                    <th scope="row" class="check-column"> <label class="screen-reader-text" for="cb-select-180">
                            Chọn Những mẫu xe bị triệu hồi nhiều nhất #3 </label>
                        <input id="cb-select-180" type="checkbox" name="post[]" value="180">
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “Những mẫu xe bị triệu hồi nhiều nhất #3” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                        <strong><a class="row-title" href="http://localhost/phukienoto/wp-admin/post.php?post=180&amp;action=edit" aria-label="“Những mẫu xe bị triệu hồi nhiều nhất #3” (Chỉnh sửa)">Những mẫu xe bị triệu hồi nhiều nhất #3</a></strong>

                        <div class="hidden" id="inline_180">
                            <div class="post_title">Những mẫu xe bị triệu hồi nhiều nhất #3</div>
                            <div class="post_name">nhung-mau-xe-bi-trieu-hoi-nhieu-nhat-3</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">open</div>
                            <div class="ping_status">open</div>
                            <div class="_status">publish</div>
                            <div class="jj">25</div>
                            <div class="mm">04</div>
                            <div class="aa">2023</div>
                            <div class="hh">04</div>
                            <div class="mn">22</div>
                            <div class="ss">57</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="category_180">1,6,7</div>
                            <div class="tags_input" id="post_tag_180">Tin tức</div>
                            <div class="sticky"></div>
                            <div class="post_format"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a href="http://localhost/phukienoto/wp-admin/post.php?post=180&amp;action=edit" aria-label="Sửa “Những mẫu xe bị triệu hồi nhiều nhất #3”">Chỉnh sửa</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Chỉnh sửa nhanh “Những mẫu xe bị triệu hồi nhiều nhất #3”" aria-expanded="false">Sửa nhanh</button> | </span><span class="trash"><a href="http://localhost/phukienoto/wp-admin/post.php?post=180&amp;action=trash&amp;_wpnonce=845f62ec79" class="submitdelete" aria-label="Bỏ “Những mẫu xe bị triệu hồi nhiều nhất #3” vào thùng rác">Thùng rác</a> | </span><span class="view"><a href="http://localhost/phukienoto/khong-phan-loai/nhung-mau-xe-bi-trieu-hoi-nhieu-nhat-3/" rel="bookmark" aria-label="Xem “Những mẫu xe bị triệu hồi nhiều nhất #3”">Xem</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
                    </td>
                    <td class="author column-author" data-colname="Tác giả"><a href="edit.php?post_type=post&amp;author=1">admin</a></td>
                    <td class="categories column-categories" data-colname="Chuyên mục"><a href="edit.php?category_name=khong-phan-loai">Chưa phân loại</a>, <a href="edit.php?category_name=thi-truong-oto">Thị trường ô tô</a>, <a href="edit.php?category_name=tin-tuc">Tin tức</a></td>
                    <td class="tags column-tags" data-colname="Thẻ"><a href="edit.php?tag=tin-tuc">Tin tức</a></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <span aria-hidden="true">—</span><span class="screen-reader-text">Chưa có bình luận</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">Chưa có bình luận</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>25/04/2023 lúc 4:22 sáng</td>
                </tr>

            </tbody>

            <tfoot>
                <tr>
                    <td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Chọn toàn bộ</label><input id="cb-select-all-2" type="checkbox"></td>
                    <th scope="col" class="manage-column column-title column-primary sortable desc"><a href="http://localhost/phukienoto/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu đề</span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" class="manage-column column-author">Tác giả</th>
                    <th scope="col" class="manage-column column-categories">Chuyên mục</th>
                    <th scope="col" class="manage-column column-tags">Thẻ</th>
                    <th scope="col" class="manage-column column-comments num sortable desc"><a href="http://localhost/phukienoto/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span class="screen-reader-text">Bình luận</span></span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" class="manage-column column-date sortable asc"><a href="http://localhost/phukienoto/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Thời gian</span><span class="sorting-indicator"></span></a></th>
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
            <div class="tablenav-pages"><span class="displaying-num">28 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="screen-reader-text">Trang hiện tại</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 trên <span class="total-pages">2</span></span></span>
                    <a class="next-page button" href="http://localhost/phukienoto/wp-admin/edit.php?paged=2"><span class="screen-reader-text">Trang sau</span><span aria-hidden="true">›</span></a>
                    <a class="last-page button" href="http://localhost/phukienoto/wp-admin/edit.php?paged=2"><span class="screen-reader-text">Trang cuối</span><span aria-hidden="true">»</span></a></span>
            </div>
            <br class="clear">
        </div>
    </form>

</div>