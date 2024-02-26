<div class="box_right_1">
    <h2>Quản lý tài khoản</h2>
</div>
<hr>
<a class="dm_a" href="index.php?act=themdanhmuc">+</a>
<div class="box_right_dm">
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($hienthi_dm as $k => $v) {
            extract($v);
            $stt = $k + 1;
        ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $ten_dm; ?></td>
                <td class="box_right_link">
                    <a href="index.php?act=suadm&iddm=<?php echo $id_dm ?>">Sửa</a>
                    <a href="index.php?act=xoadm&iddm=<?php echo $id_dm ?>" onclick="return confirm('bạn có muốn xóa không ? lưu ý xóa sẽ xóa cả sản phẩm cùng danh mục') ">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>