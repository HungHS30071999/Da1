<div class="box_right_1">
    <h2>Danh mục / Sửa sản phẩm</h2>
</div>
<span class="dm_span">
    <a href="index.php?act=sanpham&trang=1">
        < Quay lại</a>
</span>
<div class="suasp">
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
        </tr>
        <?php foreach ($hienthi_sp_1 as $k => $v) {
            extract($v);
            $link_img = $img_path . $img; ?>
            <tr>
                <td><?php echo $id_sp ?></td>
                <td><?php echo $ten_dm ?></td>
                <td><?php echo $ten_sp ?></td>
                <td><img src="<?php echo $link_img ?>" alt="" width="200px" height="170px"></td>
                <td><?php echo $mota ?></td>
                <td><?php echo number_format($gia,0,'.','.'); ?>đ</td>
                <td><?php echo $giamgia ?>%</td>
                <td><?php echo $ngaynhap ?></td>
                <td><?php echo $soluong ?></td>
                <td><?php echo $da_ban ?></td>
            </tr>
        <?php  } ?>
    </table>
    <hr>
    <h2>Bảng cập nhập</h2>
    <form action="index.php?act=suasp&id=<?php echo $id_sp ?>" method="post" class="suasp_form" enctype="multipart/form-data">
        <div class="suasp_1">
            <p>Ngày nhập</p>
            <input type="text" name="date" id="" value="<?php echo $time; ?>" readonly>
        </div>
        <div class="suasp_1">
            <p>Chọn danh mục</p>
            <select class="sp_form3" name="danhmuc" id="danhmuc">
                <?php foreach ($hienthi_dm as $k => $v) {
                    extract($v);
                ?>
                    <option value="<?php echo $id_dm ?>"><?php echo $ten_dm ?></option>
                <?php } ?>
            </select>
        </div>
        <?php foreach($hienthi_sp_1 as $k => $v) {
            extract($v); ?>
        <div class="suasp_1">
            <p>Tên sản phẩm</p>
            <input type="text" name="name" id="" value="<?php echo $ten_sp ?>">
        </div>
        <div class="suasp_1">
            <p>ảnh</p>
            <input type="file" name="img" id="">
            <input type="hidden" name="img_error" value="<?php echo $img ?>">
        </div>
        <div class="suasp_1">
            <p>Mô tả</p>
            <input type="text" name="mota" id="" value="<?php echo $mota ?>">
        </div>
        <div class="suasp_1">
            <p>Giá</p>
            <input type="text" name="gia" id="" value="<?php echo $gia ?>">
        </div>
        <div class="suasp_1">
            <p>Giảm giá </p>
            <input type="text" name="sale" id="" value="<?php echo $giamgia ?>">
        </div>
        <div class="suasp_1">
            <p>Số lượng</p>
            <input type="text" name="sl" id="" value="<?php echo $soluong ?>">
        </div>
        <div class="suasp_1">
            <p>Đã bán</p>
            <input type="text" name="daban" id="" value="<?php echo $da_ban?>">
        </div>
        <?php } ?>
        <div class="suasp_input">
            <input type="submit" value="Gửi" name="themsp">
            <input type="reset">
        </div>
    </form>
</div>