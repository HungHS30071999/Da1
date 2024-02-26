<script>
    let laysoluong = document.getElementById("soluong");

    function hienthi() {
        // Hiển thị giá trị mới của soluong
        console.log(laysoluong.value);
    }

    function hanhdongcong() {
        // Tăng giá trị của soluong
        laysoluong.value++;
        // Hiển thị giá trị mới của soluong
        hienthi();
    }

    function hanhdongtru() {
        if (laysoluong.value > 1) {
            laysoluong.value--;
        }
        // Hiển thị giá trị mới của soluong
        hienthi();
    }
</script>