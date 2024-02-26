<div class="box_right_1">
    <h2>Biểu đồ </h2>
</div>
<hr>
<h1 style="text-align: center;">Doanh thu 30 ngày gần nhất</h1>
<div id="myfirstchart" style="height: 250px;"></div>
<hr>
<h1 style="text-align: center;">Doanh thu 12 tháng gần nhất</h1>
<div id="myfirstchart1" style="height: 250px;"></div>
<hr>
<h1 style="text-align: center;">Doanh thu theo năm</h1>
<div id="myfirstchart2" style="height: 250px;"></div>
<hr>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            <?php foreach($lay_dh as $k=>$v):
                extract($v);
                ?>
            {
                year: '<?= $ngay_dat ?>',
                quantity:<?= $total_quantity ?>,
                revenue:<?= $total_price ?>,
            },
            <?php endforeach ?>
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['quantity',"revenue"],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Đã bán','Doanh thu']
    });
</script>
<script>
    new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart1',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            <?php foreach($lay_dh_12t as $k=>$v):
                extract($v);
                ?>
            {
                month: '<?= $month ?>',
                quantity:<?= $total_quantity ?>,
                revenue:<?= $total_price ?>,
            },
            <?php endforeach ?>
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'month',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['quantity',"revenue"],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Đã bán','Doanh thu']
    });
</script>
<script>
    new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart2',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            <?php foreach($lay_dh_n as $k=>$v):
                extract($v);
                ?>
            {
                month: '<?= $month ?>',
                quantity:<?= $total_quantity ?>,
                revenue:<?= $total_price ?>,
            },
            <?php endforeach ?>
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'month',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['quantity',"revenue"],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Đã bán','Doanh thu']
        
    });
</script>