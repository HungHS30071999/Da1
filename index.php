<?php
session_start();
include "./model/pdo.php";
include "./model/nguoidung.php";
include "./view/header.php";
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            $hienthi_dm_4 = hienthi_dm_4();
            $hienthi_rate_5sp = hienthi_rate_5sp();
            $hienthi_10sp = hienthi_10sp();
            $time = date("y-m-d", time());
            $hienthi_sp_day = hienthi_sp_day($time);
            include "./view/trangchu.php";
            break;
        case 'timsp':

            if (isset($_POST['gui'])) {
                $tukhoa = $_POST['tkiem'];
                if ($tukhoa != "") {
                    $hienthi_sptk = hienthi_sptk($tukhoa);
                }else{
                    header('location:index.php?act=trangchu');
                }
            }
            include "./view/timsp.php";
            break;
        case 'danhmucsp':
            $hienthi_dm_all = hienthi_dm_all();
            $id_dm = $_GET['iddm'];
            $id = $id_dm;
            $tt = $_GET['tt'];
            $trang = $_GET['trang'];
            $gh = 6; //gioi han 6sp/ trang
            $sosp = all_sp()->rowCount(); //lay so san pham
            $sotrang = $sosp / $gh;
            $sotrangg = ceil($sotrang);
            $offset = ($trang - 1) * $gh;
            if ($tt == "new") {
                if ($id_dm != 0 && $id_dm != "") {
                    $hienthi_1dm = hienthi_1dm($id_dm);
                    $hienthi_sp = hienthi_sp_new($id_dm);
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_dm1($giamax, $giamin, $id);
                    } else {
                        $hienthi_sp = hienthi_sp_new($id_dm);
                    }
                } else {
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_sp1($giamax, $giamin, $gh, $offset);
                    } else {
                        $hienthi_sp = hienthi_sp_new1($gh, $offset);
                    }
                }
            } else if ($tt == "rate") {
                if ($id_dm != 0 && $id_dm != "") {
                    $hienthi_1dm = hienthi_1dm($id_dm);

                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_dm2($giamax, $giamin, $id);
                    } else {
                        $hienthi_sp = hienthi_sp_rate($id_dm);
                    }
                } else {
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_sp2($giamax, $giamin, $gh, $offset);
                    } else {
                        $hienthi_sp = hienthi_sp_rate1($gh, $offset);
                    }
                }
            } else if ($tt == "max") {
                if ($id_dm != 0 && $id_dm != "") {
                    $hienthi_1dm = hienthi_1dm($id_dm);
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_dm3($giamax, $giamin, $id);
                    } else {
                        $hienthi_sp = hienthi_sp_max($id_dm);
                    }
                } else {
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_sp3($giamax, $giamin, $gh, $offset);
                    } else {
                        $hienthi_sp = hienthi_sp_max1($gh, $offset);
                    }
                }
            } else if ($tt == "min") {
                if ($id_dm != 0 && $id_dm != "") {
                    $hienthi_1dm = hienthi_1dm($id_dm);
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_dm4($giamax, $giamin, $id);
                    } else {
                        $hienthi_sp = hienthi_sp_min($id_dm);
                    }
                } else {
                    if (isset($_POST['gui']) && $_POST['gui'] != "") {
                        $huy = 1;
                        $tb = 3000000;
                        $gia = $_POST['gia'];
                        $giamax = ($gia + 0) * $tb;
                        $giamin = ($gia - 1) * $tb;
                        $hienthi_sp = gia_sp4($giamax, $giamin, $gh, $offset);
                    } else {
                        $hienthi_sp = hienthi_sp_min1($gh, $offset);
                    }
                }
            }
            include "./view/danhmucsp.php";
            break;
        case 'chitietsp':
            $tb = '';
            $id_sp = $_GET['idsp'];
            $id_dm = $_GET['iddm'];
            $hienthi_1sp = hienthi_1sp($id_sp);
            $hienthi_5sp = hienthi_5sp($id_dm, $id_sp);
            //update luot xem
            $luotxem = $hienthi_1sp[0]['luottruycap'];
            $update_lx = update_lx($id_sp);
            //hien thi binh luan
            $hienthi_bl = hienthi_bl($id_sp);
            //lay binh luan
            $ngaygui = date("y-m-d", time()); // lay ngay-thang-nam
            if (isset($_POST['gui']) && $_POST['gui'] != "") {
                $binhluan = $_POST['binhluan'];
                $ngaygui = $_POST['ngaygui'];
                if (isset($_SESSION['id_tk'])) {
                    $update_bl = update_bl($binhluan, $ngaygui, $id_sp, $_SESSION['id_tk']);
                } else {
                    header("location:index.php?act=dangnhap");
                }
            }
            //
            include "./view/chitietsp.php";
            break;
        case 'giohang':
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                //tao mang chua id cac san pham trong gio hang
                $productid = array_column($cart, 'id');

                $idlist = implode(',', $productid);
                $load_sp_cart = load_sp_cart($idlist);
            }
            include "./view/giohang.php";
            break;
        case 'dathang':
            $hienthi_tk = hienthi_1tk($_SESSION['id_tk']);
            if (isset($_GET['id']) && $_GET['sl']) {
                $idsp = $_GET['id'];
                $sl = $_GET['sl'];
                $hienthisp = hienthi_1sp($idsp);
            }
            if (isset($_POST['dathang'])) {
                $sl = $_POST['soluong'];
                $idsp = $_POST['id'];
                $hienthisp = hienthi_1sp($idsp);
            }
            include "./view/dathang.php";
            break;
        case 'taikhoan':
            include "./view/taikhoan/taikhoan.php";
            break;
            ///////////////////////////////////////////////////////

        case 'dangnhap':
            $tb = "";
            if (isset($_POST['dangnhap']) && $_POST['dangnhap'] != "") {
                $tb = 1;
                $email = $_POST['email'];
                $mk = $_POST['mk'];
                $hienthi_user = dangnhap($email, $mk);
                if ($hienthi_user != null) {
                    foreach ($hienthi_user as $k => $v) {
                        extract($v);
                        $_SESSION['id_tk'] = $id_tk;
                        $_SESSION['ten_tk'] = $ten_tk;
                        $_SESSION['vaitro'] = $vaitro;
                    }
                    header('location:index.php?act=trangchu');
                }
            }
            include "./view/taikhoan/dangnhap.php";
            break;
        case 'dangky':
            $tb = '';
            if (isset($_POST['dangky']) && $_POST['dangky'] != 0) {
                $ten = $_POST['ten'];
                $email = $_POST['ten_user'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if ($ten != "" && $email != "" && $pass != "" && $repass != "") {
                    if ($pass == $repass) {
                        $them_tk = them_tk($ten, $pass, $email);
                        header("location:index.php?act=dangnhap");
                    } else {
                        $tb = 2;
                    }
                } else {
                    $tb = 1;
                }
            }
            include "./view/taikhoan/dangky.php";
            break;
        case 'quenmk':
            $tb = '';
            if (isset($_POST['quenmk'])) {
                $email = $_POST['email'];
                if ($email != "") {
                    $quen_mk = quen_mk($email);
                    if ($quen_mk != null) {
                        $tb = 3;
                    } else {
                        $tb = 2;
                    }
                } else {
                    $tb = 1;
                }
            }
            include "./view/taikhoan/quenmk.php";
            break;
        case 'doimk':
            $hienthi_1tk = hienthi_1tk($_SESSION['id_tk']);
            $tb = '';
            // echo $hienthi_1tk[0]['matkhau'];
            if (isset($_POST['doimk'])) {
                $mk = $_POST['mk'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if ($mk != '' && $pass != '' && $pass != '') {
                    if ($pass == $repass) {
                        if ($mk == $hienthi_1tk[0]['matkhau']) {
                            $update_mk = update_mk($pass, $_SESSION['id_tk']);
                            $tb = 3;
                        } else {
                            $tb = 4;
                        }
                    } else {
                        $tb = 2;
                    }
                } else {
                    $tb = 1;
                }
            }
            include "./view/taikhoan/doimk.php";
            break;
        case 'dangxuat':
            unset($_SESSION['ten_tk']);
            unset($_SESSION['id_tk']);
            unset($_SESSION['vaitro']);
            unset($_SESSION['vtt']);
            unset($_SESSION['cart']);
            // unset($_SESSION['cart']);
            header('location:index.php?act=trangchu');
            break;
        case 'hsct':
            $hienthi_1tk = hienthi_1tk($_SESSION['id_tk']);
            include './view/hsct.php';
            break;
        case 'donmua':
            if (isset($_POST['dat_sp'])) {
                $ngay_dat = $_POST['ngay_dat'];
                $idsp_dh = $_POST['idsp'];
                $idtk = $_POST['idtk'];
                $so_luong = $_POST['so_luong'];
                $thanh_tien = $_POST['thanh_tien'];
                $chuthich = $_POST['chuthich'];
                $them_donhang = them_donhang($idsp_dh, $idtk, $ngay_dat, $so_luong, $thanh_tien, $chuthich);
            }
            $hienthi_1dh = hienthi_1dh($_SESSION['id_tk']);
            include './view/donmua.php';
            break;
        case 'suahs':
            $hienthi_1tk = hienthi_1tk($_SESSION['id_tk']);
            if (isset($_POST['suatk'])) {
                $name = $_POST['name'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $dc = $_POST['dc'];
                $gt = $_POST['gt'];
                $namsinh = $_POST['ns'];
                $update_tk = update_tk($name, $sdt, $email, $dc, $gt, $namsinh, $_SESSION['id_tk']);
            }
            include './view/suahs.php';
            break;
        default:
            # code...
            break;
    }
} else {
    header("location:index.php?act=trangchu");
}
include "./view/footer.php";
