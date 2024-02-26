<div class="box_right_1">
    <h2>Quản lý bình luận</h2>
</div>
<hr>
<div class="binhluan">
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Tên người dùng</th>
            <th>Tên sản phẩm</th>
            <th>Nội dung</th>
            <th>Ngày bình luận</th>
            <th>Hành động</th>
        </tr>
        <?php foreach($hienthi_bl as $k=>$v){
            extract($v);
            $stt=$k+1;
        ?>
        <tr>
            <td><?php echo $stt ?></td>
            <td><?php echo $tennguoidung ?></td>
            <td><?php echo $ten_sp ?></td>
            <td><?php echo $noidung_bl ?></td>
            <td><?php echo $ngay_bl ?></td>
            <td class="box_right_link">
                <a href="index.php?act=xoabl&id=<?php echo $id_bl ?>" onclick="return confirm('bạn có muốn xóa không ?') ">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>