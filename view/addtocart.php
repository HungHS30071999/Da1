<?php 
    session_start();
    if (!isset($_SESSION['cart'])) {
        // Nếu không có thì đi khởi tạo
        $_SESSION['cart'] = [];
    }

    if($_SERVER['REQUEST_METHOD']=== "POST"){
        // lay du lieu tu ajax 
        $idsp=$_POST['id'];
        $namesp=$_POST['name'];
        $pricesp=$_POST['price'];
        $index =array_search($idsp,array_column($_SESSION['cart'],'id'));
        if($index !==false){
            $_SESSION['cart'][$index]['quantity']+=1;
        }else{
            // neu san pham chua ton tai thi them moi vao gio hang
            $product=[
                'id'=>$idsp,
                'name'=>$namesp,
                'price'=>$pricesp,
                'quantity'=>1
            ];
            $_SESSION['cart'][]=$product;
        }
        // tra ve so luong san pham
        echo count($_SESSION['cart']);
    }else{
        echo "yeu cau ko hop le";
    }

?>