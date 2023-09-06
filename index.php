
<!DOCTYPE html>
<html>
<head>
    <title>Ứng dụng tính tiền lãi</title>
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
input{
    height: 25px;
    font-size: 15px;
}
#buttons{
    justify-content: center;
    display: flex;
    padding-bottom: 15px;
    padding-top: 15px;
}
form{
    justify-content: center;
    display: flex;
}
</style>
<body>  
        <main>
        <h1 style="text-align: center;">Ứng dụng tính tiền lãi</h1>
        <form action="display_results.php" method="post">
            <table>

                <tr>
                    <td>
                    <label>Tiền đầu tư:</label>
                    </td>
                    <td>
                    <input type="text" name="tiendautu">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Lãi suất mỗi năm:</label>
                    </td>
                    <td>
                    <input type="text" name="percent">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Số năm:</label>
                    </td>
                    <td>
                    <input type="text" name="year">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <div id="buttons">
                        <input type="submit" value="Tính toán"><br>
                    </div>
                    </td>
                </tr>
            </table>
        </form>
        </main>
</body>
</html>