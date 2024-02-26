<?php
////trang chu
//tim sap pham theo ten
function hienthi_sptk($tukhoa){
    $sql="SELECT * FROM `sanpham` WHERE `ten_sp` LIKE '%$tukhoa%';";
    $hienthi =pdo_query($sql);
    return $hienthi;
}
//hiện thị 4 danh mục ra trang chủ
function hienthi_dm_4()
{
    $sql = "SELECT * FROM `danhmuc` LIMIT 4";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
//hien thi 5 san pham top da ban ra trang chu
function hienthi_rate_5sp()
{
    $sql = "SELECT * FROM `sanpham` ORDER BY da_ban DESC LIMIT 5;";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
// hien thi 10 san pham ra trang chu
function hienthi_10sp()
{
    $sql = "SELECT * FROM `sanpham` LIMIT 10;";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
function hienthi_sp_day($day){
    $sql ="SELECT * FROM `sanpham` WHERE ngaynhap='$day' LIMIT 5";
    $hienthi=pdo_execute($sql);
    return $hienthi;
}
/////////////////////////////////////////////////////
////danh muc san pham
//hiện thị all danh mục
function hienthi_dm_all()
{
    $sql = "SELECT * FROM `danhmuc` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
//hien thi danh muc khi id_dm = $iddm
function hienthi_1dm($id)
{
    $sql = "SELECT * FROM `danhmuc` WHERE id_dm=$id";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}
//hien thi san pham theo id_dm = $iddm
function hienthi_sp_iddm($iddm)
{
    $sql = "SELECT * FROM `sanpham` WHERE id_dm=$iddm";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
// hien thi san pham new id_dm
function hienthi_sp_new($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id_dm = $id  ORDER BY ngaynhap DESC";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
// hien thi san pham top rate
function hienthi_sp_rate($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id_dm = $id  ORDER BY da_ban DESC";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
//hien thi san pham theo gia cao->thap
function hienthi_sp_max($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id_dm = $id  ORDER BY gia DESC";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
//hien thi san pham theo gia thap->cao
function hienthi_sp_min($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id_dm = $id  ORDER BY gia ASC";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
/////////
//hien thi gia san pham voi danh muc
function gia_dm1($giamax, $giamin, $id)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax AND id_dm=$id ORDER BY ngaynhap  DESC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function gia_dm2($giamax, $giamin, $id)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax AND id_dm=$id ORDER BY da_ban DESC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function gia_dm3($giamax, $giamin, $id)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax AND id_dm=$id ORDER BY gia DESC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function gia_dm4($giamax, $giamin, $id)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax AND id_dm=$id ORDER BY gia ASC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
//////////////////////
// hien thi san pham theo trang
function hienthi_sp_new1($gh, $offset)
{
    $sql = "SELECT * FROM `sanpham` ORDER BY ngaynhap  DESC LIMIT $gh OFFSET $offset;";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function hienthi_sp_rate1($gh, $offset)
{
    $sql = "SELECT * FROM `sanpham` ORDER BY da_ban DESC LIMIT $gh OFFSET $offset;";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function hienthi_sp_max1($gh, $offset)
{
    $sql = "SELECT * FROM `sanpham` ORDER BY gia DESC LIMIT $gh OFFSET $offset;";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
function hienthi_sp_min1($gh, $offset)
{
    $sql = "SELECT * FROM `sanpham` ORDER BY gia ASC LIMIT $gh OFFSET $offset;";
    $hienthi = pdo_query($sql);
    return $hienthi;
}
//lay tat ca san pham
function all_sp()
{
    $sql = "SELECT * FROM `sanpham`";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
//////////////////////
// lay gia san pham
function gia_sp1($giamax, $giamin)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax ORDER BY ngaynhap  DESC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function gia_sp2($giamax, $giamin)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax ORDER BY da_ban DESC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function gia_sp3($giamax, $giamin)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax ORDER BY gia DESC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
function gia_sp4($giamax, $giamin)
{
    $sql = "SELECT * FROM `sanpham` WHERE gia > $giamin AND gia < $giamax ORDER BY gia ASC ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
////////////////////////////////////////////////////////////////////
////chi tiet san pham
//hien thi san pham khi id_sp =$id
function hienthi_1sp($idsp)
{
    $sql = "SELECT * FROM `sanpham` LEFT JOIN `danhmuc` ON sanpham.id_dm=danhmuc.id_dm WHERE id_sp=$idsp";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}
//hien thi san pham khi id_dm =$id and limit=5;
function hienthi_5sp($iddm, $idsp)
{
    $sql = "SELECT * FROM `sanpham` WHERE id_dm =$iddm AND id_sp<>$idsp LIMIT 5";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
// update luot xem
function update_lx($id)
{
    $sql = "UPDATE `sanpham` SET `luottruycap`=`luottruycap`+1 WHERE `id_sp`=$id;";
    $update = pdo_query_one($sql);
    return $update;
}
//hien thi binh luan san pham
function hienthi_bl($id)
{
    $sql = "SELECT * FROM `binhluan` 
    LEFT JOIN sanpham ON binhluan.id_sp=sanpham.id_sp
    LEFT JOIN taikhoan ON binhluan.id_tk=taikhoan.id_tk WHERE sanpham.id_sp=$id;";
    $hienthi =pdo_execute($sql);
    return $hienthi;
}
function update_bl($nd,$ngay_bl,$idsp,$idtk){
    $sql="INSERT INTO `binhluan`(`id_tk`,`id_sp`,`noidung_bl`, `ngay_bl`) VALUES ('$idtk','$idsp','$nd','$ngay_bl') ";
    $update=pdo_execute($sql);
    return $update;
}
/////////////////////////////////////////////////////////////////////////
////tai khoan

//them tai khoan tu trang dang ki
function them_tk($ten_tk, $mk, $email)
{
    $sql = "INSERT INTO `taikhoan`( `ten_tk`, `matkhau`, `email`, `vaitro`) 
    VALUES ('$ten_tk','$mk','$email','0')";
    $them = pdo_execute($sql);
    return $them;
}
//dang nhap tai khoan
function dangnhap($email, $mk)
{
    $sql = "SELECT * FROM `taikhoan` WHERE email ='$email' AND matkhau='$mk';";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}
//hien thi tai khoan
function hienthi_1tk($id)
{
    $sql = "SELECT * FROM `taikhoan` WHERE id_tk=$id";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}
//cap nhap tai khoan
function update_tk($name, $sdt, $email, $dc, $gt, $namsinh, $id)
{
    $sql = "UPDATE `taikhoan` 
    SET `tennguoidung`='$name',`sodienthoai`='$sdt',`email`='$email',`diachi`='$dc',`gioitinh`='$gt',`namsinh`='$namsinh' WHERE id_tk=$id";
    $them = pdo_execute($sql);
    return $them;
}
// thay mat khau tai khoan
function update_mk($mk, $id)
{
    $sql = "UPDATE `taikhoan` SET `matkhau`='$mk' WHERE id_tk=$id";
    $them = pdo_execute($sql);
    return $them;
}
// quen mật khẩu
function quen_mk($email)
{
    $sql = "SELECT * FROM `taikhoan` WHERE `email`='$email'";
    $quen = pdo_query_one($sql);
    return $quen;
}
/////////////////////////////////////////////////////////
//gio hang
function load_sp_cart($id)
{
    $sql="SELECT * FROM sanpham WHERE id_sp IN ($id)";
    $load=pdo_query($sql);
    return $load;
}
//them don hang
function them_donhang($idsp,$idtk,$ngay_dat,$so_luong,$thanh_tien,$chuthich){
    $sql="INSERT INTO `donhang`( `id_sp`, `id_tk`, `ngay_dat`, `sl_sp`, `thanh_tien`, `chuthich`, `trangthai`) 
    VALUES ('$idsp','$idtk','$ngay_dat','$so_luong','$thanh_tien','$chuthich','0')";
    $them=pdo_execute($sql);
    return $them;
}
//hien thi don hang khi idtk =idtk
function hienthi_1dh($id){
    $sql="SELECT * FROM `donhang` LEFT JOIN sanpham ON donhang.id_sp = sanpham.id_sp
    LEFT JOIN danhmuc ON sanpham.id_dm=danhmuc.id_dm WHERE id_tk=$id;";
    $hienthi=pdo_execute($sql);
    return $hienthi;
}