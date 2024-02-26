<div class="box_right_1">
    <h2>Quản lý Sản phẩm / Tìm kiếm sản phẩm</h2>
</div>
<hr>
<div class="timsp">
    <a class="timsp_a" href="index.php?act=sanpham&trang=1">Quay lại</a>
    <h2>Thông tin tìm kiếm</h2>
    <h5>Danh mục : <?php echo $id_dm ?></h5>
    <h5>Tên sản phẩm : <?php echo $tensp ?></h5>
    <h5>Kết quả :</h5>
    <?php if($tb==1){ ?>
        <h5>Sản phẩm không có trong dữ liệu</h5>
    <?php } ?>
    <table border="1px">
        <tr>
            <th>Stt</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Giảm giá</th>
            <th>Ngày nhập</th>
            <th>Số lượng</th>
            <th>Đã bán</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($hienthi_sp as $k => $v) {
            extract($v);
            $stt = $k + 1;
            $link_img = $img_path . $img; ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $ten_sp ?></td>
                <td><img src="<?php echo $link_img ?>" alt="" width="200px" height="170px"></td>
                <td><?php echo $mota ?></td>
                <td><?php echo number_format($gia, 0, '.', '.'); ?>đ</td>
                <td><?php echo $giamgia ?>%</td>
                <td><?php echo $ngaynhap ?></td>
                <td><?php echo $soluong ?></td>
                <td><?php echo $da_ban ?></td>
                <td class="box_right_link">
                    <a href="index.php?act=suasp&id=<?php echo $id_sp ?>">Sửa</a>
                    <a href="index.php?act=xoasp&id=<?php echo $id_sp ?>" onclick="return confirm('bạn có muốn xóa không ?') ">Xóa</a>
                </td>
            </tr>
        <?php  } ?>
    </table>

</div>