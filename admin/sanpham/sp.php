<div class="box_right_1">
    <h2>Quản lý Sản phẩm</h2>
</div>
<hr>
<div class="sp_table">
    <div class="sp_table_a">
        <a href="index.php?act=themsp">+</a>
    </div>
    <form action="index.php?act=timsp" method="post" class="sp_form">
        <select class="sp_form3" name="danhmuc" id="danhmuc">
            <option value="0">Tất cả</option>
            <?php foreach ($hienthi_dm as $k => $v) {
                extract($v);
            ?>
                <option value="<?php echo $id_dm ?>"><?php echo $ten_dm ?></option>
            <?php } ?>
        </select>
        <input class="sp_form2" type="submit" value="Tìm kiếm" name="search" id=""><br>
        <input class="sp_form1" type="text" name="tensp" id="" placeholder="Tên sản phẩm">
    </form>
    <table border="1px">
        <tr>
            <th>Stt</th>
            <th>Danh mục</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Giảm giá</th>
            <th>Ngày nhập</th>
            <th>Số lượng</th>
            <th>Đã bán</th>
            <th>Lượt xem</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($hienthi_sp as $k => $v) {
            extract($v);
            $stt = $k + 1;
            $link_img = $img_path . $img; ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $ten_dm ?></td>
                <td><?php echo $ten_sp ?></td>
                <td><img src="<?php echo $link_img ?>" alt="" width="200px" height="170px"></td>
                <td><?php echo $mota ?></td>
                <td><?php echo number_format($gia, 0, '.', '.'); ?>đ</td>
                <td><?php echo $giamgia ?>%</td>
                <td><?php echo $ngaynhap ?></td>
                <td><?php echo $soluong ?></td>
                <td><?php echo $da_ban ?></td>
                <td><?php echo $luottruycap ?></td>
                <td class="box_right_link">
                    <a href="index.php?act=suasp&id=<?php echo $id_sp ?>">Sửa</a>
                    <a href="index.php?act=xoasp&id=<?php echo $id_sp ?>" onclick="return confirm('bạn có muốn xóa không ?') ">Xóa</a>
                </td>
            </tr>
        <?php  } ?>
    </table>
    <?php 
    if($id_dm != ""){
        for ($i = 1; $i <= $sotrangs; $i++) { ?>
            <a href="index.php?act=sanpham&trang=<?php echo $i ?>"><?php echo $i ?></a>
        <?php }
    }else{

    }
     ?>
</div>