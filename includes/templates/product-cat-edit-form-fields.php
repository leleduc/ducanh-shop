<?php
$image = get_term_meta($tag->term_id, 'image', true);
?>

<tr class="form-field ">
    <th scope="row"><label for="image"><?php echo __('Hình ảnh:', 'ducanh-shop') ?></label></th>
    <td><input name="image" id="image" type="text" value="<?php echo $image; ?>" size="40">
        <p class="description">“slug” là đường dẫn thân thiện của tên. Nó thường chỉ bao gồm kí tự viết thường, số và dấu gạch ngang, không dùng tiếng Việt.</p>
    </td>
</tr>