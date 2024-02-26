<div class="box_right_1">
    <h2>Quản lý Tài khoản</h2>
</div>
<hr>
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
            <th>Hàng động</th>
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
                <td class="box_right_link">
                    <a href="index.php?act=suatk&id=<?php echo $id_tk ?>">Sửa</a>
                    <a href="index.php?act=xoatk&id=<?php echo $id_tk ?>" onclick="return confirm('bạn có muốn xóa không ?') ">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>