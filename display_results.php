<?php
    $tiendautu = $_POST['tiendautu'];
    $percent = $_POST['percent'];
    $year = $_POST['year'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<style>
body{
    justify-content: center;
    display: flex;
}
main{
    text-align: center;
    border: 2px solid #82343c;
    width: 600px;
    height: auto;
}
h1 {
    color: #82343c;
}
td{
    width: 200px;
    height: 30px;
    text-align: left;
    font-size: 20px;
}
#warn{
    width: 400px;
    height: 30px;
    text-align: center;
    font-size: 20px;
    color: red;
}

input{
    font-size: 20px;
}
form{
    justify-content: center;
    display: flex;
    padding-bottom: 15px;
    padding-top: 15px;
}
</style>
<body>  
        <main>
        <h1 style="text-align: center;">Ứng dụng tính tiền lãi</h1>
        <form action="display_results.php" method="post">
            <table>
                <tr>
                    <td colspan="2" id="warn">
                        <?php
                            if($percent>15){
                                echo "Lãi suất phải nhỏ hơn hoặc bằng 15!";
                                return;
                            }
                            if($year>=31){
                                echo "Vui lòng nhập số năm nhỏ hơn 31!";
                                return;
                            }
                            if($tiendautu<=0 || $percent<=0 || $year<=0){
                                echo "Vui lòng nhập số lớn hơn 0!";
                                return;
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Tiền đầu tư:</label>
                    </td>
                    <td>
                    $<?php echo number_format($tiendautu,2); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Lãi suất mỗi năm:</label>
                    </td>
                    <td>
                    <?php echo $percent; ?>%
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Số năm:</label>
                    </td>
                    <td>
                    <?php echo $year; ?>
                    </td>
                </tr>
                <tr>
                    <?php
                        for($i=1;$i<=$year;$i++){
                            $tiendautu = $tiendautu + ($percent*$tiendautu/100);
                            $tien = $tiendautu;
                        }
                    ?>
                    <td>
                    <label>Số tiền nhận được:</label>
                    </td>
                    <td>
                        $<?php echo number_format($tien,2); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 20px;">
                    Đã thực hiện tính toán này vào ngày <?php echo date('m/d/Y'); ?>.
                    </td>
                </tr>
            </table>
        </form>
        </main>
</body>
</html>