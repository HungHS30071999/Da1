<div class="box_right_1">
    <h2>Danh mục / Thêm sản phẩm</h2>
</div>
<span class="dm_span">
    <a href="index.php?act=sanpham&trang=1">
        < Quay lại</a>
</span>
<div class="themsp">
    <form action="index.php?act=themsp" method="post" enctype="multipart/form-data">
    <div>
            <p>Ngày ra mắt sản phẩm</p>
            <input type="text" name="date" id="" value="<?php echo $time; ?>" >
        </div>
        <div>
            <p>Chọn danh mục</p>
            <select class="sp_form3" name="danhmuc" id="danhmuc">
                <?php foreach ($hienthi_dm as $k => $v) {
                    extract($v);
                ?>
                    <option value="<?php echo $id_dm ?>"><?php echo $ten_dm ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p>Tên sản phẩm</p>
            <input type="text" name="name" id="">
        </div>
        <div>
            <p>ảnh</p>
            <input type="file" name="img" id="">
        </div>
        <div>
            <p>Mô tả</p>
            <input type="text" name="mota" id="">
        </div>
        <div>
            <p>Giá</p>
            <input type="text" name="gia" id="">
        </div>
        <div>
            <p>Giảm giá </p>
            <input type="text" name="sale" id="">
        </div>
        <div>
            <p>Số lượng</p>
            <input type="text" name="sl" id="">
        </div>
        <div>
            <p>Đã bán</p>
            <input type="text" name="daban" id="">
        </div>
        <input type="submit" value="Gửi" name="themsp">
        <input type="reset">
    </form>
    <?php if($tb==1){ ?>
        <p class="tb_1">Lỗi</p>
    <?php } ?>
</div>