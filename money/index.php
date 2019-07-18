<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quan ly tieu dung</title>
    <style>
        .th {
            border: 2px solid black;
        }
        .ibox {
            width: 200px;
        }
        #name {
            width: 300px;
        }
        #price {
            width: 200px;
        }
        #day {
            width: 100px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td width=100>Tên sản phẩm</td>
                <td><input class="ibox" type="name" name="pName"/></td>
            </tr>
            <tr>
                <td>Ngày mua</td>
                <td><input class="ibox" type="date" /></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input class="ibox" type="number" name="pPrice" step="0.01" min=0 /></td>
            </tr>
        </table>
        <button type="submit">Thêm vào bảng</button>
    </form>
    <br>
    <table>
        <tr>
            <th id="name" class=th>ProductName</th>
            <th id="price" class=th>ProductPrice</th>
            <th id="day" class=th>ProductDay</th>
        </tr>
        <tr>
            <th colspan=2 class=th>Tổng giá tiền</th>
            <th class=th>e</th>
        </tr>
    </table>
    <?php
        $name = $_POST['name'];
        $price = $_POST['price'] . " €";
        $date = $_POST['day'];
    ?>
</body>
</html>