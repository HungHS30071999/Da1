<?php
// hien thi danh muc 
function hienthi_dm()
{
    $sql = "SELECT * FROM `danhmuc` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
// them danh muc
function them_dm($ten_dm)
{
    $sql = "INSERT INTO `danhmuc` (`ten_dm`) VALUES ('$ten_dm')";
    // $conn = pdo_get_connection();
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    $them = pdo_execute($sql);
    return $them;
}
// xoa danh muc
function xoa_dm($id)
{
    $sql = "DELETE FROM `danhmuc` WHERE id_dm =$id";
    $xoa = pdo_execute($sql);
    return $xoa;
}
//xoa tat ca san pham danh muc khi id_dm =$id
function xoa_allsp($id){
    $sql="DELETE FROM `sanpham` WHERE id_dm =$id";
    $xoa=pdo_execute($sql);
    return $xoa;
}
// hien thi danh muc khi id_dm =id
function hienthi_1_dm($id)
{
    $sql = "SELECT * FROM `danhmuc` WHERE id_dm=$id";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}
//sua danh muc
function sua_dm($tendm, $id)
{
    $sql = "UPDATE `danhmuc` SET `ten_dm`='$tendm' WHERE id_dm=$id";
    $sua = pdo_execute($sql);
    return $sua;
}
///////////////////////////////////////////////////////////////////////////////
// hien thi san pham 
// giới hạn sản phẩm trên trang
function hienthi_sp($gioihan_sp, $offset)
{
    $sql = "SELECT * FROM `sanpham` 
        LEFT JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm LIMIT $gioihan_sp OFFSET $offset;";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
// hiện thị số sản phẩm
function so_sp()
{
    $sql = "SELECT * FROM `sanpham` where id_sp ";
    $sosp = pdo_execute($sql);
    return $sosp;
}

//hien thi san pham khi id_sp=$id
function hienthi_sp_1($id)
{
    $sql = "SELECT * FROM `sanpham` LEFT JOIN danhmuc ON sanpham.id_dm=danhmuc.id_dm WHERE id_sp=$id";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}
//them san pham
function them_sp($name, $nameimg, $mota, $gia, $gg, $nn, $id_dm, $sl, $daban)
{
    $sql = "INSERT INTO `sanpham`(`ten_sp`, `img`, `mota`, `gia`, `giamgia`, `ngaynhap`, `id_dm`, `soluong`, `da_ban`) 
    VALUES ('$name','$nameimg','$mota','$gia','$gg','$nn','$id_dm','$sl','$daban')";
    $them = pdo_query_one($sql);
    return $them;
}
//sua san pham 
function sua_sp($id, $name, $nameimg, $mota, $gia, $gg, $nn, $id_dm, $sl, $daban)
{
    $sql = "UPDATE `sanpham` SET 
    `ten_sp`='$name',`img`='$nameimg',`mota`='$mota',`gia`='$gia',`giamgia`='$gg',
    `ngaynhap`='$nn',`id_dm`='$id_dm',`soluong`='$sl',`da_ban`='$daban' WHERE id_sp=$id";
    $them = pdo_query_one($sql);
    return $them;
}
//xoa san pham
function xoa_sp($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id_sp=" . $id;
    $xoa = pdo_execute($sql);
    return $xoa;
}
//tim san pham bang danh muc
function tim_sp_dm($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE sanpham.id_dm=$id";
    $tim = pdo_query($sql);
    return $tim;
}
//tim san pham theo ten
function tim_sp_ten($ten)
{
    $sql = "SELECT * FROM `sanpham` WHERE ten_sp LIKE '%$ten%'";
    $tim = pdo_query($sql);
    return $tim;
}
///////////////////////////////////////////
// hien thi binh luan
function hienthi_bl()
{
    $sql = "SELECT * FROM `binhluan` 
    LEFT JOIN taikhoan ON binhluan.id_tk = taikhoan.id_tk 
    LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp ";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
//xoa binh luan
function xoa_bl($id)
{
    $sql = "DELETE FROM `binhluan` WHERE id_bl=" . $id;
    $xoa = pdo_execute($sql);
    return $xoa;
}
//////////////////////////////////////////
//hien thi tai khoan
function hienthi_tk()
{
    $sql = "SELECT * FROM `taikhoan` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
//hien thi tai khoan khi id_tk =id
function hienthi_1_tk($id)
{
    $sql = "SELECT * FROM `taikhoan` WHERE id_tk=$id";
    $hienthi = pdo_query_one($sql);
    return $hienthi;
}

//thay vai tro tai khoan
function thay_vaitro($id, $vt)
{
    $sql = "UPDATE `taikhoan` SET `vaitro` = '$vt' WHERE id_tk = $id;";
    $thay = pdo_query($sql);
    return $thay;
}
// xoa tai khoan
function xoa_tk($id)
{
    $sql = "DELETE FROM `taikhoan` WHERE id_tk=$id";
    $xoa = pdo_execute($sql);
    return $xoa;
}
/////
function hienthi_sp_dm()
{
    $sql = "SELECT d.`id_dm`, d.`ten_dm`, 
    SUM(s.da_ban) AS da_ban, 
    SUM(s.luottruycap) AS tong_ltc,
    SUM(s.soluong) AS tong_sl 
    FROM `danhmuc` d JOIN `sanpham` s ON d.`id_dm` = s.`id_dm` GROUP BY d.`id_dm`, d.`ten_dm`;";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}

///////////////
//đơn hàng
function hienthi_gh()
{
    $sql = "SELECT * FROM `donhang` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
// update lại số lượng ,đã bán khi đặt hàng thành công
function update_sl_db($id,$slsp){
    $sql="UPDATE `sanpham` SET `soluong`=`soluong` - $slsp ,`da_ban`=`da_ban` + $slsp WHERE `id_sp`=$id;";
    $them=pdo_execute($sql);
    return $them;
}
//update trạng thái đơn hàng
function update_gh($id)
{
    $sql = "UPDATE `donhang` SET `trangthai`='1' WHERE id_dh=$id";
    $them = pdo_execute($sql);
    return $them;
}
//xóa đơn hàng
function xoa_gh($id)
{
    $sql = "DELETE FROM `donhang` WHERE id_dh=$id";
    $xoa = pdo_execute($sql);
    return $xoa;
}
///////////////////
// lấy số liệu 30 ngày gần nhất trong đơn hàng
function lay_dh()
{
    $sql = "SELECT
    ngay_dat,
    SUM(sl_sp) AS total_quantity,
    
 
SUM(thanh_tien) AS total_price
FROM
    donhang
WHERE
    trangthai 
 
= 1 AND
    ngay_dat >= CURDATE() - INTERVAL 30 DAY
GROUP BY
    ngay_dat;";
    $lay = pdo_execute($sql);
    return $lay;
}
// lấy số liệu 12 tháng gần nhất trong đơn hàng
function lay_dh_12t()
{
    $sql = "SELECT DATE_FORMAT(ngay_dat,'%Y-%m') 
    AS month, SUM(sl_sp) 
    AS total_quantity, SUM(thanh_tien) 
    AS total_price 
    FROM donhang WHERE trangthai = 1 AND ngay_dat >= CURDATE() - INTERVAL 12 MONTH 
    GROUP BY month ORDER BY month DESC";
    $lay = pdo_execute($sql);
    return $lay;
}
// lấy số liệu theo năm trong đơn hàng
function lay_dh_n(){
    $sql="SELECT YEAR(ngay_dat) AS year, 
    SUM(sl_sp) AS total_quantity, 
    SUM(thanh_tien) AS total_price FROM donhang 
    WHERE trangthai = 1 AND ngay_dat >= CURDATE() - INTERVAL 12 MONTH 
    GROUP BY year ORDER BY year DESC;";
    $lay=pdo_execute($sql);
    return $lay;
}
