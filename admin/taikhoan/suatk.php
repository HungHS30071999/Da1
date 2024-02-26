<div class="box_right_1">
    <h2>Quản lý tài khoản / Thay đổi</h2>
</div>
<hr>
<a href="index.php?act=taikhoan">Quay lại</a>
<div class="binhluan">
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Tên tài khoản</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Số điện thoại</th>
            <th>Tên người dùng</th>
            <th>Địa chỉ</th>
            <th>Giới tính</th>
            <th>Năm sinh</th>
            <th>Vaitro</th>
        </tr>
        <?php foreach ($hienthi_tk as $k => $v) {
            extract($v);
            $stt = $k + 1;
        ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $ten_tk ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $matkhau ?></td>
                <td><?php echo $sodienthoai ?></td>
                <td><?php echo $tennguoidung ?></td>
                <td><?php echo $diachi ?></td>
                <td><?php echo $gioitinh ?></td>
                <td><?php echo $namsinh ?></td>
                <td><?php if($vaitro ==0){
                    echo "Người dùng";
                }else if($vaitro == 1){
                    echo "Nhân viên";
                }else if($vaitro == 2){
                    echo "Quản lý";
                } ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
<div>
    <hr>
    <h2>Thay đổi vai trò của tài khoản</h2>
    <form action="index.php?act=suatk&id=<?php echo $id_tk ?>" method="post">
        <input type="hidden" name="vaitro" value="">
        <input type="radio" name="vaitro" id="" value="0"> Người dùng <br>
        <input type="radio" name="vaitro" id="" value="1"> Nhân viên <br>
        <input type="radio" name="vaitro" id="" value="2"> Quản lý <br>
        <input type="submit" value="Thay đổi" name="thay_vt">
    </form>
    <?php if ($tb == 1) { ?>
        <h2 style="color: red;">Mời bạn chọn vai trò</h2>
    <?php } ?>
</div>