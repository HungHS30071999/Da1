<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTK Mobile</title>
    <link rel="stylesheet" href="./css/dg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="trangchu_logo">
            <a href="index.php?act=trangchu">
                <img src="./img/logo.jpg" alt="">
            </a>
        </div>
        <form action="index.php?act=timsp" method="post" class="trangchu_search">
            <input class="trangchu_search1" type="text" name="tkiem" id="">
            <input class="trangchu_search2" type="submit" name="gui" value="Gửi">
        </form>
        <div class="trangchu_taikhoan">
            <?php if (isset($_SESSION['ten_tk'])) { ?>
                <a href="index.php?act=hsct"><i class="fa-solid fa-user"></i></a>
                <a href="index.php?act=hsct"><?php echo $_SESSION['ten_tk'] ?></a>
            <?php } else { ?>
                <a href="index.php?act=taikhoan"><i class="fa-solid fa-user"></i></a>
                <a href="index.php?act=taikhoan">Tài khoản</a>
            <?php } ?>
            <div class="trangchi_giohang">
                <a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="index.php?act=giohang">Giỏ hàng (<span id="soluong1"><?php echo !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>)</a>
            </div>  
        </div>

    </header>
    <?php if (!empty($_SESSION['vaitro'])) { ?>
        <a href="admin/index.php?act=danhmuc&id=<?php echo $_SESSION['id_tk'] ?> &vt=<?php echo $_SESSION['vaitro'] ?>">Vào trang quản trị</a>
    <?php   } ?>